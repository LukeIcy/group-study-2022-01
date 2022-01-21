@extends('layouts.layout')

@section('title', '支持我們')

@section('css')
    
    <link rel="stylesheet" href="./css/support_us.css">
    <style>
        .pic_cat>img {
            width: 100%;
            height: 374px;
            object-fit: cover;
        }

        .suppot_text {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            line-height: 34px;
        }
        .h1_row{
            width: 100%;
            height: 300px;
            background-image: url('./team-img/support_us/left-top.png');
            background-size: contain;
            background-position: left;
            background-repeat: no-repeat;
        }
        @media (max-width: 768px) {
            .h1_row{
                background-image: unset;
            }
        }
    </style>

@endsection

@section('main')
    
<section class="support_us_title">
    <div class="container">
        <div class="row mb-3 h1_row d-flex align-items-center">
            <h1 class="" style="color: #85550E;font-size: 80px;font-weight: 600; text-align: center;">支持我們</h1>
        </div>
</section>
<section class="support_us" style="margin-bottom: 160px;">
    <div class="container">
        <!-- img_top -->
        <div class="row mb-3">
            <div class="col-12 col-md-8 mb-3 mb-md-0">
                <div class="pic_cat">
                    <img class="" src="./team-img/support_us/01-1.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="pic_cat">
                    <img class="" src="./team-img/support_us/02.png" alt="">
                </div>
            </div>
        </div>

        <!-- img_middle -->
        <div class="row mb-3">
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <div class="pic_cat">
                    <img src="./team-img/support_us/03.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="h-100 d-flex justify-content-center align-items-center"
                    style="background-color: #D5B690;">
                    <p class="p-3 p-md-5 m-0 suppot_text">
                        現在，<br>
                        就需要您的支持我們希望以孩子的回家為起點，
                        提供孩子安心茁壯的避風港！<br>
                        您的認同，得以讓這份理想一步步成真。
                        如果您願意支持本網站的營運，
                        非常歡迎您用不同的方式支持“一起回家”，謝謝您。
                    </p>
                </div>
            </div>
        </div>

        <!-- img_bottom -->
        <div class="row">
            <div class="col-12 col-md-8 mb-3 mb-md-0">
                <div class="pic_cat">
                    <img src="./team-img/support_us/04-1.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="pic_cat">
                    <img src="./team-img/support_us/05.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
    
@endsection