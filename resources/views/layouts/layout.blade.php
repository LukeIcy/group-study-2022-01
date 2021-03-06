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
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
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
            <a class="navbar-brand d-flex align-items-center" href="{{route('front.index')}}">
                <img src="{{asset('team-img/LOGO/LOGO-8.png')}}" width="50px" height="50px" alt="">
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
                        <a class="nav-link dropdown-toggle fw-bold text-white" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            網站服務
                        </a>
                        <ul class="dropdown-menu m-0 p-0 border-0" aria-labelledby="navbarScrollingDropdown">
                            <div class="line_dropdown">
                                <li>
                                    <a class="dropdown-item " href="{{route('center.index')}}">
                                        <img src="./team-img/icon/12.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">我要領養</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('news.lawrescue')}}">
                                        <img src="./team-img/icon/9.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">動物保護</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('news.index')}}">
                                        <img src="./team-img/icon/11.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">最新消息</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('news.sitter')}}">
                                        <img src="./team-img/icon/8.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">寵物保姆</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('news.match')}}">
                                        <img src="./team-img/icon/13.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">媒合故事</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-bold text-white" aria-current="page" href="{{route('front.aboutus')}}">關於我們</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-bold text-white" href="{{route('front.supportus')}}">支持我們</a>
                    </li>
                    <li class="nav-item px-2 pt-lg-1">
                        {{-- 下面是原本的註冊登入按鈕 --}}
                        {{-- <button type="button" class="btn btn-light btn-sm px-3"
                            style="color: #647D5C;border-radius: 6px;font-size: 16px;">註冊/登入</button> --}}

                        {{-- 下面是後台加上程式碼的註冊跟登入按鈕 --}}
                        @guest
                            @if (Route::has('login') && Route::has('register'))
                            <li class="nav-item loginbtn">
                            <a class="nav-link logina" href="{{ route('login') }}">登入</a>/
                            <a class="nav-link logina" href="{{ route('register') }}">註冊</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle loginname" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if (Auth::user()->role == '管理者' OR Auth::user()->role == '工程師' )
                                {{-- 下面這行加入後台頁面按紐，只有管理者跟工程師可以看到 --}}
                                <a class="btn" href="{{ route('user.list') }}">管理後台</a>
                                @else
                                {{-- 下面這行加入會員中心按鈕，只有送養者跟領養者可以看到，管理者跟工程師無法--}}
                                <a class="btn" href="{{ route('center.member') }}">會員中心</a>
                                @endif

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">登出</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                   {{-- 上面是後台加上程式碼的註冊跟登入按鈕 --}}

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
                <img src="{{ asset('team-img/illustration/footer02.png') }}" alt="">
            </div>
            <div class="adove">
                <img src="{{ asset('team-img/LOGO/LOGO-3.png') }}" width="190px" height="230px" alt="">

            </div>
            <div class="footer-below">
                <div class="below mb-3 border-bottom pb-3">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-line"></i></a>
                    <a href=""><i class="fas fa-share-alt-square"></i></a>
                </div>
                <p>© 2022 一起回家</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
