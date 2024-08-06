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
                                    <h1 class="mb-2">ورود - ادمین</h1>
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

                                <form class="card-body pt-3" method="post" action="{{route('admin.login')}}" id="login" name="login">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">شماره همراه</label>
                                        <input class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="شماره همراه" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">کلمه عبور</label>
                                        <input class="form-control" name="password" placeholder="کلمه عبور" type="password">
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="submit">
                                        <button type="submit" class="btn btn-primary btn-block">ورود</button>
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
