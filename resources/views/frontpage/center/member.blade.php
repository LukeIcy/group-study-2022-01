@extends('layouts.centerlayout')

@section('title', '會員中心 個人資料')

@section('css')

@endsection

@section('main')

    <section class="member_centre">
        <div class="container">
            <h1 class="text-center fw-bold">會員中心 個人資料</h1>
            <div class="row d-flex flex-column flex-md-row">
                <div class="col-12 col-md-4 d-flex align-items-end mb-3 mb-md-0">
                    <div class="pic me-3">
                        <img src="{{ Auth::user()->avatar }}" alt="你的頭像">
                    </div>
                    <h4 class="fw-bold m-0">{{ Auth::user()->name }}</h4>
                </div>
                <div class="col-12 col-md-8 d-flex align-items-end">
                    <a class="btn rounded-0 fw-bold" href="#" role="button"
                        style="width: 160px;background-color: #d56246;color: #fff;font-size: 18px;">個人資料</a>

                    @if (Auth::user()->role == '領養者')
                    @else	
                    <a class="btn rounded-0 ms-3 fw-bold" href="{{route('center.record')}}" role="button"
                        style="width: 160px;background-color: #d56246;font-size: 18px;">送養紀錄</a>
                    <a class="btn rounded-0 ms-3 fw-bold" href="{{ route('center.putadop') }}" role="button"
                        style="width: 160px;background-color: #d56246;font-size: 18px;">我要送養</a>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <hr class="first_line">
    <section class="member_centre_form">
        <div class="container">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="fw-bold fs-5 m-0">真實姓名</div>
                        {{-- 老師推薦我保持原本用Auth帶資料的做法最直接 --}}
                        <div class="mb-3">{{ Auth::user()->name }}</div>
                        {{-- <div class="mb-3">{{ $member->name }}</div>  這個可以用 搭配route跟controller改動 --}}

                        @if (Auth::user()->role == '領養者')
                        <div class="fw-bold fs-5 m-0">會員身分</div>
                        <div class="mb-3">{{ Auth::user()->role }}</div>
                        @else
                        <div class="fw-bold fs-5 m-0">中途資歷</div>
                        <div class="mb-3">{{ Auth::user()->career }}</div>
                        <div class="fw-bold fs-5 m-0">中途項目
                            <span class="fs-6">(簡述中途工作內容)</span>
                        </div>
                        <div>{{ Auth::user()->experience }}</div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label class="fw-bold fs-5 m-0">電子郵件</label>
                        <div class="mb-3">{{ Auth::user()->email }}</div>
                        @if (Auth::user()->role == '領養者')
                        @else
                        <label class="fw-bold fs-5 m-0">送養數量
                            <span class="fs-6"> (例如：犬 5隻; 貓5隻)</span>
                        </label>
                        <div class="mb-3">{{ Auth::user()->adopnumber }}</div>
                        @endif
                    </div>
                </div>
                <div class="btn_group d-flex justify-content-center justify-content-md-end mb-3">
                    <a type="button" class="btn btn-outline-success border-0 fw-bold fs-5 me-3"
                        href="{{ route('center.memberedit') }}">編輯個人資料</a>
                </div>
        </div>
    </section>

@endsection

@section('js')

@endsection
