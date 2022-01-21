@extends('layouts.layout')

@section('title', '一起回家的故事')

@section('css')

    <link rel="stylesheet" href="./css/match_story.css">
    <style>
        /* .card{
            -webkit-filter:brightness(1);
        }
        .card:hover{
            box-shadow: 0px 0px 25px rgb(255, 225, 181);
            -webkit-filter:brightness(.8);
            transform: scale(1.1);
        } */
    </style>

@endsection

@section('main')
    
<section class="mach_story_title">
    <div class="container">
        <h1 style="color: #85550E;font-size: 80px;font-weight: 600;text-align: center;">關於"一起回家"的故事</h1>
    </div>
</section>

<section class="mach_story_picarea p-5">
    <div class="container">
        <!-- 第1排title -->
        <div class="row11 mb-5 ">
            <div class="basemap">
                <img src="./team-img/mach_story/basemap02.png" alt="">
            </div>
            <div class="story_title">
                <div class="pic">
                    <img src="./team-img/mach_story/ills_dog.png" width="300px" alt="">
                </div>
                <div class="content p-3 p-md-5">
                    <p class="fs-2 fw-bold" style="color: #647D5C;">感謝有你們 ~</p>
                    <p class="fs-2 fw-bold" style="color: #647D5C;">讓“一起回家”成為生活的日常</p>
                </div>
            </div>
        </div>
        <!-- 第1排圖 -->
        <div class="row story_part1 mb-5">
            <div class="col-md-12 col-lg-6 picture01">
                <div class="card p-4">
                    <div class="pic">
                        <img src="./team-img/mach_story/01.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body" style="background-color: #fff;height: 100px;">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 picture02">
                <div class="card p-4">
                    <img src="./team-img/mach_story/02.png" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #fff;height: 100px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- 第2排圖 -->
        <div class="row story_part2 mb-5">
            <div class="col-md-12 col-lg-6 picture03">
                <div class="card p-4">
                    <div class="pic">
                        <img src="./team-img/mach_story/03.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 picture04">
                <div class="card p-4">
                    <img src="./team-img/mach_story/04.png" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- 第3排圖 -->
        <div class="row story_part3 mb-3">
            <div class="col-md-12 col-lg-6 picture04">
                <div class="card p-4">
                    <div class="pic">
                        <img src="./team-img/mach_story/05.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6  picture05">
                <div class="card p-4">
                    <img src="./team-img/mach_story/06.png" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- 第4排圖 -->
        <div class="row story_part4">
            <div class="col-md-12 col-lg-6  picture05">
                <div class="card p-4">
                    <div class="pic">
                        <img src="./team-img/mach_story/07.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6  picture06">
                <div class="card p-4">
                    <img src="./team-img/mach_story/08.png" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #fff;height: 60px;">
                    </div>
                </div>
            </div>
        </div>
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