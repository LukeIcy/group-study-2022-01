@extends('layouts.layout')

@section('title','最新消息')

@section('css')
    <link rel="stylesheet" href="./css/news.css">
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
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/1.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">貓尾巴寵物美容 一週快閃限定活動</a></h3>
                        <h6 class="text-success mb-3">2022.12.29</h6>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/2.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">總柴抱抱寵物攝影 新年優惠</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022.12.29</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/3.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">讓你白帥帥 SPA洗浴</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022.12.29</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/4.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">[毛寶貝] 到府服務</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022-01-07</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
            </div>

            <!-- 按鈕區塊 -->
            <div class="py-5 mb-5">
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
            </div>
        </section>

@endsection

@section('js')
    
@endsection