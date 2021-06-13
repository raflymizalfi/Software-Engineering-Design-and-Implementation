@extends("layouts.auth")

@section("content")
<form action="{{ url('user/login') }}" method="post" class="container w-50">
    @csrf
    <div class="row mb-5">
        <div class="col">
            <img src="img/logo.png" alt="logo" width="100">
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 fw-bold">
            Welcome back!
        </div>
        <div class="col-12 fw-bold">
            Login to access dailydaily.com
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <input type="email" name="email" class="form-control" placeholder="Email address">
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <button type="submit" class="form-control bg-accent text-white">
                Log in
            </button>
        </div>
    </div>
    <div class="row mt-3 mb-5 pb-5">
        <div class="col form-group" style="font-size: 0.8em;">
            Don't have an account? <a href="register" class="color-accent">Sign up for free</a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 form-group" style="font-size: 0.7em;">
            By signing up, you agree to daily daily.com
        </div>
        <div class="col-12 form-group fw-bold" style="font-size: 0.7em;">
            <a href="#" class="text-dark">Terms and Condition</a> & <a href="#" class="text-dark">Privacy Policy</a>
        </div>
    </div>
</form>
@endsection