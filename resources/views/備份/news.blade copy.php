<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>最新消息</title>
    <!-- bootstrap Core CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- fontawesome Core CSS CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- index css -->
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/news.css">
</head>

<body>
    <!-- go top button -->
    <a href="#" class="go-top">
        <img src="./team-img/icon/uptotop.png" width="50px" alt="">
    </a>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 mb-5" style="background-color: #647D5C;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="./index">
                <img src="./team-img/LOGO/LOGO-8.png" width="50px" height="50px" alt="">
                <span class="mx-3 fw-bold pt-2">一起回家</span>
            </a>

            <!-- 漢堡盒 -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-lg-grow-0" id="navbarScroll">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Features
                        </a>
                        <ul class="dropdown-menu m-0 p-0 border-0" aria-labelledby="navbarScrollingDropdown">
                            <div class="line_dropdown">
                                <li>
                                    <a class="dropdown-item " href="./adoption_pic">
                                        <img src="./team-img/icon/12.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">動物領養</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="./team-img/icon/9.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">動物保護</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="./team-img/icon/11.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">最新消息</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="./team-img/icon/8.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">寵物保母</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="./team-img/icon/13.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">媒合故事</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-bold text-white" aria-current="page" href="#">關於我們</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-bold text-white" href="#">Support</a>
                    </li>
                    <li class="nav-item px-2 pt-lg-1">
                        <button type="button" class="btn btn-light btn-sm px-3"
                            style="color: #647D5C;border-radius: 6px;font-size: 16px;">註冊/登入</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="news py-3 mb-3">
            <div class="container">
                <div class="news_title">
                    <div class="row">
                        <div class="col-4">
                            <img class="mb-3" src="./team-img/news_pic/cat.png" width="302px" height="260px" alt="">
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="">
                                <h1 class="" style="color: #85550E;font-size: 80px;font-weight: 600;">最新消息</h1>
                            </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="./team-img/news_pic/dog.png" width="302px" height="260px" alt="">
                    </div>
                </div>
                </div>
                    <ul class="d-flex justify-content-end">
                    <li class="px-3">
                        <span>資料總筆數：</span>
                        <span class="text-danger">47</span>
                    </li>
                    <li class="px-3">
                        <span>每頁筆數：</span>
                        <span class="text-danger">4</span>
                    </li>
                    <li class="px-3">
                        <span>總頁數：</span>
                        <span class="text-danger">6</span>
                    </li>
                    <li>
                        <span>目前頁次：</span>
                        <span class="text-danger">1</span>
                    </li>
                </ul>
                <hr>
            </div>
        </section>
        <section class="news_content">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/1.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">貓尾巴寵物美容 一週快閃限定活動</a></h3>
                        <h6 class="text-success mb-3">2022.12.29</h6>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/2.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">總柴抱抱寵物攝影 新年優惠</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022.12.29</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/3.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">讓你白帥帥 SPA洗浴</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022.12.29</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="./team-img/news_pic/4.png" alt="">
                    </div>
                    <div class="col-8">
                        <h5
                            class="bg-gradient text-white bg-opacity-75 d-inline-flex p-2 bd-highlight text-center mb-4">
                            最新消息</h5>
                        <h3 class="outline mb-4"><a href="#" target="_self">[毛寶貝] 到府服務</a></h3>
                        <h4 class="text-danger mb-3 fs-3">2022-01-07</h4>
                        <p>我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 我是假文 ....</p>
                    </div>
                </div>
                <hr class="my-5">
            </div>

            <!-- 按鈕區塊 -->
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
        </section>
    </main>

    <footer class="footdown">
        <div class="container">
            <div class="pic">
                <img src="./team-img/illustration/footer02.png" alt="">
            </div>
            <div class="adove">
                <img src="./team-img/LOGO/LOGO-3.png" width="190px" height="230px" alt="">
            </div>
            <div class="footer-below">
                <div class="below mb-3 border-bottom pb-3">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-line"></i></a>
                </div>
                <p>© 2022 一起回家</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>

</html>