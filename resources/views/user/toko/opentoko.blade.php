@extends('app')
@section('title') Buka Toko | Cravetering @stop
@section('content')
	
	@include('navbar')

	<div class="container mt-5">
		<h2 class="text-center"><a href="/" class="text-danger">Create Store</a></h2>
		<br><br><br>
		<div class="row">
			<div class="col-lg-6">
				<img src="/images/logo.png" width="360px" height="360px" class="mx-auto d-block" alt="cratering logo">
				<div class="text-center">
					<h4>Penyedia Jasa Katering Online #1 Indonesia</h4>
					<p class="small">start your journey by making your own catering store</p>
				</div>
			</div>
			<div class="col-lg-5">
				<ul class="shadow-sm list-group">
					<li class="list-group-item pl-5 pr-5 pt-5 pb-2">
						<div class="text-left">
							<h5>Halo, <span class="font-weight-bold">{{ Auth::user()->name }}</span></h5>
							<p class="small">Selamat datang di cravetering, ayo buka toko catering anda sekarang !</p>
						</div>
						<form action="/createstore/init" method="post">
							@csrf
							<div class="form-group">
								<label class="small text-secondary">Nama Catering &nbsp;<span class="fas fa-info-circle"></span></label>
								<input type="text" name="catering_name" placeholder="nama catering" class="form-control" value="{{ old('catering_name') }}" autofocus>

								@if ($errors->has('catering_name'))
					                <div class="text-danger small mb-0">
					                  {{ $errors->first('catering_name') }}
					                </div>
					              @endif
							</div>

							<div class="form-group">
								<label class="small text-secondary">Domain Catering Anda &nbsp;<span class="fas fa-info-circle"></span></label>
								<div class="row">
									<div class="col-lg-6">
										<label class="small text-secondary pt-2">www.cravetering.com/store/</label>
									</div>

									<div class="col-lg-6">
										<input type="text" name="domain_name" id="spacefalse" placeholder="domain catering" class="form-control" value="{{ old('domain_name') }}">
										@if ($errors->has('domain_name'))
							                <div class="text-danger small mb-0">
							                  {{ $errors->first('domain_name') }}
							                </div>
							              @endif
									</div>
								</div>
							</div>

							<br>

							<button type="submit" class="btn btn-danger btn-block btn-lg"><span class="small">Buka Catering Sekarang</span></button>

							<br><br>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>

@stop