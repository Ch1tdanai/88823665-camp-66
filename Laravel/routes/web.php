<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/multiplication', [MyController::class, 'index']);
Route::post('/multiplication', [MyController::class, 'generateTable']);
