<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert(["name"=>'Admin1',"email"=>'Admin1@gmail.com',"password"=>Hash::make('1234'),"role"=>'Admin',"dni"=>'12345678F',"address"=>'Av. 20 de noviembre 2700',"phone"=>'6367008008',"status"=>'Activo']);
    DB::table('users')->insert(["name"=>'Empleado1',"email"=>'Empleado1@gmail.com',"password"=>Hash::make('1234'),"role"=>'Empleado',"dni"=>'12345678F',"address"=>'Av. 20 de noviembre 2700',"phone"=>'6367008008',"status"=>'Activo']);
    DB::table('users')->insert(["name"=>'Empleado2',"email"=>'Empleado2@gmail.com',"password"=>Hash::make('1234'),"role"=>'Empleado',"dni"=>'12345678F',"address"=>'Av. 20 de noviembre 2700',"phone"=>'6367008008',"status"=>'Activo']);
    DB::table('users')->insert(["name"=>'Empleado3',"email"=>'Empleado3@gmail.com',"password"=>Hash::make('1234'),"role"=>'Empleado',"dni"=>'12345678F',"address"=>'Av. 20 de noviembre 2700',"phone"=>'6367008008',"status"=>'Activo']);
    DB::table('users')->insert(["name"=>'Empleado4',"email"=>'Empleado4@gmail.com',"password"=>Hash::make('1234'),"role"=>'Empleado',"dni"=>'12345678F',"address"=>'Av. 20 de noviembre 2700',"phone"=>'6367008008',"status"=>'Activo']);
    }
}
