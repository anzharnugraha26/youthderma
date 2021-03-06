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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Youthderma Loggin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{asset('image/logo/logo3.png')}}" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
					{{-- <div>
					<img src="{{asset('image/logo/logo.png')}}" height="33px" width="200px"> --}}
					<span class="login100-form-title p-b-43">
						<img src="{{asset('image/logo/logo.png')}}" height="33px" width="200px">
					</span>
					<span class="login100-form-title p-b-43">
						Login To Continue
					</span>
					{{-- </div> --}}
					
					<div class="wrap-input100 validate-input">
						
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
                        
					</div>
					<div>
						@error('email')
                            <span role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					
					
					<div class="wrap-input100 validate-input" >
                        <input  type="password" class=input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
                       
					</div>
					<div>
						@error('password')
						<span  role="alert">
							<strong style="color: red">{{ $message }}</strong>
						</span>
					@enderror
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox" style="margin-left: 20px">
                            {{-- <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}

                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							{{-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> --}}
							<label>
								Remember me
							</label>
						</div>

						<div>
							<a href="{{ route('password.request') }}" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="container-login100-form-btn" >
						<a href="{{url("/auth/google")}}" class="login100-form-btn" >
							<i class="fa fa-google" aria-hidden="true"></i>  | Login With Google
						</a>
					</div>

					<div class="container-login100-form-btn" style="margin-top: 40px">
						<a href="{{url("/register")}}" class="login100-form-btn" >
							 Register
						</a>
					</div>

					{{-- <div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>
					</div> --}}
				</form>

				<div class="login100-more" style="background-image: url('{{asset('loggin/images/bg-01.jpg')}}');">
				</div>
			</div>
		</div>
	</div>
	
	
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@if(Session::has('chart'))
	<script>
		Swal.fire(
		'Anda Belum Login ?',
		'Silahkan Login Atau Register untuk Melanjutkan ?',
		'question'
		)
	</script>
	@endif
		
	
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loggin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('loggin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/js/main.js')}}"></script>

</body>
</html>