@extends("layouts.auth")

@section("content")
<form action="{{ url('user/register') }}" method="post" class="container w-50">
    @csrf
    <div class="row mb-5">
        <div class="col">
            <img src="img/logo.png" alt="logo" width="100">
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col fw-bold">
            Register to access dailydaily.com
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            <div class="form-group">
                <input type="text" class="form-control" required name="first_name" placeholder="First name">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <input type="text" class="form-control" required name="last_name" placeholder="Last name">
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <input type="email" class="form-control" required name="email" placeholder="Email address">
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <input type="password" class="form-control" required name="password" placeholder="Password">
        </div>
    </div>
    <div class="row my-3">
        <div class="col form-group">
            <button type="submit" class="form-control bg-accent text-white">
                Sign up
            </button>
        </div>
    </div>
    <div class="row mt-3 mb-5 pb-5">
        <div class="col form-group" style="font-size: 0.8em;">
            I already have an account? <a href="login" class="color-accent">Log in</a>
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