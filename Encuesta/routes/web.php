<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});






Route::group(['prefix'=>'dashboard'],function(){
Route::resource('/',DashboardController::class);
Route::get('/users',[UsersController::class,'getUsers']);
Route::post('/users', [UsersController::class, 'createUsers']);
Route::get('/devices',[DevicesController::class,'getDevices']);
Route::post('/devices',[DevicesController::class,'createDevices']);
Route::get('/assigment',[AssigmentController::class,'getAssigment']);
Route::post('/assigment',[AssigmentController::class,'creatAssigment']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
