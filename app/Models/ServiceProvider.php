<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone','password','area' ,'service', 'skills'];

    protected $casts = [
        'skills' => 'array', // Convert JSON to array
    ];
}

