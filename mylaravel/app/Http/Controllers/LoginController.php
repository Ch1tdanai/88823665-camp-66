<?php

namespace App\Http\Controllers;

use App;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    //
    function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user != null && Hash::check($request->password, $user->password)){
            session(['user' => $user]);
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }

    public function logout()
    {
        
        session()->forget('user');
        session()->flush();
        return redirect('/login'); // กลับไปหน้า Login หลังจาก Logout
    }
    protected function redirectTo()
    {
        return '/home';
    }
}
