<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    public function getDevices(){
        //SELECT * FROM USERS
        $data = Device:: all();
       // dd($data);
       return view("admin.devices")->with('dispositivos',$data);
    }
}
