@extends('layouts.app')

@section('css')
    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
        .td{
            text-align: center;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <table id="test" class="table table-light table-striped table-hover align-middle mt-5">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">id</th>
                        <th style="width: 60px">同意契約</th>
                        <th style="width: 60px">已滿20</th>
                        <th>姓名</th>
                        <th>連絡電話</th>
                        <th style="width: 60px">Line ID</th>
                        <th>FB 暱稱</th>
                        <th style="width: 60px">居住地</th>
                        <th class="w-25">自我介紹</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applyDatas as $applyData)
                        <tr>
                            <td class="text-center">{{ $applyData->id }}</td>
                            <td>{{ $applyData->contract }}</td>
                            <td>{{ $applyData->age }}</td>
                            <td>{{ $applyData->name }}</td>
                            <td>{{ $applyData->phone }}</td>
                            <td>{{ $applyData->line }}</td>
                            <td>{{ $applyData->fbName }}</td>
                            <td>{{ $applyData->address }}</td>
                            <td>{{ $applyData->myself }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- dataTable -->
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#test').DataTable();
        });
    </script>
@endsection
