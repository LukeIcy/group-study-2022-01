@extends('layouts.app')

{{-- @section('title','user-management') --}}

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
				{{-- <td>{{($item->role)}}</td> --}}
                <td>
					{{-- <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
						重設密碼
					  </button>					  
					  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h5 class="modal-title" id="exampleModalLabel">重設密碼費用500/次</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							  </button>
							</div>
							<div class="modal-body">
								<label for="password">幫助使用者重設密碼</label>
								<input type="password" name="password" id="password">
							</div>
							<div class="modal-footer">
								<form action="/user/update/{{$user->id}}" method="post">
									@csrf
									<button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
									<button type="submit" class="btn btn-danger" data-dismiss="modal">確定</button>
								</form>
							</div>
						  </div>
						</div>
					  </div> --}}

					<!-- Button trigger modal -->
					<button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
						重設密碼
					</button>
					
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">密碼重設一次收費500元</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="modal-body">
									<label for="password">幫助使用者重設密碼</label>
									<input type="password" name="password" id="password">
								</div>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
							<button type="button" class="btn btn-primary">確定</button>
							</div>
						</div>
						</div>
					</div>
  {{-- 下面不是 --}}
					<button type="button" class="btn btn-outline-info disabled" aria-disabled="true">凍結</button>
					<button type="button" class="btn btn-outline-danger">刪除</button>
                    <a href="/user/info/{{$item->id}}">老師那顆</a>
                </td>
            </tr>
            @endforeach

		</tbody>
	</table>
</div>
@endsection

@section('js')

@endsection



