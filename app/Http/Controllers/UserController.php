<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\FilesController;

class UserController extends Controller
{
    //使用者列表
    public function list()
    {
        $user = User::get();
        return view('admin.user.list',compact('user'));
    }

    // 更改使用者資料
    public function update($id, Request $request)
    {
        $user = User::find($id);

        $path = $user->avatar;
        if ($request->avatar){
            $path = FilesController::imgUpload($request->avatar,'avatar');
        };

        $user->name = $request->name;
        $user->avatar = $path;
        $user->career = $request->career;
        $user->experience = $request->experience;
        $user->email = $request->email;
        $user->adopnumber = $request->adopnumber;
        // 改密碼，必需用系統預設的hash雜湊加密
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('center.member');
    }

    // 刪除使用者
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('user.list');
    }

    // 暫時先不做新增使用者
    // 考慮讓送養人註冊後，再開權限給他
    // 總之兩個方案二選一
}
