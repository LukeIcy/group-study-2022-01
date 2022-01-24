@extends('layouts.app')

@section('title','apply-management')

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

        .td{
            text-align: center;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <table id="backstage_table" class="table table-light table-striped table-hover align-middle mt-5">
                <thead class="table-primary">
                    <tr>
                        {{-- <th class="text-center">寵物寵物</th> --}}
                        <th class="text-center">id</th>
                        <th style="width: 60px">同意契約</th>
                        <th style="width: 60px">已滿20</th>
                        <th>姓名</th>
                        <th>連絡電話</th>
                        <th style="width: 60px">Line ID</th>
                        <th>FB 暱稱</th>
                        <th style="width: 60px">居住地</th>
                        <th class="w-25">自我介紹</th>
                        {{-- <th class="w-25">申請人帳號名</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applyDatas as $applyData)
                        <tr>
                            {{-- <td class="text-center">{{ $applyData->animal->name }}</td> --}}
                            <td class="text-center">{{ $applyData->id }}</td>
                            <td>{{ $applyData->contract }}</td>
                            <td>{{ $applyData->age }}</td>
                            <td>{{ $applyData->name }}</td>
                            <td>{{ $applyData->phone }}</td>
                            <td>{{ $applyData->line }}</td>
                            <td>{{ $applyData->fbName }}</td>
                            <td>{{ $applyData->address }}</td>
                            <td>{{ $applyData->myself }}</td>
                            {{-- <td>{{ $applyData->user->name }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')

@endsection
