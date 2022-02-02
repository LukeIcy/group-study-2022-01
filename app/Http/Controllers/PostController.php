<?php

namespace App\Http\Controllers;

use App\News;
use App\Http\Controllers\FilesController;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //最新消息(前台)
    public function index()
    {
        // $news = News::get();未啟用分頁功能前的原版
        // where('type', '最新消息')->透過where文章分流

        // 下面開始使用paginate(number)，laravel內建的分頁功能，會出現上一頁、下一頁、頁碼12345...
        // simplePaginate(number); 這個是簡單分頁的方式，只會出現上一頁跟下一頁的按鈕
        // cursorPaginate(number);這個不知道是什麼，還沒測
        // number = 你一頁想放幾篇文章的數量，下面就是想放5篇文章
        $news = News::where('type', '最新消息')->paginate(10);
        return view('frontpage.post.news',compact('news'));
    }

    // 最新消息內容頁(前台)
    public function article($id)
    {
        $news = News::find($id);
        // 我想排除本篇內容的id
        $post = News::where('id','!=',$news->id)->orderbydesc('id')->take(3)->get();
        // $post = News::orderbydesc('id')->take(3)->get();
        return view('frontpage.post.article',compact('news','post'));
    }

    // 寵物保姆(前台)
    public function sitter()
    {
        $num = 5;
        $sitter = News::where('type', '寵物保姆')->paginate($num);
        // dd($sitter->id);這個會報錯，因為陣列沒有自己的id
        // dd($sitter[0]->id);這個不會抱錯，因為他是陣列
        return view('frontpage.post.sitter',compact('sitter','num'));
    }

    // 動保法律與新聞列表(前台)
    // 之後記得換view的路徑
    public function law()
    {
        $law = News::where('type', '動保法律')->orWhere('type', '動物新聞')->paginate(5);
        return view('frontpage.post.law',compact('law'));
    }

    // 動保法律與新聞內容頁(前台)
    public function lawarticle($id)
    {
        $lawnews = News::find($id);
        return view('frontpage.post.lawarticle',compact('lawnews'));
    }

    // 動保法律&動物救援(前台) 只顯示兩筆資料
    // 這一頁不用分頁
    public function lawrescue()
    {
        // 先找動保法律文章，然後文章id倒敘，接著鎖定前兩筆資料，取得他們
        $lawrescue = News::where('type', '動保法律')->orderbydesc('id')->take(2)->get();
        return view('frontpage.post.lawrescue',compact('lawrescue'));
    }

    // 一起回家故事(前台)
    public function match()
    {
        $news = News::where('type', '一起回家故事')->paginate(10);
        return view('frontpage.post.match',compact('news'));
    }

    // 文章列表(後台)
    public function list()
    {
        $newsuse = News::get();
        return view('admin.news.list',compact('newsuse'));
    }

    // 新增文章(後台)
    public function create()
    {
        return view('admin.news.create');
    }

    // 儲存文章(後台)
    public function store(Request $request)
    {
        // 目前上傳的圖檔的確會到新設的資料夾
        // 但是這個變數要帶入到 'image' => $request->image, 裡面
        // 才能讓資料表的路徑生效

        // 如果你只有輸入標題跟內文，沒有上傳圖片，FilesController::imgUpload會報錯，
        // 因為他需要有檔案才能生成路徑，所以必須要用if排除這個狀況
        $path = null;
        if ($request->image){
            $path = FilesController::imgUpload($request->image,'posts');
        };

        // 已經直接用select防呆，所以下面捨棄
        // if ($request->type == '文章類型') {
        //     return view('admin.news.create')->with('msg','請選擇文章類型');
        // }

        // 下面是老方法  本來要淘汰了 沒想到還是回來用他了...
        News::create([
            'title' => $request->title,
            'type' => $request->type,//新增的，享用來做文章分類
            'content' => $request->content,
            'image' => $path,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        // 新方法 更好用 可惜這邊不能用 因為要儲存圖片
        // News::create($request->all());

        return redirect()->route('news.list');
    }

    // 編輯文章(後台)
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit',compact('news'));
    }

    public function update($id,Request $request)
    {
        $news = News::find($id);

        $path = $news->image;
        if ($request->image){
            $path = FilesController::imgUpload($request->image,'posts');
        };

        // 好用的新方法 可惜因為有圖片 先轉用舊方法
        // News::find($id)->update($request->all());

        $news->title = $request->title;
        $news->type = $request->type;
        $news->content = $request->content;
        $news->image = $path;
        $news->save();

        return redirect()->route('news.list');
    }

    public function destroy($id)
    {
        News::find($id)->delete();

        return redirect()->route('news.list');
    }
}
