@extends('layouts.centerlayout')

@section('title', '會員中心 我要送養')

@section('css')
<style>
    .img-card img{
        width: 300px;
        height: 300px;
    }
</style>

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
                        <a class="btn rounded-0 fw-bold" href="{{route('center.member')}}" role="button"
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
    <form action="{{route('center.store')}}" method="POST" enctype="multipart/form-data">
        {{-- 忘記加@csrf，真是，難怪419 --}}
        @csrf
        <section class="put_up mb-5">
            <div class="container">

                <div class="row">
                    <div class="col-8 mx-auto">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold m-0">寵物姓名</label>
                            <input type="text" name="name" id="name" class="form-control w-50">
                        </div>
                        <div class="mb-3">
                            <label for="species" class="form-label fw-bold m-0">寵物物種</label>
                            <input type="text" name="species" id="species" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label fw-bold m-0">寵物性別</label>
                            <input type="text" name="gender" id="gender" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label fw-bold m-0">寵物年齡</label>
                            <input type="text" name="age" id="age" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="persona" class="form-label fw-bold m-0">寵物個性</label>
                            <input type="text" name="persona" id="persona" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="chara" class="form-label fw-bold m-0">寵物特色</label>
                            <input type="text" name="chara" id="chara" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="health" class="form-label fw-bold m-0">寵物健康狀況</label>
                            <input type="text" name="health" id="health" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="fixed" class="form-label fw-bold m-0">寵物是否節育</label>
                            <input type="text" name="fixed" id="fixed" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label fw-bold m-0">寵物所在地</label>
                            <input type="text" name="location" id="location" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="form-label fw-bold m-0">寵物是否施打預防針</label>
                            <input type="text" name="vaccine" id="vaccine" class="form-control">
                            {{-- <p class="fw-bold">附註事項 (如有特殊事項 請在此欄位填寫)</p> --}}
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

                        <div class="">
                            <label for="adcond" class="form-label">填寫您的認養條件(請條列式說明) </label>
                            <textarea class="form-control" id="adcond" name="adcond" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <!-- 跟領養人說的話 -->
                <div class="d-flex justify-content-center mb-3 mt-5">
                    <div class="text-white text-center fs-5 fw-bold p-1 mb-3"
                        style="background-color: #647D5C;height: 38px;width: 180px;">跟領養人說的話</div>
                </div>
                <div class="row" style="font-size: 18px;font-weight: 600;">
                    <div class="col-8 mx-auto">
                        <div class="">
                            <label for="exhort" class="form-label">填寫您想傳達的內容 </label>
                            <textarea class="form-control" id="exhort" name="exhort" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                {{-- 圖片上傳 --}}
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="mb-3 w-75 ms-auto">
                            <label for="image" class="form-label"></label>
                            <input class="form-control" type="file" id="image" name="image" multiple onchange="imgupload()">
                        </div>
                    </div>
                    <div class="col-4 ">
                        <button type="submit" class="btn border-0 text-white" style="background-color: #647D5C;border-radius: unset;font-size: 18px;">確認發布認養文章</button>
                    </div>
                    <div id="uploaded-img" class="d-flex flex-wrap justify-content-between">
                    </div>

                </div>
            </div>
        </section>
    </form>

@endsection

@section('js')
<script>
    var input = document.querySelector('#image');
    var uploaded = document.querySelector('#uploaded-img');

    function imgupload() {
        var formdata = new FormData();
        formdata.append('_token','{{csrf_token()}}');
        for (let index = 0; index < input.files.length; index++) {
            console.log(input.files[index]);
            formdata.append('img[]',input.files[index]);
        }

        fetch('/member/putadop/imgUpload',{
            method: 'POST',
            body: formdata
        })

        // 接收回傳的資料
        .then(response => response.json())
        // .catch(error => console.error('Error:',error))
        .then(response => {
            console.log('Success:',response[0])
            response.forEach(element => {
                uploaded.innerHTML += `
                <div class="img-card">
                    <div class="delete-img" onclick="imgdelete(this, '${element}')"><i class="far fa-times-circle"></i></div>
                    <img src="${element}" alt="">
                    <input type="text" name="img[]" value="${element}" hidden>
                </div>
                `
            });
        });
    }

function imgdelete(element, path) {
    // console.log(path);
    var formdata = new FormData();
    formdata.append('_token','{{csrf_token()}}');
    formdata.append('path',path);
    fetch('/member/putadop/imgDelete',{
            method: 'POST',
            body: formdata
    })
    element.parentElement.remove();
    // console.log(element.parentElement);
}

</script>
@endsection
