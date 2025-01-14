<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // แสดงฟอร์มให้ผู้ใช้กรอกข้อมูล
    public function index()
    {
        return view('multiplication');
    }

    // รับค่าและสร้างตารางสูตรคูณ
    public function generateTable(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|integer|min:1|max:12',
        ]);

        $number = $validated['number'];
        $table = [];
        for ($i = 1; $i <= 12; $i++) {
            $table[] = $number * $i;
        }

        return view('multiplication', compact('table', 'number'));
    }
}

