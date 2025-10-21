<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = "devices";
    protected $fillable =[
        'serialNumber',
        'deviceType',
        'brand',
        'model',
        'imeiNumber',
        'status',
        'purchaseDate'
    ];
}
