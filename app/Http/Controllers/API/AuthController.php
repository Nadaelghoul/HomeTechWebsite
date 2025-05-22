<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Provider;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use App\Models\RefreshToken;
use Carbon\Carbon;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\TopProviderRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\In;
use Illuminate\Validation\Rules\RequiredIf;



class AuthController extends Controller
{
    public function registerClient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u','regex:/^\s*\S+\s+\S+\s+\S+(\s+\S+)*\s*$/'],
            'email' => 'required|string|max:255|email|unique:providers,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|digits_between:8,15',
            'area' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $provider = Provider::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'area' => $request->area,
            'service' => "",
            'skills' => json_encode(""),
        ]);

        Profile::create([
            'provider_id' => $provider->id,
            'name' => $provider->name,
            'email' => $provider->email,
            'password' => $request->password,
            'phone' => $provider->phone,
            'area' => $provider->area,
            'service' => "",
            'skills' => json_encode(""),
            'photo' => 'images/profile1.jpeg',
        ]);

        $accessToken = $provider->createToken('access_token', ['*'])->plainTextToken;

        $refreshToken = Str::random(60);
        RefreshToken::create([
            'provider_id' => $provider->id,
            'token' => hash('sha256', $refreshToken),
            'expires_at' => Carbon::now()->addDays(7),
        ]);

        return response()->json(['message' => 'User registered successfully',
            'user' => $provider,
            'access_token' => $accessToken,
            ])
            ->cookie('access_token', $accessToken, 15)
            ->cookie('refresh_token', $refreshToken, 60 * 24 * 7)
            ->cookie('provider_id', $provider->id, 60 * 24 * 7);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u','regex:/^\s*\S+\s+\S+\s+\S+(\s+\S+)*\s*$/'],
            'email' => 'required|string|max:255|email|unique:providers,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|digits_between:8,15',
            'area' => 'required|string',
            'service' => 'nullable|string',
            'skills' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $provider = Provider::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'area' => $request->area,
            'service' => $request->service,
            'skills' => json_encode($request->skills),
        ]);

        Profile::create([
            'provider_id' => $provider->id,
            'name' => $provider->name,
            'email' => $provider->email,
            'password' => $request->password,
            'phone' => $provider->phone,
            'area' => $provider->area,
            'service' => $provider->service,
            'skills' => $provider->skills,
            'photo' => 'images/profile1.jpeg',
        ]);

        $accessToken = $provider->createToken('access_token', ['*'])->plainTextToken;

        $refreshToken = Str::random(60);
        RefreshToken::create([
            'provider_id' => $provider->id,
            'token' => hash('sha256', $refreshToken),
            'expires_at' => Carbon::now()->addDays(7),
        ]);

        return response()->json(['message' => 'User registered successfully',
            'user' => $provider,
            'access_token' => $accessToken,
            ])
            ->cookie('access_token', $accessToken, 15)
            ->cookie('refresh_token', $refreshToken, 60 * 24 * 7)
            ->cookie('provider_id', $provider->id, 60 * 24 * 7);
    }

   public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('provider')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $provider = Auth::guard('provider')->user();

            $accessToken = $provider->createToken('access_token', ['*'])->plainTextToken;

            $refreshToken = Str::random(60);
            RefreshToken::create([
                'provider_id' => $provider->id,
                'token' => hash('sha256', $refreshToken),
                'expires_at' => Carbon::now()->addDays(7),
            ]);

            return response()->json([
                'message' => 'Login successful',
                'user' => $provider,
                'access_token' => $accessToken,
            ])
            ->cookie('access_token', $accessToken, 15)
            ->cookie('refresh_token', $refreshToken, 60 * 24 * 7)
            ->cookie('provider_id', $provider->id, 60 * 24 * 7);
        }

        return response()->json(['error' => 'Invalid email or password'], 401);
    }

     public function logout(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);
        if (!$provider) {
            return response()->json(['error' => 'User not found'], 404);
        }
        RefreshToken::where('provider_id', $provider->id)->delete();

        return response()->json(['message' => 'Logout successful',
            'user' => $provider,
            ])
            ->withoutCookie('access_token')
            ->withoutCookie('refresh_token')
            ->withoutCookie('provider_id');
    }

    public function check(Request $request)
    {

        $user_id = $request->cookie('provider_id');
        $user = Provider::find($user_id);

        return response()->json([
            'authenticated' => $user ? true : false,
            'user' => $user,
        ]);
    }
}

