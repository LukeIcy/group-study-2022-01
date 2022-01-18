@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/info-create.css') }}">
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="title" class="form-label">文章標題</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    {{-- 文章類型 不知道是不是被select包住 值傳不出來--}}
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected>文章類型</option>
                        <option value="最新消息">最新消息</option>
                        <option value="寵物保姆">寵物保姆</option>
                        <option value="動保法律">動保法律</option>
                        <option value="一起回家故事">一起回家故事</option>
                      </select>
                    {{-- 文章類型end --}}
                    <div class="row custom">
                        <label for="content" class="form-label">文章內容</label>
                        <textarea rows="20" name="content" id="content" class="form-control"></textarea>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="form-label">圖片上傳</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="btn_group">
                        <a href="{{ route('news.list') }}" class="btn btn-warning" style="margin-right: 16px">取消</a>
                        <button type="submit" class="btn btn-success">新增文章</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

{{-- @section('js')
    <script>
        const typeElements = document.querySelectorAll('.form-select option');
        console.log(typeElements);
    </script>
@endsection --}}
