<?php

namespace App\Http\Controllers;

use App\Animal;
use App\AnimalImg;
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

    // 會員中心 我要送養(資料儲存)
    public function store(Request $request)
    {
        $animal = Animal::create([
            // 我感覺下面這個user_id最可能會出問題
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'species' => $request->species,
            'gender' => $request->gender,
            'age' => $request->age,
            'persona' => $request->persona,
            'chara' => $request->chara,
            'health' => $request->health,
            'fixed' => $request->fixed,
            'location' => $request->location,
            'vaccine' => $request->vaccine,
            'adcond' => $request->adcond,
            'exhort' => $request->exhort,
            'launched' => $request->launched,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        foreach ($request->img as $value) {
            AnimalImg::create([
                'image' => $value,
                'animal_id' => $animal ->id,
            ]);
        }
        return redirect()->route('center.member');
    }

    // 會員中心 我要送養 上傳多圖片
    public function imgUpload(Request $request)
    {
        $path = '[';
        foreach ($request->img as $key => $value) {
            $path = $path.'"'.FilesController::imgUpload($value, 'animal').'",';
        }
        $path = rtrim($path, ',');
        $path = $path.']';
        return $path;

        return view('frontpage.center.putadop');
    }

    // 會員中心 我要送養 刪除選擇的原本要上傳的多圖片
    public function imgDelete(Request $request)
    {
        AnimalImg::where('image', $request->path)->delete();
        FilesController::deleteUpload($request->path);
        return 'ok';
    }


}
