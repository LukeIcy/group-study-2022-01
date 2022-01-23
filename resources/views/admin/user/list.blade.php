@extends('layouts.app')

@section('title','使用者列表')

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
	<table id="backstage_table" class="display">
		<thead>
			<tr>
				<th>姓名</th>
				<th>信箱</th>
				<th>加入時間</th>
				<th>權限</th>
				<th>操作</th>
				{{-- <th width:"120" class:"text-center">操作</th> --}}
			</tr>
		</thead>
		<tbody>

            @foreach ($user as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>之後會放權限</td>
				{{-- <td>{{($item->role)}}</td> --}}
                <td>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#catch{{$item->id}}">
						重設密碼
					</button>					
					<!-- Modal 要把按鈕跟裡面的div填入{{$item->id}}互相對應到 才能抓到每一筆資料-->
					<form action="/user/{{$item->id}}/updatepassword" method="post">
						@csrf
						@method('PATCH')
						<div class="modal fade" id="catch{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">密碼重設一次收費500元</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<label for="password">輸入新密碼</label>
										<input type="password" name="password" id="password">
									</div>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
								<button type="submit" class="btn btn-primary">確定</button>
								</div>
							</div>
							</div>
						</div>
					</form>
					{{-- Modal end --}}					
					<button type="button" class="btn btn-outline-info disabled" aria-disabled="true" disable>凍結</button>
					<button type="button" class="delete-btn btn btn-outline-danger">刪除</button>
					<form action="{{route('user.destroy', ['id' =>$item->id])}}" method="post" class="d-none">
						@csrf
						@method('DELETE')
					</form>
                    {{-- <a href="/user/info/{{$item->id}}">應該不會做的個人頁</a> --}}
					
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



