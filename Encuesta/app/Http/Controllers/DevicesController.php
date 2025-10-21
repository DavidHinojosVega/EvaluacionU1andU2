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
     public function createDevices(Request $request){
       $request->validate([
        "serialNumber"=>'required',
        "deviceType"=>'required',
        "brand"=>'required',
        "model"=>'required',
        "imeiNumber"=>'required',
        "purchaseDate"=>'required'
        
       ]);
       //GUARDAR REGISTRO
       $device = new Device();
       $device->serialNumber=$request->serialNumber;
       $device->deviceType=$request->deviceType;
       $device->brand=$request->brand;
       $device->model=$request->model;
       $device->imeiNumber=$request->imeiNumber;
       $device->status='Disponible';
       $device->purchaseDate=$request->purchaseDate;

       $device->save();

       return redirect()
            ->back()
            ->with('success','Registro insertado correctamente.');
        }
        
}


