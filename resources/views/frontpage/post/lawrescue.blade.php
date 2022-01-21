@extends('layouts.layout')

@section('title', '動保法律&動物救援')

@section('css')
<link rel="stylesheet" href="./css/law_animal.css">
@endsection

@section('main')
    
<section class="law_animal_title d-flex justify-content-center align-items-center" style="height: 310px; ">
    <div class="container">
        <div class="babysitter_title d-flex justify-content-center mb-5">
            <h1 style="color: #85550E;font-size: 80px;font-weight: 600;">動保法律</h1>
        </div>
    </div>
</section>

<hr class="line_hr m-0 mb-5" style="height: 2px;background-color: #d56246;opacity: 0.8;">

<section class="law_animal_content">
    <div class="container">
        <div class="row p-3 mx-auto">

            @foreach ($lawrescue as $item)
                
            <div class="col-6">
                <div class="card h-100 border-0 p-3">
                    <img src="{{ $item->image }}" class="card-img-top shadow mb-3" alt="...">
                    <div class="card-body">
                        <a href="">
                            <h2>{{ $item->title }}</h2>
                        </a>
                        <p>{{ $item->content }}</p>
                    </div>
                </div>
            </div>

            @endforeach

            {{-- 原資料1 --}}
            {{-- <div class="col-6">
                <div class="card h-100 border-0 p-3">
                    <img src="./team-img/pic1030px/11.png" class="card-img-top shadow mb-3" alt="...">
                    <div class="card-body">
                        <a href="">
                            <h2>送養協議都簽完了 才發現對方是認養 黑名單怎麼辦?</h2>
                        </a>
                        <p>很多中途最常遇到的事件之一: 都簽好協議才知道對方是認養黑名單，因為害怕被告只好無奈送毛孩入虎口~</p>
                        <p>文 | 將小薏</p>
                        <p>長年協助動保弱勢法律服務的顏律師提醒各位愛媽愛爸，依民法第408條第1項規定，贈與物之權利未移轉前，贈與人得撤銷其贈與，所以雖然已經答應送養之後卻發現對方是黑名單，只要撤銷贈與即可﹐不要因為擔心不交付浪浪會被告而送出，陷浪浪於險地。
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- 原資料2 --}}
            {{-- <div class="col-6">
                <div class="card h-100 border-0 p-3">
                    <img src="./team-img/pic1030px/25.png" class="card-img-top shadow mb-3" alt="...">
                    <div class="card-body">
                        <a href="">
                            <h2>何謂具有法律效力的送養切結書?</h2>
                        </a>
                        <p>文 | 三色書房 顏紘頤律師</p>
                        <p>1 雙方互相意思表示一致者，契約即為成立，所以只要認養切結書一方講好願意送養貓狗，一方願意領養貓狗，這份認養切結書就可能成立契約，只要契約成立且沒有無效的原因，就是有效的契約，就有法律效力。
                        </p>
                        <p>2 為保護交易安全，我們的法律實務會盡量讓契約有效，契約無效其實是很例外的狀況，依契約總數量來看，無效契約算是非常稀少。.....詳見內文
                        </p>
                        <p class="text-end">原文出處：本文獲作者授權刊登，未經同意請勿任意轉載。</p>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</section>
<!-- 動物救援 -->
<section class="help_animal">
    <div class="container">
        <div class="row mx-auto">
            <h2>動物救援</h2>
            <h3>【全民通報行動&#128293;】一起終結 #不當飼養 犬隻！</h3>
        </div>
        <div class="row bg-light p-3 mx-auto mb-5">
            <div class="col-md-5">
                <img src="./team-img/law_animal/600.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-7 p-3">
                <div class="card-body">
                    <p>你家附近也有長年被栓綁、關籠的狗嗎？
                        請參與全民通報行動，拍照記錄後填寫本
                        表單，回報你看到的「不當飼養」犬隻案
                        件同時協助和飼主溝通，一起為牠發聲！</p>
                    <a href="https://forms.gle/q5F1M8QcQHoGQMR99" target="_blank" class="btn shadow" role="button">我要通報</a>
                    {{-- 上面a我移掉 data-bs-toggle="button"，因為會讓按鈕沒作用，我也不知道為啥 --}}
                    <p class="reference w-75">原文出處：本文獲台灣動物社會研究會
                        授權刊登，未經同意請勿任意轉載。</p>
                </div>
            </div>
        </div>
        <!-- 不當飼養 -->
        <div class="row mx-auto">
            <div class="not_rearing mb-3 px-5">
                <h4><i class="fas fa-square mx-2"></i>什麼是不當飼養？</h4>
                <ul>
                    <li>-長期關籠</li>
                    <li>-長期鍊繩</li>
                    <li>-未提供飲食飲水，或飲食飲水不適當、不乾淨</li>
                    <li>-遮蔽不足</li>
                    <li>-飼養環境危險、髒亂等等...</li>
                </ul>
            </div>
            <div class="not_rearing_dog px-5">
                <h4><i class="fas fa-square mx-2"></i>️為什麼要關注不當飼養犬隻？</h4>
                <p>
                    台灣常見飼主將狗長期關籠拴綁，只將狗視為看家、看工廠、看果園的「工具」，或任其遊蕩、放養成為流浪犬貓的源頭。美國疾病管制與預防中心（CDC）研究指出，無數犬隻攻擊人的事件，極高比例發生於飼主的不當飼養，如以鐵鍊長期拴綁犬隻，或將犬隻長期關籠囚禁飼養。
                </p>
                <p>動物因無法有正常社會化的互動，導致長期焦慮、恐懼，甚至因無法逃離威脅、危險而引發攻擊行為。被鍊犬攻擊人的機率是非被鍊犬的2.8倍，顯示「不當飼養」除了嚴重剝削動物福利外，更是造成狗咬人的潛在不定時炸彈，讓動物福利與公共安全雙輸。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 相關網站 -->
<section class="related">
    <div class="container">
        <div class="row mx-auto mb-5">
            <div class="related_www px-5">
                <h4>相關網站</h4>
                <hr class="line_hr m-0 mb-3" style="height: 2px;background-color: #d56246;opacity: 0.8;">
                <ul>
                    <li><a href="https://alraptw.org/">台灣動物保護法律研究協會</a></li>
                    <li><a href="https://www.hotac.org.tw/">台灣之心愛護動物協會</a></li>
                    <li><a href="https://www.east.org.tw/">社團法人台灣動物社會研究會</a></li>
                </ul>
            </div>
            <div class="consult px-5">
                <h4>法務諮詢</h4>
                <hr class="line_hr m-0 mb-3" style="height: 2px;background-color: #d56246;opacity: 0.8;">
                <a href="https://www.facebook.com/hongyilawyer/">顏紘頤律師的綠紫黃三色書房</a>
            </div>
        </div>
    </div>
</section>
<!-- 這一頁是真的不需要分頁按鈕的 冏 -->
{{-- <div class="py-5 mb-5">
    <div class="btn-toolbar mb-5 d-flex justify-content-center" role="toolbar"
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
</div> --}}

@endsection

@section('js')
    
@endsection
