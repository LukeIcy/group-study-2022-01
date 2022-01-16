@extends('layouts.app')

{{-- @section('title','news-management') --}}

@section('css')
    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<style>
		/* 這個表格真的是莫名其妙 有時置中 有時不置中 */
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
		/* .image{
			width: 200px;
			height: 200px;
		} */
	</style>
@endsection

@section('main')
<button><a href="{{route('news.create')}}">新增最新消息</a></button>
<div class="container">
	<table id="backstage_table" class="display">
		<thead>
			<tr>
				<th>圖片</th>
				<th>名稱</th>
				<th>發布時間</th>
				<th>修改時間</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>

            @foreach ($newsuse as $item)
            <tr>
                <td><img src="{{$item->image}}" alt="" class="image"></td>
                <td>{{$item->title}}</td>
                <td>{{$item->created_at}}</td>
				<td>{{$item->updated_at}}</td>
                <td>
					<a href="{{route('news.edit', ['id' =>$item->id])}}"  class="btn btn-outline-info">編輯</a>
					{{-- 新方法 用js把你按鈕下面的表單送出 --}}
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



