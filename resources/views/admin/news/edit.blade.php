@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/info-create.css') }}">
@endsection

@section('main')
    <div class="container">

        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{route('news.update',['id' =>$news->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <label for="title" class="form-label">文章標題</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{$news->title}}">
                    </div>
                    
                    <select class="form-select" aria-label="Default select example" name="type">
                        {{-- 用運@if@endif 讓資料選擇selected --}}
                        <option value="最新消息" @if($news->type == "最新消息") selected @endif>最新消息</option>
                        <option value="寵物保姆" @if($news->type == "寵物保姆") selected @endif>寵物保姆</option>
                        <option value="動保法律" @if($news->type == "動保法律") selected @endif>動保法律</option>
                        <option value="一起回家故事" @if($news->type == "一起回家故事") selected @endif>一起回家故事</option>
                    </select>
                    <div class="row custom">
                        <label for="content" class="form-label">文章內容</label>
                        <textarea rows="20" name="content" id="content" class="form-control">{{$news->content}}</textarea>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="form-label">圖片上傳</label>
                        <input type="file" id="image" name="image" class="form-control" value="{{$news->image}}">
                    </div>
                    <div class="btn_group">
                        <a href="{{ route('news.list') }}" class="btn btn-warning" style="margin-right: 16px">取消</a>
                        <button type="submit" class="btn btn-info">更新</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
