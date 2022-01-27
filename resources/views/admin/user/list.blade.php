@extends('layouts.app')

@section('title', '使用者列表')

@section('css')
    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
        #backstage_table thead {
            background-color: rgb(110, 66, 66);
            color: white;
            text-align: center;
        }

        ;

        th {
            text-align: center;
        }

        ;

        td {
            text-align: center;
        }

        ;

    </style>
@endsection

@section('main')
    <div class="container">
        <table id="backstage_table" class="display pt-3">
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

                @if (Auth::user()->role == "工程師" )
                @foreach ($user as $item)
                    <tr class="forrole">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <form action="{{ route('user.updaterole', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <select name="role" onchange="roleChange(this)" class="form-select"
                                    aria-label="Default select example">
                                    {{-- <select name="role" class="form-select" aria-label="Default select example"> --}}
                                    <option value="工程師" @if ($item->role == '工程師') selected @endif>工程師</option>
                                    <option value="管理者" @if ($item->role == '管理者') selected @endif>管理者</option>
                                    <option value="送養者" @if ($item->role == '送養者') selected @endif>送養者</option>
                                    <option value="領養者" @if ($item->role == '領養者') selected @endif>領養者</option>
                                </select>
                            </form>
                        </td>
                        {{-- <td>{{($item->role)}}</td> --}}
                        <td class="d-flex justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning mb-1" data-bs-toggle="modal"
                                data-bs-target="#catch{{ $item->id }}">
                                重設密碼
                            </button>
                            <!-- 要使用Modal，必須要把上面的按鈕跟裡面的div都填入{{ $item->id }}，讓他們互相對應到，才能抓到每一筆資料-->
                            <form action="{{ route('user.updatepassword', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="modal fade" id="catch{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">密碼重設一次收費500元</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <label for="password">輸入新密碼</label>
                                                    <input type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">取消</button>
                                                <button type="submit" class="btn btn-primary">確定</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- Modal end --}}
                            <button type="button" class="btn btn-outline-info disabled mx-3" aria-disabled="true"
                                disable>凍結</button>
                            <button type="button" class="delete-btn btn btn-outline-danger">刪除</button>
                            <form action="{{ route('user.destroy', ['id' => $item->id]) }}" method="post"
                                class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                            {{-- <a href="/user/info/{{$item->id}}">應該不會做的個人頁</a> --}}

                        </td>
                    </tr>
                @endforeach
                @endif

                @if (Auth::user()->role == "管理者" )
                @foreach ($usernord as $item)
                    <tr class="forrole">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <form action="{{ route('user.updaterole', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <select name="role" onchange="roleChange(this)" class="form-select"
                                    aria-label="Default select example">
                                    {{-- <select name="role" class="form-select" aria-label="Default select example"> --}}
                                    <option value="管理者" @if ($item->role == '管理者') selected @endif>管理者</option>
                                    <option value="送養者" @if ($item->role == '送養者') selected @endif>送養者</option>
                                    <option value="領養者" @if ($item->role == '領養者') selected @endif>領養者</option>
                                </select>
                            </form>
                        </td>
                        {{-- <td>{{($item->role)}}</td> --}}
                        <td class="d-flex justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#catch{{ $item->id }}">
                                重設密碼
                            </button>
                            <!-- 要使用Modal，必須要把上面的按鈕跟裡面的div都填入{{ $item->id }}，讓他們互相對應到，才能抓到每一筆資料-->
                            <form action="{{ route('user.updatepassword', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="modal fade" id="catch{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">密碼重設一次收費500元</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <label for="password">輸入新密碼</label>
                                                    <input type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">取消</button>
                                                <button type="submit" class="btn btn-primary">確定</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- Modal end --}}
                            <button type="button" class="btn btn-outline-info disabled mx-3" aria-disabled="true"
                                disable>凍結</button>
                            <button type="button" class="delete-btn btn btn-outline-danger">刪除</button>
                            <form action="{{ route('user.destroy', ['id' => $item->id]) }}" method="post"
                                class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                            {{-- <a href="/user/info/{{$item->id}}">應該不會做的個人頁</a> --}}

                        </td>
                    </tr>
                @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection

@section('js')

    {{-- 當登入者的權限是管理者時，會看不到權限是工程師的帳號，因為工程師的權限較高。
	 這是用js+blade語法解決 應該還有很多種解決方式，目前這個方式不OK，
	 這樣還是能從F12改掉d-none，讓工程師的帳號顯現出來，因為資料是先出來後才被js遮起來
	 而且沒寫foreach 只能抓一個 --}}
    {{-- @if (Auth::user()->role == '管理者')
        <script>
            let trrr = document.querySelector('.forrole');
            let position = document.querySelector('.form-select');

            if (position.value === "工程師") {
                trrr.setAttribute("class", "d-none");
            }
        </script>
    @endif --}}

    <script>
        // this是保留字 不能寫到函式的()
        function roleChange(role) {
            if (confirm('是否更改使用者權限?')) {
                role.parentElement.submit();
            }

        }
    </script>

    <script>
        const deleteElements = document.querySelectorAll('.delete-btn');
        deleteElements.forEach(function(deleteElement) {
            deleteElement.addEventListener('click', function() {
                if (confirm('是否確定刪除此筆資料?')) {
                    this.nextElementSibling.submit();
                }
            });
        });
    </script>

@endsection
