@extends('layouts.centerlayout')

@section('title', '會員中心 送養紀錄')

@section('css')

@endsection

@section('main')

        <section class="member_centre">
            <div class="container">
                <h1 class="text-center fw-bold">會員中心</h1>
                <div class="row d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 d-flex align-items-end mb-3 mb-md-0">
                        <div class="pic me-3">
                            <img src="{{ Auth::user()->avatar }}" alt="你的頭像">
                        </div>
                        <h4 class="fw-bold m-0">{{ Auth::user()->name }}</h4>
                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-end">
                        <a class="btn rounded-0 fw-bold" href="{{route('center.member')}}" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">個人資料</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;color: #fff;">送養紀錄</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="{{ route('center.putadop') }}" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">我要送養</a>
                        <a class="text-dark fw-bolder fs-6 text-decoration-none ms-auto none" href="./index.html">
                            <i class="fas fa-caret-right me-2"></i>返回首頁
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <hr class="first_line">

        <!-- 送養紀錄 -->
        <section class="member_centre_form">
            <div class="container">
                <div>本頁無卡片，待認領。</div>
            </div>
        </section>

        
@endsection

@section('js')

@endsection
