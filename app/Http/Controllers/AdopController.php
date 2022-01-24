<?php

namespace App\Http\Controllers;

use App\Animal;
use App\AnimalImg;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdopController extends Controller
{
    // 送養寵物列表(前台)
    public function index()
    {
        $animal = Animal::get();
        return view('frontpage.center.adoption',compact('animal'));
    }

    // 寵物各別資訊頁 & 申請表(前台)
    public function animal($id)
    {
        $animal = Animal::find($id);
        return view('frontpage.center.animal',compact('animal'));
    }


    // 會員中心 送養人的個人資料(前台) 希望能解開這麼謎
    // 在latout網頁加上下面按鈕，嘗試用這樣帶資料進來看看，好像有成功?
    // <a class="btn" href="{{ route('center.member',['id' => Auth::user()->id]) }}">會員中心</a>
    // 或<a class="btn" href="/member/{{Auth::user()->id}}">會員中心</a>
    // 
    // public function member($id)
    // {
    //     $member = User::find($id);
    //     dd($member);
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

    // 會員中心 我的送養紀錄
    public function record()
    {
        $animal = Animal::where('user_id', Auth::user()->id)->get();
        // dd($animal);
        return view('frontpage.center.member_record',compact('animal'));
    }

    // 會員中心 我要送養
    public function putadop()
    {
        return view('frontpage.center.putadop');
    }

    // 會員中心 編輯送養動物頁
    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('frontpage.center.putadopedit',compact('animal'));
    }

    // 會員中心 我要送養(資料儲存)
    public function store(Request $request)
    {

        // 可能要逐個判定
        // if ($request->password != null){
        //     $user->password = Hash::make($request->password);
        // } else{
        //     return redirect()->route('center.member')->with(msg,'xxxxxxx'); 
        // }
        // } else{
        //     return redirect()->back()->with(msg,'xxxxxxx'); 
        // }

        // https://ithelp.ithome.com.tw/articles/10208905
        // 有一個方法 在資料不足時 可以防止資料庫被存入
        

        $animal = Animal::create([
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
            // 下面直接讓新增的寵物為上架中
            'launched' => '上架中',
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

    // 會員中心 傳送送養動物編輯後的資料
    public function update($id,Request $request)
    {
        $animal = Animal::find($id);
        $animal->name = $request->name; 
        $animal->species = $request->species; 
        $animal->gender = $request->gender;
        $animal->age = $request->age;
        $animal->persona = $request->persona; 
        $animal->chara = $request->chara;
        $animal->health = $request->health; 
        $animal->fixed = $request->fixed;
        $animal->location = $request->location; 
        $animal->vaccine = $request->vaccine;
        $animal->adcond = $request->adcond;
        $animal->exhort = $request->exhort;
        $animal->save();

        // 儲存新增的圖片檔案
        if ($request->img != Null) {
            foreach ($request->img as $value) {
                AnimalImg::create([
                    'image' => $value,
                    'user_id' => $animal->id,
                ]);
            }
        }
        return redirect()->route('center.record');
    }

    // 調整寵物的上下架
    public function launched($id,Request $request){
        $animal = Animal::find($id);
        $animal->launched = $request->launched;
        $animal->save();

        return redirect()->route('center.record');
    }
}
