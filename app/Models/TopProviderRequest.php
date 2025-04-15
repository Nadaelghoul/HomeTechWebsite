<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopProviderRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'area',
        'Problem_Address',
        'execution_day',
        'requirements',
        'provider_id',
        'service',
        'skill',
        'price',
        'service_provider',
        'request_key',
        'status',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
