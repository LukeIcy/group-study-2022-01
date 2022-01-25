@extends('layouts.layout')

@section('title', '動保新聞及法律')

@section('css')

<link rel="stylesheet" href="{{ asset('css/law_animal_articles.css') }}">

@endsection

@section('main')

    <section class="law_animal_title d-flex justify-content-center align-items-center" style="height: 310px; ">
        <div class="container">
            <div class="babysitter_title d-flex justify-content-center mb-5">
                <h1 style="color: #85550E;font-size: 80px;font-weight: 600;">新聞與法律</h1>
            </div>
        </div>
    </section>

    <hr class="line_hr m-0 mb-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">


    <!-- 動物保護法列表 -->
    <section class="low_animal_articles">
        <div class="container">
            <div class="row">

                @foreach ($law as $item)
                    
                <div class="col">
                    <div class="card mb-3 "> <a href="{{route('news.lawarticle',['id'=>$item->id])}}" class="list-group-item list-group-item-action">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$item->image}}" class="w-100 my-card-img">
                                </div>
                                <p class="fs-1"></i>
                                    {{$item->type}}
                                    </p>
                                <div class="col-md-8">
                                    <div class="card-body h-100">
                                        <span clss="lh-lg text-wrap">
                                            <p class="fs-1"><i class="fas fa-balance-scale"></i>
                                            {{$item->title}}
                                            </p><br><br>
                                            {{$item->content}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach

            </div>

            <div class="row">
                <div class="col d-flex justify-content-center mb-5">
                    {{ $law->links() }}
                </div>
            </div>

        </div>
        <!-- 按鈕 -->
        {{-- <div class="py-5 mb-5">
                <div class="btn-toolbar mb-5 d-flex justify-content-center" role="toolbar"
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
                </div> --}}
    </section>

@endsection

@section('js')

@endsection
