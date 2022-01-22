<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // 會員中心 送養人的個人資料(前台) 希望能解開這麼謎
    // 在外面的網頁嘗試用這樣帶資料進來看看，好像有成功?
    // href="{{ route('center.member',['id' =>Auth::user()->id]) }}"
    // public function member($id)
    // {
    //     $member = User::find($id);
    //     return view('frontpage.center.member',compact('member'));
    // }


    // 會員中心 送養人的個人資料(前台)
    public function member()
    {
        return view('frontpage.center.member');
    }

    // 會員中心 編輯送養人個人資料
    public function memberedit()
    {
        return view('frontpage.center.member_edit');
    }

    // 會員中心 我要送養
    public function putadop()
    {
        return view('frontpage.center.putadop');
    }
}
