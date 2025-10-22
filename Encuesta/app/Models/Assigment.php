<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    protected $table = "assignments";
    protected $fillable =[
        'userId',
        'deviceId',
        'returnDate',
        'assignedDate',
        'status',
    ];

     public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
 
    public function device()
    {
        return $this->belongsTo(Device::class, 'deviceId');
    }
 

}
