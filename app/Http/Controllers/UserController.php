<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //使用者列表
    public function list()
    {
        $user = User::get();
        return view('admin.user.list',compact('user'));
    }
}
