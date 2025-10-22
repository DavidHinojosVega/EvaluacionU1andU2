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
    public function createAssigment(Request $request){
        

    
    

     $request->validate([
        "userId"=>'required',
        "deviceId"=>'required',
        "returnDate"=>'required',
        "assignedDate"=>'required',
       ]);
       //GUARDAR REGISTRO
       $user = new Assigment();
       $assigment->userId=$request->userId;
       $assigment->deviceId=$request->deviceId;
       $assigment->returnDate=$request->returnDate;
       $assigment->assignedDate=$request->assignedDate;
       $assigment->status='Activo';
       
       $assigment->save();
       $deviceId = $request-> deviceId;
       $device = Device::find($deviceId);
       $device->status = 'En uso';
       $device->save();

       return redirect()
            ->back()
            ->with('success','Registro insertado correctamente.');
    

       
    }

}
