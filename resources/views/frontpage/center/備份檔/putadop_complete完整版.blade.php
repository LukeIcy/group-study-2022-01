<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心 我要送養</title>
    <!-- bootstrap Core CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- fontawesome Core CSS CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- index css -->
    <link rel="stylesheet" href="./css/layout.css">
    <style>
        .pic {
            width: 100px;
            height: 100px;
        }

        .pic>img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* border-radius: 50%; */
        }

        .first_line {
            height: 2px !important;
            background-color: #d56246;
            opacity: 0.8;
            margin: unset;
            margin-bottom: 88px;
        }

        @media (max-width: 992px) {
            .none {
                display: none;
            }

            .first_line {
                margin-bottom: 32px;
            }
        }
    </style>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d56246;margin-bottom: 75px;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="./index.html">
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
                            網站服務
                        </a>
                        <ul class="dropdown-menu m-0 p-0 border-0" aria-labelledby="navbarScrollingDropdown">
                            <div class="line_dropdown">
                                <li>
                                    <a class="dropdown-item" href="./adoption_pic.html">
                                        <img src="./team-img/icon/12.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">動物領養</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./law_animal.html">
                                        <img src="./team-img/icon/9.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">動物保護</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./news.html">
                                        <img src="./team-img/icon/11.png" width="50px" alt="">
                                        <span class="mx-2 fw-bold" style="font-size: 16px;">最新消息</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./babysitter.html">
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
                        <a class="nav-link fw-bold text-white" href="#">支持我們</a>
                    </li>
                    <li class="nav-item px-2 pt-lg-1">
                        <button type="button" class="btn btn-light btn-sm fw-bold px-3"
                            style="color: #030303;border-radius: 6px;font-size: 16px;width: 120px;">登出</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
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
                            style="width: 160px;background-color: #d56246;font-size: 18px;">個人資料</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;">送養紀錄</a>
                        <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                            style="width: 160px;background-color: #d56246;font-size: 18px;color: #fff;">我要送養</a>
                        <a class="text-dark fw-bolder fs-6 text-decoration-none ms-auto none" href="./index.html">
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
    </main>


    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>

</html>