@extends('layouts.layout')

@section('title', '寵物保姆')

@section('css')
    <link rel="stylesheet" href="./css/babysitter.css">
@endsection

@section('main')
    
<section class="babysitter position-relative">
    <div class="container">
        <div class="babysitter_title d-flex justify-content-center mb-5">
            <h1 style="color: #85550E;font-size: 80px;font-weight: 600;">寵物保姆</h1>
        </div>
        <ul class="d-flex justify-content-end fw-bold" style="font-size: 18px;">
            <li class="px-3">
                <span>資料總筆數：</span>
                {{-- <span class="text-danger">{{ count($sitter->id) }}</span> --}}
                {{-- 上面的總比數不知道為什麼不能實現 --}}
                <span class="text-danger">10000</span>
            <li class="px-3">
                <span>每頁筆數：</span>
                {{-- 下面這個填入在controller中設定的數字即可 感覺好像可以用變數耶 有空試試看--}}
                <span class="text-danger">5</span>
            </li>
            <li class="px-3">
                {{-- 有想法 沒空試 哀傷 --}}
                <span>總頁數：</span>
                <span class="text-danger">6</span>
            </li>
            <li>
                <span>目前頁次：</span>
                {{-- 感覺好像可以抓到 有空試試 但都沒空 --}}
                <span class="text-danger">1</span>
            </li>
        </ul>
    </div>
</section>

<img class="w-25 position-absolute end-0 top-50" src="./team-img/babysitter/paw01.png"  alt="">
<img class="w-25 position-absolute start-0 top-100" src="./team-img/babysitter/paw01.png"  alt="">

<hr class="line_hr m-0 mb-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">
<!-- 店家資訊 -->
<section class="babysitter_content">
    <div class="container">
<!-- 店家資訊 -->
        @foreach ($sitter as $item)

        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 d-flex justify-content-end">
                <img class="w-100" src="{{ $item->image }}" alt="">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column">
                <div class="content_top">
                    <a href=""><h3 class="mb-5" style="color: #647D5C;font-weight: 600;">{{ $item->title }}</h3></a>
                </div>
                <div class="content_bottom">
                    {{-- <p class="fw-bold mx-3">{{ $item->content }}</p> --}}
                    <p class="fw-bold mx-3">{!! nl2br(e($item->content)) !!}</p>
                    {{-- <p class="fw-bold mx-3">{{ nl2br(e($item->content)) }}</p> --}}
                    
                </div>
            </div>
        </div>
        <hr class="mb-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">
            
        @endforeach

        <!-- end -->
        {{-- 下面範例留存 --}}
        <div class="row ">
            <div class="col-12 col-md-6 mb-3 mb-md-0 d-flex justify-content-end">
                <img class="w-100" src="./team-img/babysitter/04.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column">
                <div class="content_top">
                    <a href=""><h3 class="mb-5 " style="color: #647D5C;font-weight: 600;">【貓奴互助社】</h3></a>
                    <h4 class="mb-xl-5 fw-bold mx-3">主打服務：寵物保姆/日托託管</h4>
                </div>
                <div class="content_bottom mb-5">
                    <p class="fw-bold mx-3">所在地：台中市潭子區</p>
                    <p class="fw-bold mx-3">收費：NT$450/晚</p>
                    <p class="fw-bold mx-3">聯絡方式：0953761842</p>
                </div>
            </div>
        </div>
        <hr class="mb-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">
    </div>

    {{$sitter->links()}}
    <!-- 按鈕區塊 -->
    {{-- <div class="py-5 mb-5 position-relative">
        <img class="w-25 position-absolute end-0 bottom-100" src="./team-img/babysitter/paw01.png"  alt="">
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