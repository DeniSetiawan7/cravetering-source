@extends('app')
@section('title') Sign Up | Cravetering @stop
@section('content')
	
	<div class="container mt-5">
		<div class="text-center"><a href="/" class="text-danger"><img src="/images/logo-font.png" height="50px"></a></div>
		<br><br><br>
		<div class="row">
			<div class="col-lg-6">
				<img src="/images/logo.png" width="360px" height="360px" class="mx-auto d-block" alt="cratering logo">
				<div class="text-center">
					<h4>Penyedia Jasa Katering Online</h4>
					<p class="small">Pertama #1 di Indonesia</p>
				</div>
			</div>
			<div class="col-lg-5">
				<ul class="shadow-sm list-group">
					<li class="list-group-item pl-5 pr-5 pt-3 pb-3">
						<div class="text-center">
							<h5>Daftar Sekarang</h5>
							<p class="small">Sudah punya account cravetering ? <a href="/login" class="text-danger">Login</a></p>
						</div>
						<br>
						<form action="/registering" method="post">
							@csrf
							<div class="form-group">
								<label class="small text-secondary">Username</label>
								<input type="text" name="username" class="form-control form-control-sm" value="{{ old('username') }}" autofocus>

								@if ($errors->has('username'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('username') }}
					                </div>
					              @endif
							</div>

							<div class="form-group">
								<label class="small text-secondary">Email</label>
								<input type="email" name="email" class="form-control form-control-sm" value="{{ old('email') }}">

								@if ($errors->has('email'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('email') }}
					                </div>
					              @endif
							</div>

							<div class="form-group">
								<label class="small text-secondary">Password</label>
								<input type="password" name="password" class="form-control form-control-sm">

								@if ($errors->has('password'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('password') }}
					                </div>
					              @endif
							</div>

							<div class="form-group">
								<label class="small text-secondary">No. Handphone</label>
								<input type="text" name="phone" class="form-control form-control-sm" value="{{ old('phone') }}">

								@if ($errors->has('phone'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('phone') }}
					                </div>
					              @endif
							</div>

							<br>

							<button type="submit" class="btn btn-danger btn-block btn-lg">Sign Up</button>

							<br><br>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>

@stop