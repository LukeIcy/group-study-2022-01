@extends('layouts.layout')

@section('title', '您正在閱讀'.$news->title)

@section('css')
    <style>
        .newstitle span>b {
            color: #db3b00;
        }

        .title {
            font-weight: bolder;
            padding-bottom: 30px;
        }

        .titleimgbox {
            width: 50%;
            margin-left: 52px;
        }

        .titleimg {
            max-width: 100%;
            height: 100%;
        }

        .newstextbox {
            padding: 30px 50px 30px 50px;
        }

        .text {
            font-size: 18px;
            font-weight: 600;
        }

        .cards {
            display: flex;
        }

        .picturetext {
            display: flex;
            margin-bottom: 20px;
        }

        .icon {
            width: 45px;
            height: 45px;
            display: inline-block;
            background-image: url(https://www.taiwan.net.tw/images/icon/album.svg);
            background-position: center;
            background-size: contain;
        }

    </style>
@endsection

@section('main')
    <section class="newsbox">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="warp">
                        <div class="news-page-title">
                            <h1 class="title">{{ $news->title }}</h1>
                            <div class="newstitle">
                                <span class="">
                                    發布日期 :
                                    <b class="textudanger">{{ $news->created_at }}</b>
                                </span>
                            </div>
                            <hr style="height: 1px; background-color: black;">
                        </div>
                        <div class="titleimgbox mt-5">
                            <img src="{{ $news->image }}"
                                class="titleimg" alt>
                        </div>
                        <!-- 下面是最新消息內文 -->
                        <div class="newstextbox fw-bold fs-5">
                            {{-- <p class="text">{{ $news->content }}</p> --}}
                            {{-- 下面讓文章維持textarea排版 --}}
                            <p class="text">{!! nl2br(e($news->content)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newspicture" style="margin-bottom: 120px;">
        <div class="container">
            <div class="picturetext">
                <div class="icon"></div>
                <h2 class="icontext fw-bold">為您推薦</h2>
            </div>
            <div class="row">
                <!-- 下面這些我會引入別的最新消息 以後做要有個習慣 這種一定要有地方可以按按鈕連結去別的網頁 -->
                @foreach ($post as $item)                    
                <div class="col-md">
                    <div class="imgcard" style="border: double #020202;">
                        <a href="{{route('news.article',['id'=> $item->id])}}">
                            <img src="{{$item->image}}" class="card-img-top" alt="">
                        </a>
                        <div class="cardbody">
                            <p class="cardtext m-3">{{$item->content}}</p>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>

@endsection

@section('js')

@endsection