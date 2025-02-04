<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome'); // ✅ แก้ syntax
})->name('welcome'); // ✅ เพิ่ม name ให้ redirect กลับมาถูก

// ✅ เพิ่ม Route สำหรับการสมัครสมาชิก
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
