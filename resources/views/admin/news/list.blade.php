@extends('layouts.app')

{{-- @section('title','news-management') --}}

@section('css')
    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<style>
		#backstage_table thead{
			background-color: rgb(110, 66, 66);
			color: white;
			text-align: center;
		};

		th{
			text-align: center;
		};

		td{
			text-align: center;
		};
	</style>
@endsection

@section('main')
<div class="container">
	<a href="{{route('news.create')}}" class="btn btn-success mb-3">新增文章</a>
	<table id="backstage_table" class="pt-3">
		<thead>
			<tr>
				<th style="width: 40px">id</th>
				<th style="width: 300px">標題</th>
				<th style="width: 80px">文章內容</th>
				<th style="width: 60px">圖片</th>
				<th style="width: 80px">類型</th>
				<th style="width: 120px">發布時間</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($newsuse as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#catch{{$item->id}}">
						文章內容
					</button>					
					<!-- Modal 永遠都只能抓到第一筆的id-->
					<div class="modal fade" id="catch{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">文章內容</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									{{$item->content}}
								</div>
							</div>
						</div>
					</div>
					<!-- Modal end-->
				</td>
				<td>
					<div class="card-img-top" style="background-image: url({{$item->image}}); width:50px; height:50px; background-size: cover"></div>
				</td>
                <td>{{$item->type}}</td>
				<td>{{$item->created_at}}</td>
                <td>
					<a href="{{route('news.edit', ['id' =>$item->id])}}"  class="btn btn-outline-info">編輯</a>
					{{-- 新方法 神技 用js把你按鈕下面的表單送出 --}}
					<button href="" class="delete-btn btn btn-outline-danger">刪除</button>
					<form action="{{route('news.destroy', ['id' =>$item->id])}}" method="post" class="d-none">
						@csrf
						@method('DELETE')
					</form>
                </td>
            </tr>
            @endforeach

		</tbody>
	</table>
</div>
@endsection

@section('js')

<script>
const deleteElements = document.querySelectorAll('.delete-btn');
deleteElements.forEach(function(deleteElement){
	deleteElement.addEventListener('click',function () {
		if (confirm('是否確定刪除此筆資料?')) {
			this.nextElementSibling.submit();
		}
	});
});
</script>

@endsection
