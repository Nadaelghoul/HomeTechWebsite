<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model
{
    protected $fillable = ['provider_id', 'token', 'expires_at'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
