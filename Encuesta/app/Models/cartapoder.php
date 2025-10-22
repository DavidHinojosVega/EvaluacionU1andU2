<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cartapoder extends Model
{
    protected $table="cartapoder";
    protected $fillable=[
        'assigmentId',
        'route',
        'content',
        'qrCode',
        'userId',
        'date'
    ];
}
