@extends('layouts.centerlayout')

@section('title', '會員中心 我要送養')

@section('css')

@endsection

@section('main')
        <section class="member_centre">
            <div class="container">
                <h1 class="text-center fw-bold">會員中心</h1>
                <div class="row d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 d-flex align-items-end mb-3 mb-md-0">
                        <div class="pic me-3">
                            <img src="{{Auth::user()->avatar}}" alt="你的頭像">
                        </div>
                        <h4 class="fw-bold m-0">{{Auth::user()->name}}</h4>
                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-end">
                        <a class="btn rounded-0 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">個人資料</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">送養紀錄</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;color: #fff;">我要送養</a>
                        <a class="text-dark fw-bolder fs-6 text-decoration-none ms-auto none" href="{{route('front.index')}}">
                            <i class="fas fa-caret-right me-2"></i>返回首頁
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <hr class="first_line">

        <!-- 我要送養表單 -->
        <section class="put_up mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold m-0">姓名</label>
                            <input type="text" name="name" id="name" class="form-control w-50">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label fw-bold m-0">性別</label>
                            <input type="text" name="gender" id="gender" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label fw-bold m-0">年齡</label>
                            <input type="text" name="age" id="age" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="character" class="form-label fw-bold m-0">個性</label>
                            <input type="text" name="character" id="character" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="feature" class="form-label fw-bold m-0">特色</label>
                            <input type="text" name="feature" id="feature" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="health" class="form-label fw-bold m-0">健康狀況</label>
                            <input type="text" name="health" id="health" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="tnr" class="form-label fw-bold m-0">是否節育</label>
                            <input type="text" name="tnr" id="tnr" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="site" class="form-label fw-bold m-0">所在地</label>
                            <input type="text" name="site" id="site" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="form-label fw-bold m-0">是否施打預防針</label>
                            <input type="text" name="vaccine" id="vaccine" class="form-control">
                            <p class="fw-bold">附註事項 (如有特殊事項 請在此欄位填寫)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 認養條件 -->
        <section class="term" style="margin-bottom: 150px;">
            <div class="container">
                <div class="d-flex justify-content-center mb-3">
                    <div class="text-white text-center fs-5 fw-bold p-1 mb-3"
                        style="background-color: #647D5C;height: 38px;width: 180px;">認養條件</div>
                </div>
                <div class="row" style="font-size: 18px;font-weight: 600;">
                    <div class="col-8 mx-auto">
                        <a class="text-decoration-none text-dark"
                            href="http://tinyurl.com/bkuryqw">須簽署認養協議書，內容請參見：http://tinyurl.com/bkuryqw</a>
                    </div>
                    <div class="col-8 mx-auto">
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否必須經過家人或室友(房東)同意。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否有經濟能力可以照顧動物動物。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否須施打預防針。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否須注射晶片。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否須接受定期追蹤，不會無故打擾。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label"
                                for="flexCheckDefault">是否需完成居家安全防護，紗窗夾、網格等，需附上環境及防護照片。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否接受放養(工廠、果園等等...)。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否須具有飼養寵物經驗。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否提供適當、乾淨且無害之食物及 24
                                小時充足、乾淨之飲水。</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">是否同意不得以汽、機車牽引寵物。</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label"
                                for="flexCheckDefault">是否同意不放縱寵物於戶外，出入公共場所或大眾出入之場所時，由7歲以上之人伴同，</label>
                        </div>
                        <p>並採取適當之防護措施，如繫犬鍊、戴口罩。</p>
                        <div class="">
                            <label for="exampleFormControlTextarea1" class="form-label">可自行新增認養條件(請條列式說明) </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="mb-3 w-75 ms-auto">
                            <label for="formFileMultiple" class="form-label"></label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <button type="button" class="btn border-0 text-white" style="background-color: #647D5C;border-radius: unset;font-size: 18px;">確認發布認養文章</button>
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('js')

@endsection
