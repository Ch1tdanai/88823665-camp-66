<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "<h1>Hello world</h1>";
});
Route::get("/mycontroller/{id?}",
[Mycontroller::class,'myfunction']);

Route::post('/mycontroller/{id?}',
[Mycontroller::class,'myfunction']);

Route::get('/',function(){
    return view('layouts.default');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/login',[LoginController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);

Route::post('/register',[RegisterController::class,'create']);

Route::get('/user',[UserController::class,'index']);

Route::get('/user/{id}',[UserController::class,'edit']);

Route::put('/user',[UserController::class,'saveEdit']);

Route::delete('/user',[UserController::class,'delete']);

Route::get("/500", [HomeController::class, 'error500']);
Route::get("/404", [HomeController::class, 'error404']);
