@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/info-create.css')}}">
@endsection

@section('main')
<div class="container">
	{{-- <form action="{{route('news.store')}}" method="POST"> --}}
	{{-- 用下面這條會報錯419，但是我要傳圖片啊... --}}
	<form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<label for="title">文章標題</label>
			<input type="text" id="title" name="title">
		</div>
		{{-- <div class="row">
			<label for="author">文章作者</label>
			<input type="text" id="author" name="author">
		</div> --}}
		<div class="row custom">
			<label for="content">文章內容</label>
			<textarea name="content" id="content"></textarea>
		</div>
		<div class="row">
			<label for="image">圖片上傳</label>
			<input type="file" id="image" name="image">
		</div>
		<div class="row btn">
			<a href="{{route('news.list')}}">取消</a>
			<button type="submit">新增文章</button>
		</div>
	</form>
</div>
@endsection
