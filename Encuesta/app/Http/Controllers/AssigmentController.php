<?php

namespace App\Http\Controllers;
use App\Models\Assigment;
use App\Models\User;
use App\Models\Device;

use Illuminate\Http\Request;

class AssigmentController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    public function getAssigment(){
        //SELECT * FROM USERS
        $data = Assigment:: all();
        $users = User:: all();
        $devices = Device:: all();
       // dd($data);
       return view("admin.assigment")
       ->with('assigment',$data)
       ->with('users',$users)
       ->with('devices',$devices);
    }
    public function createAssigment(){
        

    $deviceId = $request->input('device_id');
    $device = Device::find($deviceId);
    $device->status = 'En uso';
    $device->save();
    }

}
