@extends('layouts.auth.master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="card">
                            <div class="p-4 pt-6 text-center">
                                <h1 class="mb-2">ثبت نام</h1>
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


                            <form class="card-body pt-3" id="rgister" method="post" action="{{route('user.register')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">نام و نام خانوادگی</label>
                                    <input class="form-control" value="{{old('fullname')}}" name="fullname" placeholder="لطفا نام خود را به صورت کامل وارد کنید" type="Text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">شماره همراه</label>
                                    <input class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="لطفا شماره تلفن خود را وارد کنید" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">کد ملی</label>
                                    <input class="form-control" value="{{old('national_code')}}" name="national_code" placeholder="لطفا کد ملی خود را وارد کنید" type="text">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">اسم تیم</label>
                                    <input class="form-control" value="{{old('team_name')}}" name="team_name" placeholder="لطفا اسم تیم خود را وارد کنید" type="text">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">کلمه عبور</label>
                                    <input class="form-control" name="password" placeholder="لطفا کلمه عبور خود را انتخاب کنید" type="password">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">تکرار کلمه عبور</label>
                                    <input class="form-control" name="password_confirmation" placeholder="لطفا تکرار کلمه عبور خود را انتخاب کنید" type="password">
                                </div>

                                <div class="submit">
                                    <button class="btn btn-primary btn-block">ثبت نام</button>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-dark mb-0">ایا قبلا ثبت نام کردید?<a style="margin-right: 3px" class="text-primary ml-1" href="{{route('user.showLogin')}}">ورود</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
