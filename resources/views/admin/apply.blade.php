@extends('layouts.app')

@section('title','apply-management')

@section('css')
    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
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
            <table id="backstage_table" class="table table-success table-striped table-hover align-middle mt-5">
                <thead class="table-primary">
                    <tr>
                        <th class="text-dark">送養人</th>
                        <th class="text-dark">寵物名稱</th>
                        <th class="text-dark">申請人帳號/姓名</th>
                        <th class="text-dark">連絡電話</th>
                        <th class="text-dark">Line ID</th>
                        <th class="text-dark">FB</th>
                        <th class="text-dark">居住地</th>
                        <th class="text-dark">自我介紹</th>
                        <th class="text-dark">狀態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applyDatas as $applyData)
                        <tr>
                            <td>{{ $applyData->animal->user->name }}</td>
                            <td>{{ $applyData->animal->name }}</td>
                            <td>{{ $applyData->user->name }}/{{ $applyData->name }}</td>
                            <td>{{ $applyData->phone }}</td>
                            <td>{{ $applyData->line }}</td>
                            <td>{{ $applyData->fbName }}</td>
                            <td>{{ $applyData->address }}</td>
                            <td>{{ $applyData->myself }}</td>
                            <td>{{ $applyData->situation }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')

@endsection
