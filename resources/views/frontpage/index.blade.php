@extends('layouts.layout')

@section('title','一起回家吧')

@section('css')
    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- index css -->
    <link rel="stylesheet" href="./css/index.css">
    <style>
        .navbar{
            margin-bottom: unset !important;
        }
    </style>

@endsection

@section('main')

<!-- 大圖區 -->
<section class="home position-relative" id="home" style="margin-bottom: 150px;">
    <div class="container-fluid p-0">
        <img class="img w-100" src="./team-img/index.jpg" style="background-position: center;object-fit: cover;height: 820px;" alt="">
    </div>
    <div class="container">
        <div class="home-content">
            <div class="home-content-left py-lg-5 position-absolute top-50">
                <h1 class="text-2">不只有人需要<br>一個家</h1>
                <button type="button" class="btn py-2 mt-3 home-btn"
                    style="background-color: #d56246;">一起回家吧!</button>
            </div>
        </div>
    </div>

</section>

<!-- 關於一起回家 -->
<section class="gohome" style="margin-bottom: 100px">
    <div class="container">
        <div class="row position-relative">
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <div class="information position-absolute">
                    <div class="title offset-lg-1">
                        <h2 class="card-title my-4" style="color: #d56246;">關於 "一起回家"</h2>
                        <p class="card-text">
                            透過數據篩選機制加速媒合認養利用，推薦會員制度做更安心的保障，唯一的期望就是讓孩子一起回家</p>
                        <div class="title_icon">
                            <img class="card-logo w-25" src="./team-img/LOGO/LOGO-3.png" style="opacity: 0.5;" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <img class="card-img w-100" src="./team-img/pic1030px/2.png" alt="">
            </div>
        </div>
</section>


<!-- 等待一個回家機會的孩子 -->
<section class="wait-pic mb-5">
    <div class="container">
        <div class="row">
            <h3>等待一個回家機會的孩子</h3>
        </div>
        <div class="row">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/1.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper1" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/2.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper2" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/10.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper3" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/11.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper4" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/3.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper5" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/12.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper6" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/13.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper7" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./team-img/450 x 600 px/4.png"
                            style="box-shadow:3px 3px 12px gray;padding:3px;" data-bs-toggle="modal" data-bs-target="#animalSwiper8" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev" style="color: white;"></div>
                <div class="swiper-button-next" style="color: white;"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="box">
                <a href="{{route('center.index')}}">
                    <button type="button" class="btn btn-secondary rounded">更多可愛的孩子在這邊喔</button></a>
            </div>

        </div>
    </div>
    <div class="modal-text">
        <!-- Modal -->
        <div class="modal fade" id="animalSwiper1" tabindex="-1" aria-labelledby="animalSwiper1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper1Label">名字：一月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper2" tabindex="-1" aria-labelledby="animalSwiper2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper2Label">名字：二月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper3" tabindex="-1" aria-labelledby="animalSwiper3Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper3Label">名字：三月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper4" tabindex="-1" aria-labelledby="animalSwiper4Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper4Label">名字：四月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper5" tabindex="-1" aria-labelledby="animalSwiper5Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper5Label">名字：五月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper6" tabindex="-1" aria-labelledby="animalSwiper6Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper6Label">名字：六月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper7" tabindex="-1" aria-labelledby="animalSwiper7Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper7Label">名字：七月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper8" tabindex="-1" aria-labelledby="animalSwiper8Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper8Label">名字：八月</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="animalSwiper9" tabindex="-1" aria-labelledby="animalSwiper9Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="animalSwiper9Label">燈箱標題9</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>性別：男生</li>
                            <li>年齡：4歲</li>
                            <li>個性：活力充沛、小搗蛋、聰明、不挑食</li>
                            <li>特色：黑底虎斑</li>
                            <li>健康狀態：良好</li>
                            <li>所在地：台中</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 送養&領養步驟 -->
