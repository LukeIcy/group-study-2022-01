@extends('layouts.layout')

@section('title', '最新消息')

@section('css')
    <link rel="stylesheet" href="./css/news.css">
    <style>
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

    <section class="news py-3 mb-3">
        <div class="container">
            <div class="news_title">
                <div class="row">
                    <div class="col-4">
                        <img class="mb-3" src="./team-img/news_pic/cat.png" width="302px" height="260px" alt="">
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="" style="color: #85550E;font-size: 80px;font-weight: 600;">最新消息</h1>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="./team-img/news_pic/dog.png" width="302px" height="260px" alt="">
                    </div>
                </div>
            </div>
            <ul class="d-flex justify-content-end">
                <li class="px-3">
                    <span>資料總筆數：</span>
                    <span class="text-danger">47</span>
                </li>
                <li class="px-3">
                    <span>每頁筆數：</span>
                    <span class="text-danger">4</span>
                </li>
                <li class="px-3">
                    <span>總頁數：</span>
                    <span class="text-danger">6</span>
                </li>
                <li>
                    <span>目前頁次：</span>
                    <span class="text-danger">1</span>
                </li>
            </ul>
            <hr>
        </div>
    </section>
    <section class="news_content">
        <div class="container">

            @foreach ($news as $item)

                <div class="row">
                    <div class="col-4">
                        <img class="w-100" style="height: 250px" src="{{ $item->image }}" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            {{$item->type}}</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">{{ $item->title }}</a></h3>
                        <h6 class="text-success mb-3">{{ $item->created_at }}</h6>
                        <p class="news_content">{{ $item->content }}</p>
                    </div>
                </div>
                <hr class="my-5">
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
