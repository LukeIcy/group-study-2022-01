@extends('layouts.centerlayout')

@section('title', '會員中心 編輯個人資料')

@section('css')

@endsection

@section('main')
        <section class="member_centre">
            <div class="container">
                <h1 class="text-center fw-bold">會員中心</h1>
                <div class="row d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 d-flex align-items-end mb-3 mb-md-0">
                        <div class="pic me-3">
                            <img src="{{Auth::user()->avatar}}" alt="">
                        </div>
                        <h4 class="fw-bold m-0">{{Auth::user()->name}}</h4>
                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-end">
                        <a class="btn rounded-0 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;color: #fff;font-size: 18px;">編輯個人資料</a>
                        {{-- <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">送養紀錄</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">我要送養</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <hr class="first_line">
        <section class="member_centre_form">
            <div class="container">
                <form action="/user/{{Auth::user()->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="name" class="form-label fw-bold fs-5 m-0">真實姓名</label>
                            <input type="text" name="name" id="name" class="form-control mb-3" value="{{Auth::user()->name}}">
                            <label for="career" class="form-label fw-bold fs-5 m-0">中途資歷</label>
                            <input type="text" name="career" id="career" class="form-control mb-3" value="{{Auth::user()->career}}">
                            <label for="experience" class="form-label fw-bold fs-5 m-0">中途項目<span
                                    class="fs-6">(簡述中途工作內容)</span></label>
                            <textarea class="form-control" name="experience" id="experience" rows="5">{{Auth::user()->experience}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-bold fs-5 m-0">電子郵件</label>
                            <input type="text" name="email" id="email" class="form-control mb-3" value="{{Auth::user()->email}}">
                            <label for="adopnumber" class="form-label fw-bold fs-5 m-0">送養數量<span class="fs-6"> (例如：犬 5隻; 貓
                                    5隻)</span></label>
                            <input type="text" name="adopnumber" id="adopnumber" class="form-control mb-3" value="{{Auth::user()->adopnumber}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="avatar" class="form-label">頭像上傳</label>
                        <input type="file" id="avatar" name="avatar" class="form-control">
                    </div>
                    <div class="btn_group d-flex justify-content-center justify-content-md-end mb-3">
                        <a href="{{ route('center.member') }}" type="button" class="btn btn-outline-success border-0 fw-bold fs-5 me-3">返回</a>
                        <button type="submit" class="btn btn-outline-dark border-0 fw-bold fs-5">完成</button>
                    </div>
                </form>
            </div>
        </section>

@endsection

@section('js')
                
@endsection
                