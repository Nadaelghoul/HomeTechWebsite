<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Profile;
use App\Models\ServiceRequest;
use App\Models\TopProviderRequest;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\Relation as EloquentRelation;


/**
 * @method \Laravel\Sanctum\NewAccessToken createToken(string $name, array $abilities = [])
 */

class Provider extends Authenticatable {
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

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

