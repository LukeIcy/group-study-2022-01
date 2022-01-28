@extends('layouts.app')

@section('title','登入')

@section('css')
<link rel="stylesheet" href="./css/login.css">
@endsection


@section('content')
<section class="login">
    <div class="container">
        <!-- <img src="./team-img/user/login-dog01.png" alt=""> -->
        <div class="card border-0">
            <div class="row">

                <div class="col-md-4 " style="background-color: #647D5C;">
                    <div class="login_img">
                        <img src="./team-img/user/login-dog02.png" style="width: 100%;" alt="...">
                    </div>
                </div>

                <div class="col-md-8 p-5 olol" style="background-color: #647D5C;border-radius: 0 10px 10px 0;">
                    <div class="pic d-flex justify-content-end">
                        <img src="./team-img/LOGO/LOGO-8.png" style="width: 80px;" alt="">
                    </div>

                    <div class="card-body" style="background-color: #647D5C;">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <h1 class="card-title">登入</h1>
                        <div class="row mb-3">
                            <div class="col-2 d-flex justify-content-end align-items-center">
                                <label for="email" class="label-form fs-4 fw-bold ">帳號</label>
                            </div>
                            <div class="col-10">
                                <input type="email" name="email" id="email" class="form-control email_input border-bottom border-2 fw-bold text-light @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 d-flex justify-content-end align-items-center">
                                <label for="password" class="label-form fs-4 fw-bold">密碼</label>
                            </div>
                            <div class="col-10">
                                <input type="password" name="password" id="password" class="form-control email_input border-bottom border-2  text-lightl @error('password') is-invalid @enderror" required autocomplete="current-password">
                            
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-12 col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label label-form fs-4 fw-bold" for="remember">記住我</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-none label-form fs-4 fw-bold " >忘記密碼</a>
                                @endif
                                <a href="./register.html" class="text-decoration-none label-form fs-4 fw-bold " >還沒註冊</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-25 login_btn fs-5">登入</button>
                    </form>

                    </div>

                   
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
