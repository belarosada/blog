{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
    <html lang="id">
    <head>
    	<title>Login Page</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="{{url('assets/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="{{url('assets/css/util.css')}}">
    	<link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
    <!--===============================================================================================-->
    </head>
    <body>

    	<div class="limiter">
    		<div class="container-login100">
    			<div class="wrap-login100">
    				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
    					<span class="login100-form-title p-b-26">
    						Welcome
    					</span>
    					<!--<span class="login100-form-title p-b-48">
    						<i class="zmdi zmdi-font"></i>
    					</span>-->

    					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                            <input id="email" type="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
    					</div>

    					<div class="wrap-input100 validate-input" data-validate="Enter password">
    						<!--<span class="btn-show-pass">
    							<i class="zmdi zmdi-eye"></i>
    						</span>-->
                            <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
    					</div>

    					<div class="container-login100-form-btn">
    						<div class="wrap-login100-form-btn">
    							<div class="login100-form-bgbtn"></div>
    							<button class="login100-form-btn">
    								Login
    							</button>
    						</div>
    					</div>

    					<div class="text-center p-t-115">
    						<!--<span class="txt1">
    							Don’t have an account?
    						</span>-->
                            <a class="txt2" href="{{ route('password.request') }}">
    							Forgot Password
    						</a>
                            |
    						<a class="txt2" href="{{ route('register') }}">
    							Register
    						</a>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>


    	<div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/bootstrap/js/popper.js')}}"></script>
    	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    	<script src="{{url('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    	<script src="{{url('assets/js/main.js')}}"></script>

    </body>
    </html>

@endsection
