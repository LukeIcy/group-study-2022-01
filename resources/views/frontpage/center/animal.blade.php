@extends('layouts.layout')

@section('title',$animal->name.'的資訊')

@section('css')
    <!-- swiper 7.0 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- animal_information css -->
    <link rel="stylesheet" href="{{asset('css/animal_information.css')}}">
    <style>
        #smallpic{
            height: 124px;
        }
    </style>
@endsection

@section('main')

    <section class="animal_information">
        <div class="container">
            <div class="next text-end mb-2">
                <a class="text-dark fw-bolder fs-6 text-decoration-none" href="{{route('center.index')}}"><i class="fas fa-caret-right"></i> 返回上一頁</a>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-lg-5">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">

                            @foreach ($animal->imgs as $img)
                            <div class="swiper-slide">
                                <img src="{{$img->image}}" />
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            @foreach ($animal->imgs as $img)
                            <div class="swiper-slide" id="smallpic">
                                <img src="{{$img->image}}" />
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 information">
                    <div class="information_title p-4 py-lg-0 d-flex justify-content-between">
                        <h5><i class="fas fa-square mx-2"></i>{{$animal->name}}基本資料</h5>
                        <a href=""><i class="fas fa-share-alt"></i></a>
                    </div>
                    <ul>
                        <li>物種：<span>{{$animal->species}}</span></li>
                        <li>名字：<span>{{$animal->name}}</span></li>
                        <li>性別：<span>{{$animal->gender}}</span></li>
                        <li>年齡：<span>{{$animal->age}}</span></li>
                        <li>個性：<span>{{$animal->persona}}</span></li>
                        <li>特色：<span>{{$animal->chara}}</span></li>
                        <li>健康狀況：<span>{{$animal->health}}</span></li>
                        <li>節育與否：<span>{{$animal->fixed}}</span></li>
                        <li>所在地：<span>{{$animal->location}}</span></li>
                        <li>預防針：<span>{{$animal->vaccine}}</span></li>
                    </ul>
                </div>
            </div>
            <!-- 中途資訊 -->
            <div class="row mb-5 border border-3 border-white py-3 shadow midway_information">
                <div class="col-9">
                    <h6><i class="fas fa-square me-2"></i>中途基本資料</h6>
                    <ul class="p-0">
                        <li>送養人：<span>{{$animal->user->name}}</span></li>
                        <li>中途資歷：<span>{{$animal->user->career}}</span></li>
                        <li>中途工作內容：<br>
                            <span>{{$animal->user->experience}}</span>
                        </li>
                        <li>已送養的孩子數量：
                            <span>{{$animal->user->adopnumber}}</span>
                        </li>
                        <li>想對領養人說的話：<br>
                            <span>{{$animal->exhort}}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="pic d-flex justify-content-end">
                        <img src="./team-img/information/icon-5.jpg" width="120px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advise">
        <div class="container">
            <!-- 申請前叮嚀 -->
            <div class="row mb-5">
                <div class="col">
                    <div class="apply d-flex flex-column align-items-center">
                        <h2>申請前叮嚀</h2>
                        <ul>
                            <li>感謝您認同”一起回家”的理念，我們相信領養與送養之間溝通是非常重要，對於每一隻毛孩，中途視如己出用心呵護照料，
                                而送養的過程就像相親一樣，每一隻送養出去的孩子就像嫁女兒感傷又欣慰。</li><br>
                            <li>請在自我介紹中盡量展現自己，讓送養人看到您的誠意與用心，也不必擔心會遇到不良的中途~<br>因為”一起回家”送養平台的中途都是採推薦制,只有通過審核才能成為”一起回家”的送養成員。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="conditions mb-5">
        <div class="container">
            <!-- 認養條件 -->
            <form action="/admin/store" method="post">
                @csrf
                <div class="row mb-5">
                    <div class="col">
                        <div class="condition d-flex flex-column align-items-center">
                            <h2>認養條件</h2>
                            <span>【須簽署認養協議書，內容請參見：<a
                                    href="https://reurl.cc/DdyQv6">https://reurl.cc/DdyQv6</a>】</span>

                                <div>{!! nl2br(e($animal->adcond)) !!}</div>


                            <div class="agree d-flex justify-content-lg-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="contract" value="agree"
                                        id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        我同意所有上述的認養條件。
                                    </label><br>
                                    <p class="px-2">若不同意就無需填寫申請單</p>
                                    <input class="form-check-input" type="checkbox" name="age" value="ok"
                                        id="flexCheckChecked" required>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        是否年滿20歲
                                    </label>
                                </div>
                                <div class="form-check">
                                </div>
                                <div class="img-fluid">
                                    <img src="./team-img/information/illas-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 申請單填寫 -->
                <div class="row">
                    <div class="col">
                        <div class="requisition py-3 d-flex flex-column align-items-center">
                            <h2>申請單填寫</h2>
                            <div class="requisition_write">
                                <div class="mb-3">
                                    <label for="name" class="form-label">姓名<span class="text-danger mx-2">*</span>
                                        務必是本人申請認養，謝絕代認養</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="請填寫真實姓名" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">聯絡電話<span
                                            class="text-danger mx-2">*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="請填能聯繫到本人的電話">
                                </div>
                                <div class="mb-3">
                                    <label for="line" class="form-label">使用的通訊軟體<span
                                            class="text-danger mx-2">*</span></label>
                                    <input type="text" name="line" id="line" class="form-control" placeholder="line 帳號" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fbName" class="form-label">Facebook名稱與連結<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="fbName" id="fbName" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">居住地區<span class="text-danger mx-2">*</span></label>
                                    <input type="text" name="address" id="address" class="form-control" required>
                                </div>
                                <div class="mb-5">
                                    <label for="myself" class="form-label">自我介紹<span
                                            class="text-danger mx-2">*</span></label>
                                    <textarea class="form-control mb-3" name="myself" id="myself" rows="3" required></textarea>
                                    <h5>附註：</h5>
                                    <p>有『一個禮拜』的試養期，若無法與貓咪適應或其他理由，請務必把貓咪送還給我，所支付的結紮&預防針費用將返還給您。</p>
                                </div>
                                <div class="d-grid gap-2 col-md-6 col-xl-3 mx-auto mb-3">
                                    <button type="submit" class="btn btn-primary">送出申請</button>
                                </div>
                                <img src="./team-img/information/illas-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('js')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection
