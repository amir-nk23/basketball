@extends('layouts.auth.master')

@section('content')

    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-5">
                            <div class="card">
                                <div class="p-4 pt-6 text-center">
                                    <h1 class="mb-2">ورود</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form class="card-body pt-3" method="post" action="{{route('user.login')}}"  id="login" name="login">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">شماره همراه</label>
                                        <input class="form-control" name="mobile" placeholder="شماره همراه" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">کلمه عبور</label>
                                        <input class="form-control" name="password" placeholder="کلمه عبور" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                            <span class="custom-control-label">مرا به خاطر بسپار</span>
                                        </label>
                                    </div>
                                    <div class="submit">
                                        <button type="submit" class="btn btn-primary btn-block">ورود</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p class="mb-2"><a href="#">فراموشی رمز عبور</a></p>
                                        <p class="text-dark mb-0">در صورت عضو نبودن؟<a style="margin-right: 4px" class="text-primary ml-1" href="{{route('user.showRegister')}}">ثبت نام</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
