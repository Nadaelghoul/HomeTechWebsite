<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message',
        'is_read',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Provider::class, 'sender_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(Provider::class, 'receiver_id');
    }
}
