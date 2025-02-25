<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthMiddleware;

// Route::get('/',function(){
//     return view('layouts.default');
// });

Route::get('/hello', function () {
    return "<h1>Hello world</h1>";
});
Route::get(
    "/mycontroller/{id?}",
    [Mycontroller::class, 'myfunction']
);

Route::post(
    '/mycontroller/{id?}',
    [Mycontroller::class, 'myfunction']
);

Route::get('login', [LoginController::class, 'index'])->name('logined');
Route::post('login', [LoginController::class, 'login'])->name('login');
// Route::post('login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'create']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'edit']);

Route::put('/user/{id}', [UserController::class, 'saveEdit'])->name('user.update');


Route::delete('/user/{id}', [UserController::class, 'delete'])->name('user.delete');


Route::get("/500", [HomeController::class, 'error500']);
Route::get("/404", [HomeController::class, 'error404']);
Route::get('/home', [HomeController::class, 'index'])->middleware('user')->name('home');
Route::post('/home', [HomeController::class, 'index']);
Route::get("/product", [ProductController::class, 'index']);
Route::post("/product", [ProductController::class, 'creat_product']);
Route::post("/category", [ProductController::class, 'create_category']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

