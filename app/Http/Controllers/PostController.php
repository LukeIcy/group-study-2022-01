<?php

namespace App\Http\Controllers;

use App\News;
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
        // 老方法
        // News::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $request->image,
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now(),
        // ]);

        News::create($request->all());

        // 下面是報錯原因
        // return view('admin.newslist');
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
        News::find($id)->update($request->all());

        return redirect()->route('news.list');
    }

    public function destroy($id)
    {
        News::find($id)->delete();

        return redirect()->route('news.list');
    }
}