<section class="step">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <h2 class="mb-3 fw-bolder">送養&認養步驟</h2>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card border-light">
                    <ul class="foster list-unstyled py-3">
                        <div class="halfway p-3 p-md-0" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1500">
                            <a href="">
                                <div class="pic">
                                    <img src="./team-img/illustration/2.jpg" alt="">
                                </div>
                            </a>
                            <li class="border mb-5 fs-5 position-relative ">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">1</span>
                                被推薦的中途會收到我們的一組會員帳號和密碼
                            </li>
                            <li class="border mx-4 mb-5 fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">2</span>
                                建立個人資訊並發布送養資訊
                            </li>
                            <li class="border mb-5 fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">3</span>
                                等待未來的領養人聯繫或主動出擊
                            </li>
                            <li class="border mx-4 mb-5 px-2 fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">4</span>
                                耐心篩選申請者，請嘗試與他們溝通並約定見面時間
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card px-2">
                    <ul class="list-unstyled py-3">
                        <div class="adopter p-3 p-md-0" data-aos="fade-left" data-aos-delay="100"
                            data-aos-duration="1500">
                            <a href="">
                                <div class="pic">
                                    <img src="./team-img/illustration/1.jpg" alt="">
                                </div>
                            </a>
                            <li class="border mb-5 fs-5 position-relative ">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">1</span>
                                加入 “一起回家” 完成註冊
                            </li>
                            <li class="mx-4 border mb-5 fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">2</span>
                                瀏覽可愛的孩子們
                            </li>
                            <li class="border mb-5 fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">3</span>
                                填寫申請領養表單並發送出
                            </li>
                            <li class="px-3 border fs-5 position-relative">
                                <span
                                    class="badge rounded-circle position-absolute top-0 start-0 translate-middle">4</span>
                                等待中途爸媽的決定或繼續瀏覽有緣的孩子
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 貓狗配對區 -->
<section class="pair-section mb-5 py-0 py-md-5">
    <div class="container">
        <div class="area">
            <div class="pair ">
                <div class="yes-pair" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500">
                    <div class="content">
                        <div class="img-meow">
                            <img src="./team-img/illustration/3 Steps to (cat).png" width="350px" alt="">
                        </div>
                        <h2 class="fw-bolder text-white fs-1 py-3">配對成功</h2>
                        <p class="text-white fs-3 px-3">如果配對成功，請更新成功資訊和照片, 一起分享幸福</p>
                    </div>
                </div>
                <div class="no-pair" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                    <div class="content">
                        <div class="img-dog">
                            <img class="wow" src="./team-img/illustration/3 Steps to dog.png" width="150px"
                                alt="">
                        </div>
                        <h2 class="fw-bolder text-white fs-1 py-3">配對不成功</h2>
                        <p class="text-white fs-3 px-3">請禮貌地向中途爸媽詢問原因，並尋找其他適合您生活方式的孩子。</p>
                    </div>
                </div>
            </div>
            <div class="animal-law" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
                <div class="content">
                    <div class="left-content">
                        <a href="">
                            <h2 class="law fw-bolder">動保修法專題</h2>
                        </a>
                    </div>
                    <ul class="right-content">
                        <li>
                            <span class="badge rounded-circle">1</span>
                            飼主的定義 ?
                        </li>
                        <li>
                            <span class="badge rounded-circle">2</span>
                            誰需要負擔動保法上的飼主責任?
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 最新消息 -->
<section class="news">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="news-title mb-3">
            <!-- <img src="./team-img/navdropdownicon/news.png" width="60px" alt=""> -->
            <a class="" href="{{route('news.index')}}">
                <h2 class="fw-bold fs-1">最新消息</h2>
            </a>
        </div>
        <div class="row">
            <div class="left-news col-12 col-md-6 d-flex flex-column align-items-center mb-5 mb-md-0">
                <div class="content m-auto">
                    <p class="fw-bolder fs-2">我家的貓每天都偷偷跑去和隔壁鄰居家的狗幽會</p>
                    <button type="button" class="btn px-3"
                        style="background-color: #647D5C;color: azure;">more</button>
                </div>
            </div>
            <div class="right-news col-12 col-md-6">
                <div class="pic">
                    <img class="w-100" src="./team-img/pic1030px/23.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 一起回家 -->
<section class="together-section" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">
    <div class="container">
        <div class="together shadow-lg">
            <div class="img">
                <img src="./team-img/LOGO/17.svg" alt="">
            </div>
            <div class="content">
                <p class="fw-bolder fs-4 px-lg-5">“一起回家”是透過數據篩選和推薦制</p>
                <p class="fw-bolder fs-4 px-lg-5">建立中途與領養人互信關懷的動物收養平台</p>
                <p class="fw-bolder fs-4 px-lg-5">有許多方式可以支持我們的網站</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

    <!-- AOS CDN & 初始化 -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- swiper 7.0 -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- swiper 初始化 -->
    <script>
        const mySwiper = new Swiper(".swiper", {
            // 圖片無限循環
            loop: true,
            // 圖片自動撥放
            autoplay: true,
            // 鍵盤左右鍵操作
            keyboard: true,
            // 0px ~ 768px 圖片張數、間距
            slidesPerView: 1,
            spaceBetween: 0,
            // 768px 以上斷點設定
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

@endsection