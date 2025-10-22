<?php

namespace App\Http\Controllers;
use App\Models\Assigment;

use Illuminate\Http\Request;

class AssigmentController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    public function getAssigment(){
        //SELECT * FROM USERS
        $data = Assigment:: all();
       // dd($data);
       return view("admin.assigment")->with('assigment',$data);
    }

}
