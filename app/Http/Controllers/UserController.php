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
        $usernord = User::where('role' , '!=' , '工程師')->get();
        return view('admin.user.list',compact('user','usernord'));
    }

    // 後台使用者列表編輯更新使用者權限專用
    public function updaterole($id, Request $request)
    {
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.list');
    }

    // 後台使用者列表編輯更新使用者密碼專用
    public function updatepassword($id, Request $request)
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
    
    // 暫時先不做新增使用者
    // 考慮讓送養人註冊後，再開權限給他
    // 總之兩個方案二選一

    // 更改使用者資料 會員中心編輯個人資料專用 沒有提供改密碼
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
        // if ($request->password != null){
        //     $user->password = Hash::make($request->password);
        // }
        $user->save();

        return redirect()->route('center.member');
    }
}
