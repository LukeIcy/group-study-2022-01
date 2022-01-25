@extends('layouts.layout')

@section('title', $lawnews->title)

@section('css')

    <link rel="stylesheet" href="{{ asset('css/law_animal_articles.css') }}">

@endsection

@section('main')

    <section class="law_animal_title d-flex justify-content-center align-items-center" style="height: 310px">
        <div class="container">
            <div class="babysitter_title d-flex justify-content-center mb-5">
                <h1 style="color: #85550e; font-size: 80px; font-weight: 600;">
                    {{$lawnews->type}}
                </h1>
            </div>
        </div>
    </section>

    <hr class="line_hr m-0 mb-5" style="height: 2px; background-color: #d56246; opacity: 0.8" />

    <!-- 動物保護法文章 -->
    <section class="low_article_animal">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{$lawnews->image}}" class="w-100 my-card-img">
                </div>
                <div class="title">
                    <h1>
                        <span><i class="fas fa-balance-scale"></i></span>
                        {{$lawnews->title}}
                    </h1>
                </div>
                <p>
                    {{$lawnews->content}}
                </p>
            </div>
        </div>
    </section>

    
@endsection

@section('js')

@endsection
