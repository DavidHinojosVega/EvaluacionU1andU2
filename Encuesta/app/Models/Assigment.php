<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    protected $table = "assigments";
    protected $fillable =[
        'name',
        'email',
        'password',
        'role',
        'dni',
        'address',
        'phone',
        'status'
    ];
}
