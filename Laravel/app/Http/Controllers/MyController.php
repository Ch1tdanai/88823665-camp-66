<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function multiplicationTable($number)
    {
        return view('myview', ['number' => $number]);
    }
}
