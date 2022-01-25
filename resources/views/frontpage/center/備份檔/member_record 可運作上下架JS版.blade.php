@extends('layouts.centerlayout')

@section('title', '會員中心 送養紀錄')

@section('css')
    <style>
        @media (max-width: 992px) {

            .mycard_img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
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
                        <img src="{{ Auth::user()->avatar }}" alt="你的頭像">
                    </div>
                    <h4 class="fw-bold m-0">{{ Auth::user()->name }}</h4>
                </div>
                <div class="col-12 col-md-8 d-flex align-items-end">
                    <a class="btn rounded-0 fw-bold" href="{{ route('center.member') }}" role="button"
                        style="width: 160px;background-color: #d56246;font-size: 18px;">個人資料</a>
                    <a class="btn rounded-0 ms-3 fw-bold" href="#" role="button"
                        style="width: 160px;background-color: #d56246;font-size: 18px;color: #fff;">送養紀錄</a>
                    <a class="btn rounded-0 ms-3 fw-bold" href="{{ route('center.putadop') }}" role="button"
                        style="width: 160px;background-color: #d56246;font-size: 18px;">我要送養</a>

                </div>
            </div>
        </div>
    </section>

    <hr class="first_line">

    <!-- 送養紀錄 -->
    <section class="member_centre_form">
        <div class="container">
            {{-- 以下為卡片，曉薏認領成功完成 --}}
            @foreach ($animal as $item)

                <div class="card mb-3 border border-dark">
                    <div class="row g-0">
                        <div class="col-12 col-md-2">
                            <img {{-- ??代表判斷前面有沒有東西 沒有就印後面 --}} {{-- src="{{$item->imgs->image}}" --}} src="{{ $item->imgs[0]->image ?? '' }}"
                                class="img-fluid mycard_img" alt="..." />
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->name }}</h4>
                                <h4 class="gender">{{ $item->gender }}</h4>
                                <h4 class="card-text">{{ $item->created_at }}</h4>
                                {{-- 下面會根據資料顯示目前的上下架狀態 --}}
                                <p class="fs-4 text-white d-inline @if ($item->launched == "上架中") text-success bg-success
                                    @else text-secondary bg-secondary @endif">{{ $item->launched }}</p>
                                <a href="{{route('center.animal',['id' => $item->id])}}" type="button" class="btn btn-info">查看</a>
                                <a href="{{route('center.edit',['id' => $item->id])}}"  type="button" class="btn btn-warning">編輯</a>

                                {{-- 上下架功能 這邊把原本的a標籤換成div 因為a標籤可能會先啟動 導致不能被js抓到--}}
                                @if ($item->launched == "上架中")
                                <div class="launched-btn btn btn-secondary">下架</div>
                                @else
                                <div class="launched-btn btn btn-success">上架</div>
                                @endif

                                @if ($item->launched == "上架中")
                                <form action="{{route('center.launched', ['id' =>$item->id])}}" method="post" class="d-none">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="launched" value="下架">
                                    {{-- 下面加一個按鈕看看 --}}
                                    {{-- <button type="submit" class="d-none"></button> --}}
                                </form>
                                @else
                                <form action="{{route('center.launched', ['id'=>$item->id])}}" method="post" class="d-none">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="launched" value="上架中">
                                    {{-- 下面加一個按鈕看看 --}}
                                    {{-- <button type="submit" class="d-none"></button> --}}
                                </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


@endsection

@section('js')

<script>
    // 一定要做console log來檢驗問題
    const launchedElements = document.querySelectorAll('.launched-btn');
    launchedElements.forEach(function(launchedElement){
        launchedElement.addEventListener('click',function () {
                this.nextElementSibling.submit();
                // this.nextElementSibling.children.submit();
                // this.nextElementSibling.lastElementChild.submit();
                // this.nextElementSibling.lastElementChild.click();
        });
    });
    </script>

@endsection
