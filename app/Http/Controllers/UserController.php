<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //使用者列表
    public function list()
    {
        $user = User::get();
        return view('admin.user.list',compact('user'));
    }

    // 更改使用者密碼
    public function update($id, Request $request)
    {
        $user = User::find($id);
        // 改密碼，必需用系統預設的hash雜湊加密
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.list');
    }

    // 刪除使用者
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('user.list');
    }
}
