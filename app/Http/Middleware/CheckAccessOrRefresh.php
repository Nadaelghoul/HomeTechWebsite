<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RefreshToken;
use Carbon\Carbon;

class CheckAccessOrRefresh
{
    public function handle(Request $request, Closure $next)
    {
        if ($token = $request->cookie('access_token')) {
           return $next($request);
        }

        else if ($rt = $request->cookie('refresh_token')) {
            $hashed = hash('sha256', $rt);
            $record = RefreshToken::where('token', $hashed)
                        ->where('expires_at', '>', Carbon::now())
                        ->first();

            if ($record && $provider = $record->provider) {
                $newAccess = $provider->createToken('access_token', ['*'])->plainTextToken;
                /** @var \Illuminate\Http\Response $response */
                $response = $next($request);
                return $response->withCookie(cookie('access_token', $newAccess, 15, null, null, false, true));
            }
        }

        return response()->json(['error' => 'Unauthenticated'], 401)
                       ->withoutCookie('access_token')
                       ->withoutCookie('refresh_token');
    }
}
