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
                            <form class="card-body pt-3" id="rgister" name="register">
                                <div class="form-group">
                                    <label class="form-label">نام و نام خانوادگی</label>
                                    <input class="form-control" placeholder="لطفا نام خود را به صورت کامل وارد کنید" type="Text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">شماره همراه</label>
                                    <input class="form-control" placeholder="لطفا شماره تلفن خود را وارد کنید" type="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">کد ملی</label>
                                    <input class="form-control" placeholder="لطفا کد ملی خود را وارد کنید" type="password">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">اسم تیم</label>
                                    <input class="form-control" placeholder="لطفا اسم تیم خود را وارد کنید" type="password">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">کلمه عبور</label>
                                    <input class="form-control" placeholder="لطفا کلمه عبور خود را انتخاب کنید" type="password">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">تکرار کلمه عبور</label>
                                    <input class="form-control" placeholder="لطفا تکرار کلمه عبور خود را انتخاب کنید" type="password">
                                </div>

                                <div class="submit">
                                    <a class="btn btn-primary btn-block" href="index.html">ثبت نام</a>
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
