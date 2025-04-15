<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'area',
        'address',
        'execution_day',
        'requirements',
        'service',
        'skill',
        'price',
        'request_key',
        'status',
        'accepted_provider_id',
    ];


    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'provider_service_requests')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function acceptedProvider()
{
    return $this->belongsTo(Provider::class, 'accepted_provider_id');
}

}
