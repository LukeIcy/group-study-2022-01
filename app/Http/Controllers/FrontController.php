<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // 一起回家 首頁(前台)
    public function index()
    {
        return view('frontpage.index');
    }
    // 關於我們(前台)
    public function aboutus()
    {
        return view('frontpage.aboutus');
    }
    // 支持我們(前台)
    public function supportus()
    {
        return view('frontpage.supportus');
    }
}
