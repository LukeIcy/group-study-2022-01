@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/info-create.css')}}">
@endsection

@section('main')
<div class="container">
	<form action="{{route('news.update',['id' => $news->id])}}" method="POST"  enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="row">
			<label for="title">文章標題</label>
			<input type="text" id="title" name="title" value="{{$news->title}}">
		</div>
		<div class="row custom">
			<label for="content">文章內容</label>
			<textarea name="content" id="content">{{$news->content}}"</textarea>
		</div>
		<div class="row">
			<label for="image">圖片上傳</label>
			<input type="file" id="image" name="image" value="{{$news->image}}">
		</div>
		<div class="row btn">
			<a href="{{route('news.list')}}">取消</a>
			<button type="submit">更新</button>
		</div>
	</form>
</div>
@endsection
