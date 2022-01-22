@extends('layouts.centerlayout')

@section('title', '會員中心 個人資料')

@section('css')

@endsection

@section('main')

        <section class="member_centre">
            <div class="container">
                <h1 class="text-center fw-bold">會員中心</h1>
                <div class="row d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 d-flex align-items-end mb-3 mb-md-0">
                        <div class="pic me-3">
                            <img src="./team-img/450 x 600 px/16.png" alt="">
                        </div>
                        <h4 class="fw-bold m-0">林小雨</h4>
                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-end">
                        <a class="btn rounded-0 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;color: #fff;font-size: 18px;">個人資料</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">送養紀錄</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">我要送養</a>
                        {{-- 因為可以透過navbar的icon返回首頁 下面先不用 --}}
                        {{-- <a class="text-dark fw-bolder fs-6 text-decoration-none ms-auto none" href="./index.html">
                            <i class="fas fa-caret-right me-2"></i>返回首頁
                        </a> --}}
                    </div>
                </div>
            </div>
        </section>
        <hr class="first_line">
        <section class="member_centre_form">
            <div class="container">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="fw-bold fs-5 m-0">真實姓名</div>
                            {{-- 下面嘗試會員中心帶入顯示的會員資料->名字 --}}
                            {{-- <div class="mb-3">{{$member[0]->name}}</div> --}}
                            {{-- <div class="mb-3">{{$member->name}}</div> --}}
                            {{-- <div class="mb-3">{{$member['name']}}</div> --}}
                            {{-- <div class="mb-3">{{$name = $member['name']}}</div> --}}
                            {{-- <div class="mb-3">{{$name => $member['name']}}</div> --}}
                            {{-- <div class="mb-3">{{$member['name']->name}}</div> --}}
                            {{-- <div class="mb-3">{{{$member['name']}}}</div> --}}
                            {{-- <div class="mb-3">{{$member[0]['name']}}</div> --}}
                            {{-- <div class="mb-3">{{$member->data['name']}}</div> --}}
                            {{-- <div class="mb-3">{{$member}}</div> --}}
                            {{-- <div class="mb-3">{{$member["name"]}}</div> --}}
                            {{-- <div class="mb-3">{{{$member["name"]}}}</div> --}}
                            {{-- <div class="mb-3">{{$member[0]["name"]}}</div> --}}
                            {{-- <div class="mb-3">{{$member->data["name"]}}</div> --}}
                            {{-- <div class="mb-3">{{$member[0]->data['name']}}</div> --}}
                            {{-- 我感覺我真的要換一個思路了... --}}
                            {{-- 我是不是乾脆看看都從Auth抓資料出來 --}}
                            {{-- <div class="mb-3">{{Auth::user()->name}}</div> --}}
                            {{-- 累了 先這樣... --}}
                            {{-- 等等 雖然只有一筆資料 我要不要乾脆試試看foreach --}}
                            {{-- @foreach ($member as $item)                                
                            <div class="mb-3">{{$item->name}}</div>
                            @endforeach --}}
                            {{-- 很好 當我沒說 --}}


                            {{-- 下面dd測試，資料應該大概或許有帶進來 --}}
                            {{-- @php
                                dd($member);
                            @endphp --}}

                            <div class="fw-bold fs-5 m-0">中途資歷</div>
                            <div class="mb-3">未填</div>
                            <div class="fw-bold fs-5 m-0">中途項目
                                <span class="fs-6">(簡述中途工作內容)</span>
                            </div>
                            <div>未填</div>
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold fs-5 m-0">電子郵件</label>
                            <div class="mb-3">未填</div>
                            <label class="fw-bold fs-5 m-0">送養數量
                                <span class="fs-6"> (例如：犬 5隻; 貓5隻)</span>
                            </label>
                            <div class="mb-3">未填</div>

                        </div>
                    </div>
                    <div class="btn_group d-flex justify-content-center justify-content-md-end mb-3">
                        <button type="button" class="btn btn-outline-success border-0 fw-bold fs-5 me-3">編輯個人資料</button>
                    </div>
                </form>
            </div>
        </section>

@endsection

@section('js')
        
@endsection
        