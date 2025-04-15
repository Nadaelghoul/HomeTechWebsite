<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Provider extends Authenticatable {
    use HasFactory;

    protected $fillable = ['name', 'email','password' ,'phone','area' ,'service', 'skills'];

    protected $casts = [
        'skills' => 'array', // Convert JSON to array
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() {
        return $this->hasOne(Profile::class, 'provider_id');
    }

    public function serviceRequests()
    {
        return $this->belongsToMany(ServiceRequest::class, 'provider_service_requests')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function topProviderRequests()
    {
        return $this->hasMany(TopProviderRequest::class);
    }
}

