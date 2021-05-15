@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-form">
        <div class="login">
            <div class="row">
                <div class="col-xs-10 col-sm-9 col-md-8 m-auto">
                    <div class="row justify-content-center">
                        <div class="col-md slider d-none d-lg-block" id="slider">
                            <div class="statge overflow-hidden ">
                                <div class="slider-items d-flex overflow-hidden">
                                    <img src="images/slider/sider-imges/screen-1.jpg" alt="" >
                                    <img src="images/slider/sider-imges/screen-2.jpg" alt="">
                                    <img src="images/slider/sider-imges/screen-3.jpg" alt="">
                                    <img src="images/slider/sider-imges/screen-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md size-fix">                                
                            <div class="card">
                                <div class="holder">
                                    <div class="card-header">
                                        <img src="images/Logo.png" alt="logo" class="img-fluid">
                                    </div>
                                    <div class="card-body text-center">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group ">
                                                <div>
                                                    <input type="text" id="username" class="form-control  @error('username') is-invalid @enderror" name="username" placeholder="Enter your user name"   data-target="Enter your user name" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> 
                                                <div>
                                                    <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" required placeholder="Password" data-target="Password" utocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class=" d-flex  align-items-center m-0" style="margin-right:1rem;height:2rem">
                                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-right: 2rem; margin-bottom:0;">
                                                    <label class="m-0" for="remember" style="font-size: 1.1rem">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary d-block w-100 "> login </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>     
                            <div class="regster-requst my-3  text-center">
                                <div class="holder">
                                    <span>Don't have an account?</span><a href="regester.html">Register</a>
                                </div>
                            </div>
                            <div class="download my-3 text-center">
                                <span class="my-3 d-block"> Get The Application</span>
                                <div class="holder row">
                                    <div class="col">
                                        <img src="images/apple.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col">
                                        <img src="images/play.png " alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
