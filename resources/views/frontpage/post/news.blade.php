@extends('layouts.layout')

@section('title', '最新消息')

@section('css')
    <link rel="stylesheet" href="./css/news.css">
    <style>
        #imgcat{
            width: 61%;
            height: 220px;
            opacity: 0.8;
        }
        #imgdog{
            width: 66%;
            height: 188px;
            opacity: 0.8;
        }

        .news_content {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        img{
            object-fit: cover;
        }
    </style>
@endsection

@section('main')

<section class="news_title">
    <div class="container">
        <div class="row mb-3 h1_row">
            <div class="col-lg-4 d-flex align-items-end justify-content-center">
                <img src="{{asset('team-img/news_pic/cat.png')}}" id="imgcat" alt="">
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <h1 style="color: #85550E;font-size: 80px;font-weight: 600;">最新消息</h1>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{asset('team-img/news_pic/dog.png')}}" id="imgdog" alt="">
            </div>
        </div>
        <div class="row">
            <ul class="d-flex justify-content-center justify-content-sm-end">
                <li class="px-1 px-sm-3">
                    <span>資料總筆數：</span>
                    <span class="text-danger">{{ count($news) }}</span>
                </li>
                <li class="px-1 px-sm-3">
                    <span>每頁筆數：</span>
                    <span class="text-danger">4</span>
                </li>
                <li class="px-1 px-sm-3">
                    <span>總頁數：</span>
                    <span class="text-danger">6</span>
                </li>
                <li>
                    <span>目前頁次：</span>
                    <span class="text-danger">1</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<hr style="height: 2px;background-color: #d56246;opacity: 0.8;">

    <section class="news_content">
        <div class="container">

            @foreach ($news as $item)

                <div class="row flex-column flex-md-row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        {{-- 圖片跟標題都設置為能連到文章主頁 --}}
                        <a href="{{route('news.article',['id'=> $item->id])}}">
                            <img class="w-100" style="height: 320px" src="{{ $item->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            {{$item->type}}</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">{{ $item->title }}</a></h3>
                        <h6 class="text-success mb-3">{{ $item->created_at }}</h6>
                        <p class="news_content">{{ $item->content }}</p>
                    </div>
                </div>
                <hr class="my-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">
            @endforeach
        {{-- 以下測試paginate的分頁按鈕功能 --}}

        <div class="row">
            <div class="col d-flex justify-content-center mb-5">
                {{$news->links()}}
            </div>
        </div>
        </div>

        <!-- 原本的按鈕區塊 -->
        {{-- <div class="py-5 mb-5">
            <div class="btn-toolbar mb-3 d-flex justify-content-center" role="toolbar"
                aria-label="Toolbar with button groups">
                <div class="btn-group rounded-pill" role="group" aria-label="First group">
                    <button class="btngroup--btn">PREF</button>
                    <button class="btngroup--btn">1</button>
                    <button class="btngroup--btn">2</button>
                    <button class="btngroup--btn">3</button>
                    <button class="btngroup--btn">4</button>
                    <button class="btngroup--btn">5</button>
                    <button class="btngroup--btn">6</button>
                    <button class="btngroup--btn">NEXT</button>
                </div>
            </div>
        </div> --}}
    </section>

@endsection

@section('js')

@endsection
