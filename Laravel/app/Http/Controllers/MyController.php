<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function multiplicationTable(Request $request)
    {
        $selectedNumber = $request->input('number', 1); // ค่าเริ่มต้นเป็น 1
        $multiplicationTable = [];

        // สร้างตารางสูตรคูณ
        for ($i = 1; $i <= 12; $i++) {
            $multiplicationTable[] = $selectedNumber * $i;
        }

        return view('myview', compact('selectedNumber', 'multiplicationTable'));
    }
}
