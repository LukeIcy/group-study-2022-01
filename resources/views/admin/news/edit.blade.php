@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/info-create.css') }}">
@endsection

@section('main')
    <div class="container">
        {{-- <form action="{{route('news.store')}}" method="POST"> --}}
        {{-- 用下面這條會報錯419，但是我要傳圖片啊... --}}
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="title" class="form-label">文章標題</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{$news->title}}">
                    </div>
                    {{-- <div class="row">
					<label for="author">文章作者</label>
					<input type="text" id="author" name="author">
				</div> --}}
                    <div class="row custom">
                        <label for="content" class="form-label">文章內容</label>
                        <textarea name="content" id="content" class="form-control">{{$news->content}}</textarea>
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
