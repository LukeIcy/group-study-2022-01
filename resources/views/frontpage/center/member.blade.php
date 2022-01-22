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
                        <a class="text-dark fw-bolder fs-6 text-decoration-none ms-auto none" href="./index.html">
                            <i class="fas fa-caret-right me-2"></i>返回首頁
                        </a>
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
                            <label for="name" class="form-label fw-bold fs-5 m-0">姓名</label>
                            <input type="text" name="name" id="name" class="form-control mb-3">
                            <label for="halfwaySeniority" class="form-label fw-bold fs-5 m-0">中途資歷</label>
                            <input type="text" name="halfwaySeniority" id="halfwaySeniority" class="form-control mb-3">
                            <label for="halfwayList" class="form-label fw-bold fs-5 m-0">中途項目<span
                                    class="fs-6">(簡述中途工作內容)</span></label>
                            <textarea class="form-control" name="halfwayList" id="halfwayList" rows="5"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-bold fs-5 m-0">電子郵件</label>
                            <input type="text" name="email" id="email" class="form-control mb-3">
                            <label for="putupCount" class="form-label fw-bold fs-5 m-0">送養數量<span class="fs-6"> (例如：犬 5隻; 貓
                                    5隻)</span></label>
                            <input type="text" name="putupCount" id="putupCount" class="form-control mb-3">
                            <label for="halfwayList" class="form-label fw-bold fs-5 m-0">想對領養人說的話</label>
                            <textarea class="form-control" name="myself" id="myself" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="btn_group d-flex justify-content-center justify-content-md-end mb-3">
                        <button type="button" class="btn btn-outline-success border-0 fw-bold fs-5 me-3">編輯</button>
                        <button type="button" class="btn btn-outline-dark border-0 fw-bold fs-5">完成</button>
                    </div>
                </form>
            </div>
        </section>

@endsection

@section('js')
        
@endsection
        