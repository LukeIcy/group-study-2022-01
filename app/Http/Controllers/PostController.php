<?php

namespace App\Http\Controllers;

use App\News;
use App\Http\Controllers\FilesController;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //最新消息
    public function index()
    {
        $news = News::get();
        return view('frontpage.post.news',compact('news'));
    }

    // 最新消息列表(後台)
    public function list()
    {
        $newsuse = News::get();
        return view('admin.news.list',compact('newsuse'));
    }

    // 新增最新消息(後台)
    public function create()
    {
        return view('admin.news.create');
    }

    // 儲存最新消息(後台)
    public function store(Request $request)
    {
        // 目前上傳的圖檔的確會到新設的資料夾
        // 但是這個變數要帶入到 'image' => $request->image, 裡面
        // 才能讓資料表的路徑生效
        $path = FilesController::imgUpload($request->image,'posts');

        // 老方法  本來要淘汰了 沒想到還是回來用他了...     
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // 新方法 更好用 可惜這邊不能用 因為要儲存圖片
        // News::create($request->all());

        return redirect()->route('news.list');
    }

    // 編輯最新消息(後台)
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit',compact('news'));
    }

    public function update($id,Request $request)
    {
        $path = FilesController::imgUpload($request->image,'posts');
        
        // 好用的新方法 可惜因為有圖片 先轉用舊方法
        // News::find($id)->update($request->all());

        $news = News::find($id);
        $news->title = $request->title;
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
