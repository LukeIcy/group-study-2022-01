<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdopController extends Controller
{
    // 寵物照片(前台)
    public function index()
    {
        return view('frontpage.center.adoption');
    }

    // 動物資訊&申請表(前台)
    public function apply()
    {
        return view('frontpage.center.animal');
    }
}
