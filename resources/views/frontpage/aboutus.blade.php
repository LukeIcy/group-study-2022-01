@extends('layouts.layout')

@section('title', '關於我們')

@section('css')
    
<link rel="stylesheet" href="./css/about_us.css">

@endsection

@section('main')
    
<section class="about_us">
    <div class="container d-grid" style="height: 300px;">
        <div class="row">
            <div class="about_us_title d-flex align-items-center justify-content-center position-relative">
                <div class="pic position-absolute start-0 top-0">
                    <img src="./team-img/babysitter/paw01.png" style="width: 300px;" alt="">
                </div>
                <h1>關於我們</h1>
            </div>
        </div>
    </div>
</section>
<!-- 關於我們內文 -->
<section class="about_us_content">
    <div class="container">
        <div class="row">
            <div class="content_top col-12">
                <p>
                    近期有許多認養亂象，有些人利用動物詐財或披著羊皮的心理變態藉由虐殺動物以滿足自己的慾望，從「大橘子事件」到近期「茶茶事件」一再地削弱人與人之間的信任，增加送養人與領養人之間的對立，最終結果則讓毛孩回家之路更為遙遠艱辛。
                </p>
            </div>
            <div class="content_middle col-12">
                <p>
                    我們始終相信社會與人們建立的橋樑應該是溝通與信任，許多人都認為科技是冰冷的，這個網站就是要反轉認養的窠臼，利用推薦制的送養人制度，篩選真正為毛孩付出心力的優秀中途，創造保障雙方和有效率的免付費認養環境，幫助毛孩回家。
                </p>
            </div>
            <div class="content_bottom col-12">
                <div class="list">
                    <h3>服務項目：</h3>
                    <ul>
                        <li>1. 提供領養貓咪的資訊和踏實的領養管道</li>
                        <li>2. 讓更多人能正確的認識貓咪</li>
                        <li>#貓咪知識文章 #整理實用資訊 #動物保護法律常識</li>
                    </ul>
                </div>
                <div class="pic">
                    <img src="./team-img/LOGO/LOGO-3.png" style="width: 230px;opacity: 0.7;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 連絡我們 -->
<section class="liason_us">
    <div class="container">
        <div class="row liason_content w-100">
            <div class="liason_top col-12">
                <h3>連絡我們</h3>
            </div>
            <div class="liason_middle col-12">
                <p>您的留言</p>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
            </div>
            <div class="liason_bottom col-md-6 offset-md-6">
                <p>您的姓名</p>
                <hr>
                <p>您的e-mail</p>
                <hr>
            </div>
            <div class="btn col offset-md-9">
                <img src="./team-img/LOGO/LOGO-3.png" style="width: 60px;margin-right: 12px;" alt="">
                <input class="btn" type="submit" value="送出">
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
    
@endsection