<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    const STATUS_UNREAD = 0;
    const STATUS_READED = 1;

    public $table = 'feedback';
    public $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status'
    ];
    
    // SCOPE bir marta yozib ko'p marta ishlatiladigan metod
    public function scopeUnreaded()
    {
        return $this->where('status', '=', self::STATUS_UNREAD)->latest();
    }
}
