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
    public function animal()
    {
        return view('frontpage.center.animal');
    }

    // 會員中心 送養人的個人資料(前台)
    public function member()
    {
        return view('frontpage.center.member');
    }
}
