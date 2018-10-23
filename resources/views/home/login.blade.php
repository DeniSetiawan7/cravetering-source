@extends('app')
@section('title') Sign In | Cravetering @stop
@section('content')
	
	<div class="container mt-5">
		<div class="text-center"><a href="/" class="text-danger"><img src="/images/logo-font.png" height="50px"></a></div>
		<br><br><br>
		<div class="row">
			<div class="col-lg-6">
				<img src="/images/logo.png" width="360px" height="360px" class="mx-auto d-block" alt="cratering logo">
				<div class="text-center">
					<h4>Welcome to Cravetering</h4>
					<p class="small">Sign in to start your food journey</p>
				</div>
			</div>
			<div class="col-lg-5">
				<ul class="shadow-sm list-group">
					<li class="list-group-item pl-5 pr-5 pt-3 pb-3">
						<div class="text-center">
							<h5>Login</h5>
							<p class="small">Belum punya account cravetering ? <a href="/register" class="text-danger">Register</a></p>
						</div>
						<br>
						<form action="/signin" method="post">
							@csrf
							<div class="form-group">
								<label class="small text-secondary">Email</label>
								<input type="email" name="email" class="form-control form-control-sm" autofocus>

								@if ($errors->has('email'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('email') }}
					                </div>
					              @endif
							</div>

							<br>

							<div class="form-group">
								<label class="small text-secondary">password</label>
								<input type="password" name="password" class="form-control form-control-sm">

								@if ($errors->has('password'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('password') }}
					                </div>
					              @endif
							</div>

							<br>

							<div class="form-group">
								<div class="custom-control custom-checkbox">
								    <input type="checkbox" class="custom-control-input" name="remember_me" id="customControlValidation1">
								    <label class="custom-control-label small" for="customControlValidation1">Remember me</label>
								</div>
							</div>

							<button type="submit" class="btn btn-danger btn-block btn-lg">Login</button>

							<br><br>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>

@stop