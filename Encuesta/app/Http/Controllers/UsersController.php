<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getUsers(){
        //SELECT * FROM USERS
        $data = User:: all();
       // dd($data);
       return view("admin.users")->with('usuarios',$data);
    }

    public function createUsers(Request $request){
       //dd($request->email);
       //REGLAS DE VALIDACION
       $request->validate([
        "name"=>'required',
        "email"=>'required|email|unique:users,email',
        "password"=>'required|min:4',
        "password-confirm"=>'required|min:4|same:password',
        "role"=>'required',
        "dni"=>'required',
        "address"=>'required',
        "phone"=>'required'
       ]);
       //GUARDAR REGISTRO
       $user = new User();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=Hash::make($request->password);
       $user->role=$request->role;
       $user->dni=$request->dni;
       $user->address=$request->address;
       $user->phone=$request->phone;
       $user->status='Activo';
       $user->save();

       return redirect()
            ->back()
            ->with('success','Registro insertado correctamente.');
    }
}


