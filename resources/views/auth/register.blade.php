@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-form">
        <div class="login">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-9 m-auto">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-10 col-md-6 m-auto fix-size">                                
                            <div class="card">
                                <div class="holder">
                                    <div class="card-header">
                                        <img src="images/Logo.png" alt="logo" class="img-fluid">
                                    </div>
                                    <div class="card-body text-center">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group"> 
                                                <div>
                                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" value="{{ old('name') }}" required  data-target="Enter your name" autocomplete="name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter your user name" value="{{ old('username') }}" required  data-target="Enter your user name" autocomplete="username">
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-target="Enter your user email"  placeholder="Enter your user email" >
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" data-target="Password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" data-target="Confirm Password">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary d-block w-100">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                            <a href="#" class="btn btn-link my-3">Forgot Your Password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>     
                            <div class="regster-requst my-3  text-center">
                                <div class="holder">
                                    <span>Aready have an account?</span><a href="{{route('login')}}">login</a>
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
