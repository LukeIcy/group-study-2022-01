@extends('layouts.centerlayout')

@section('title', '會員中心 送養紀錄')

@section('css')
<style>
    @media (max-width: 992px) {

        .mycard_img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
</style>
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
                {{-- 以下為卡片，曉薏認領成功完成 --}}
                @foreach ($animal as $item)
                    
                    <div class="card mb-3 border border-dark">
                        <div class="row g-0">
                            <div class="col-12 col-md-2">
                                <img
                                {{-- ??代表判斷前面有沒有東西 沒有就印後面 --}}
                                    {{-- src="{{$item->imgs->image}}" --}}
                                    src="{{$item->imgs[0]->image??''}}"
                                    class="img-fluid mycard_img"
                                    alt="..."
                                />
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="card-body">
                                    <h4 class="card-title">{{$item->name}}</h4>
                                    <h4 class="gender">{{$item->gender}}</h4>
                                    <h4 class="card-text">{{$item->created_at}}</h4>
                                    <div
                                        class="btn-group p-20 my_btn"
                                        role="group"
                                        aria-label="Basic radio toggle button "
                                    >
                                        <input
                                            type="radio"
                                            class="btn-check"
                                            name="btnradio"
                                            id="btnradio1"
                                            autocomplete="off"
                                            checked
                                        />
                                        <label
                                            class="btn btn-outline-warning"
                                            for="btnradio1"
                                            >發布</label
                                        >
                                        <input
                                            type="radio"
                                            class="btn-check"
                                            name="btnradio"
                                            id="btnradio2"
                                            autocomplete="off"
                                            
                                        />
                                        <label
                                            class="btn btn-outline-warning"
                                            for="btnradio2"
                                            >查看</label
                                        >

                                        <input
                                            type="radio"
                                            class="btn-check"
                                            name="btnradio"
                                            id="btnradio3"
                                            autocomplete="off"
                                        />
                                        <label
                                            class="btn btn-outline-warning"
                                            for="btnradio3"
                                            >編輯</label
                                        >

                                        <input
                                            type="radio"
                                            class="btn-check"
                                            name="btnradio"
                                            id="btnradio4"
                                            autocomplete="off"
                                        />
                                        <label
                                            class="btn btn-outline-warning"
                                            for="btnradio4"
                                            >刪除</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        
@endsection

@section('js')

@endsection
