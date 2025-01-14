<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // แสดงฟอร์มให้ผู้ใช้กรอกแม่สูตรคูณ
    public function index()
    {
        return view('MyView');
    }

    // รับค่าจากฟอร์มและแสดงตารางสูตรคูณ
    public function generateTable(Request $request)
    {
        $multiplier = $request->input('multiplier'); // รับค่าแม่สูตรคูณจากฟอร์ม
        $table = [];

        // คำนวณตารางสูตรคูณ
        for ($i = 1; $i <= 10; $i++) {
            $table[] = [
                'number' => $i,
                'result' => $multiplier * $i
            ];
        }

        return view('MyView', compact('multiplier', 'table'));
    }
}

