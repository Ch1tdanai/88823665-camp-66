<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(AuthMiddleware::class);
    }

    public function index()
    {
        return view('home');
    }

    public function error404()
    {
        return view('errors.404');
    }

    public function error500()
    {
        return view('errors.500');
    }
}

