<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model {
    use HasFactory;

    protected $fillable = ['provider_id', 'name', 'email','password' ,'phone', 'area', 'service', 'skills', 'photo'];

    protected $casts = ['skills' => 'array'];

    public function provider()
{
    return $this->belongsTo(Provider::class);
}

    // Get Profile Image with Default
    public function getProfileImageAttribute() {
        return asset($this->photo ?? 'images/profile1.jpeg');
    }

}

