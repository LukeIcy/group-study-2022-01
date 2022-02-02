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
        // 下面沒辦法只取一筆，不過first()居然取到動物新聞跟動保法律的資料 怪怪
        // $news = News::where('type', '最新消息')->orderbydesc('id')->first()->get();
        // $news = News::where('type', '最新消息')->latest()->get();
        // 下面這個到底抓了什麼...
        // $news = News::where('type', '最新消息')->latest()->take(1);
        // 下面都可以只取一筆，但會報錯...
        // $news = News::where('type', '最新消息')->orderbydesc('id')->first();
        // $news = News::where('type', '最新消息')->latest()->first();
        // 下面都可以只取一筆，不會報錯
        // $news = News::where('type', '最新消息')->orderbydesc('id')->take(1)->get();
        $news = News::where('type', '最新消息')->latest()->take(1)->get();
        // dd($news);

        // 只取兩篇最新的動保新聞
        $law = News::where('type', '動物新聞')->orWhere('type','動保法律')->orderBy('id','desc')->take(2)->get();
        
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
