<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','title離家出走了')</title>
    <!-- bootstrap Core CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- fontawesome Core CSS CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- index css -->
    <link rel="stylesheet" href="./css/layout.css">
    @yield('css')
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
                                    <a class="dropdown-item" href="./news">
                                        <img src="./team-img/icon/11.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">最新消息</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="./team-img/icon/8.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">寵物褓姆</span>
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

@yield('main')

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

        @yield('js')
</body>

</html>