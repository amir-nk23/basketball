@extends('layouts.auth.master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="card">
                            <div class="p-4 pt-6 text-center">
                                <h1 class="mb-2">Register</h1>
                                <p class="text-muted">Create new account</p>
                            </div>
                            <form class="card-body pt-3" id="rgister" name="register">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input class="form-control" placeholder="Name" type="Text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-Mail</label>
                                    <input class="form-control" placeholder="Email" type="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" placeholder="password" type="password">
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">I agree to the <a href="#" class="text-primary">Terms of services</a> and <a href="#" class="text-primary">Privacy policy</a></span>
                                    </label>
                                </div>
                                <div class="submit">
                                    <a class="btn btn-primary btn-block" href="index.html">Create Account</a>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-dark mb-0">Already have an account?<a class="text-primary ml-1" href="#">LogIn</a></p>
                                </div>
                            </form>
                            <div class="card-body border-top-0 pb-6 pt-2">
                                <div class="text-center">
                                    <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-facebook-line"></i></span>
                                    <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-instagram-line"></i></span>
                                    <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-twitter-line"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
