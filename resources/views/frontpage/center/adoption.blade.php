@extends('layouts.layout')

@section('title','我要領養')

@section('css')
    <link rel="stylesheet" href="./css/adoption_pic.css">
@endsection

@section('main')

        <div class="container">
            <div class="px-lg-4">
                <!-- For demo purpose -->
                <div class="row py-5 mb-5">
                    <div class="col-lg-6">
                        <div class="pic">
                            <img src="./team-img/illustration/3.jpg" style="background-size: cover;width: 460px;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner d-flex justify-content-center">
                            <h2>每個孩子都是獨一無二的存在<br>快來尋找你的唯一寶貝</h2>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <div class="row">
                    <!-- Gallery item -->
                    @foreach ($animal as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="{{route('center.animal',['id' => $item->id])}}">
                            <div class="card h-100">
                                <div class="pic h-50">
                                    <img src="{{$item->imgs[0]->image ?? ''}}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：{{$item->name}}<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：{{$item->gender}}</p>
                                    <p class="card-text">年齡：{{$item->age}}歲<span ><a href="{{route('center.animal',['id' => $item->id])}}">...more</a></span></p>

                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <!-- End -->

                    {{-- <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/2.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：2月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：女生</p>
                                    <p class="card-text">年齡：2歲半<span ><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/3.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：3月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：女生</p>
                                    <p class="card-text">年齡：1個月<span ><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/4.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：4月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：3歲<span ><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/5.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：5月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：約2歲<span ><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/6.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：6月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：6歲<span ><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="./animal_information.html">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/7.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：7月<span><i class="fas fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：4歲<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/8.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：8月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：女生</p>
                                    <p class="card-text">年齡：2歲多<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/9.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：9月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：女生</p>
                                    <p class="card-text">年齡：1歲3個月<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/10.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：10月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：約5歲<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/11.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：11月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：1歲多<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="">
                            <div class="card">
                                <div class="pic h-50">
                                    <img src="./team-img/adoption_pic/12.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body fw-bolder fs-5">
                                    <p class="card-text">姓名：12月<span><i class="far fa-heart"></i></span></p>
                                    <p class="card-text">姓別：男生</p>
                                    <p class="card-text">年齡：5歲<span><a href="">...more</a></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End --> --}}
                </div>

                <!-- 按鈕區 -->
                <div class="py-5 mb-5">
                    <div class="btn-toolbar mb-3 d-flex justify-content-center" role="toolbar"
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
                    </div>
                </div>

            </div>
        </div>

@endsection