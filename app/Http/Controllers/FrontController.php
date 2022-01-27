<?php

namespace App\Http\Controllers;

use App\News;
use App\Animal;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // 一起回家 首頁(前台)
    public function index()
    {
        // 取八篇最新的寵物送養
        $animal = Animal::where('launched', '上架中')->orderbydesc('id')->take(8)->get();
        // 只取一篇最新的最新消息
        $news = News::where('type', '最新消息')->orderbydesc('id')->take(1)->get();
        // 只取兩篇最新的動保新聞
        $law = News::where('type', '動物新聞')->orderbydesc('id')->take(2)->get();
        
        // dd($news);
        return view('frontpage.index',compact('animal','news','law'));
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
