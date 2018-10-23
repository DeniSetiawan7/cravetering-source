@extends('app')
@section('title') Cravetering - Homepage @stop
@section('content')
	
	@include('navbar')

		@auth
		<div class="container mt-4">

		<div class="row mb-3">

			<div class="col-lg-2">
				<ul class="list-group">
					<li class="list-group-item pt-3 pb-3 pl-1 pr-1">
						<div class="text-center">
							<img src="{{ Auth::user()->picture }}" width="80px" height="80px" class="rounded mb-3">
							<h6 class="text-danger font-weight-light">{{ Auth::user()->name }}</h6>
							<p class="text-dark font-weight-bold small"><span class="fas fa-coins"></span> Rp. 75.000</p>
							<br>
						</div>
					</li>

					<li class="list-group-item text-center">
						@if (Auth::user()->hasToko)

							@if(Auth::user()->store->status == false)
								<h6 class="text-secondary"><span class="small">Verifikasi Toko</span></h6>
								<a href="/createstore" target="_blank" class="btn btn-danger btn-block btn-sm text-light"><span class="small">verifikasi</span></a>
								<br>
							@else
								<h6 class="text-secondary"><span class="small">Masuk Toko</span></h6>
								<a href="/createstore" target="_blank" class="btn btn-danger btn-block btn-sm text-light"><span class="small">Toko</span></a>
								<a href="/store/{{ Auth::user()->store->domain }}/tambahmenu" target="_blank" class="btn btn-danger btn-block btn-sm text-light"><span class="small">Add Menu</span></a>
								<br>
							@endif

						@else

							<h6 class="text-secondary"><span class="small">Belum Punya Toko</span></h6>
							<a href="/createstore" target="_blank" class="btn btn-danger btn-block btn-sm text-light"><span class="small">buka toko</span></a>
							<br>

						@endif
					</li>
					<li class="list-group-item text-left">
						<h6 class="text-uppercase font-weight-bold small">Notification <a data-toggle="collapse" href="#profilesaya" role="button" aria-expanded="true" aria-controls="profilesaya" class="text-dark float-right"><span class="fas fa-chevron-down"></span></a></h6>

						<div class="collapse show" id="profilesaya">
					      	<div class="small">
					      		<a href="" class="text-secondary">Chat <span class="badge badge-danger badge small float-right">0</span></a><br>
						      	<a href="" class="text-secondary">Diskusi</a><br>
						      	<a href="" class="text-secondary">Ulasan</a>
					      	</div>
					    </div>
					    <br>
					</li>

					<li class="list-group-item text-left">
						<h6 class="text-uppercase font-weight-bold small">Profile Saya <a data-toggle="collapse" href="#profilesaya" role="button" aria-expanded="true" aria-controls="profilesaya" class="text-dark float-right"><span class="fas fa-chevron-down"></span></a></h6>

						<div class="collapse show" id="profilesaya">
					      	<div class="small">
					      		<a href="" class="text-secondary">cara buat toko</a><br>
						      	<a href="" class="text-secondary">pengaturan</a><br>
						      	<a href="/logout" class="text-danger">keluar</a>
					      	</div>
					    </div>
					    <br>
					</li>

				</ul>
			</div>

			<div class="col-lg-10">
				
 				<!-- promo banner -->
				<div class="row mb-3">

					<div class="col-lg-6 mb-3">
						<h6 class="text-dark font-weight-bold">Promo Saat Ini <span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
						<ul class="list-group">
							<li class="list-group-item p-0">
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-1.png" alt="First slide">
								    </div>
								    <div class="carousel-item">
								      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-2.jpg" alt="Second slide">
								    </div>
								    <div class="carousel-item">
								      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-3.jpg" alt="Third slide">
								    </div>
								  </div>
								  <a class="carousel-control-prev text-white" href="#carouselExampleControls" role="button" data-slide="prev">
								    <h3 aria-hidden="false"><span class="fas fa-chevron-left"></span></h3>
								  </a>
								  <a class="carousel-control-next text-white" href="#carouselExampleControls" role="button" data-slide="next">
								    <h3 aria-hidden="false"><span class="fas fa-chevron-right"></span></h3>
								  </a>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-lg-6">
						<h6 class="text-dark font-weight-bold">Payment & Top Up Saldo <span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
						<ul class="list-group border border-secondary rounded">
							<li class="list-group-item p-0">
								<nav>
								  <div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link text-danger small" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Top Up Saldo</a>
								    <a class="nav-item nav-link text-danger small" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Find Kupon</a>
								    <a class="nav-item nav-link text-danger small" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Code Promo</a>
								  </div>
								</nav>
							</li>

							<li class="list-group-item pt-2 pb-1">
								<div class="tab-content" id="nav-tabContent">
								  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								  	<form>
									  <div class="form-row">
									  	
									  	<div class="form-group col-lg-4">
									  		<label class="small text-secondary">Email</label>
									        <input type="email" class="form-control form-control-sm" id="email-input-tujuan">
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
									        <select class="form-control form-control-sm">
									        	<option>Rp. 20.000</option>
									        	<option>Rp. 50.000</option>
									        	<option>Rp. 75.000</option>
									        	<option>Rp. 100.000</option>
									        	<option>Rp. 200.000</option>
									        	<option>Rp. 500.000</option>
									        </select>
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<div class="text-center">
									  			<label class="small">check out</label>
									  		</div>
									  		
									  		<button type="submit" class="btn btn-danger btn-sm btn-block"><span class="fas fa-sign-in-alt"></span> bayar</button>
									  	</div>

									  </div>
									  <p class="text-secondary small">konfirmasi pembayaran ke email : <span class="font-weight-bold text-dark" id="email-tujuan"></span></p>
									</form>
								  </div>
								  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								  	<form>
									  <div class="form-row">
									  	
									  	<div class="form-group col-lg-4">
									  		<label for="inputEmail4" class="small text-secondary">Email</label>
									        <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="email">
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
									        <input type="number" class="form-control form-control-sm" id="inputEmail4" placeholder="jumlah">
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<div class="text-center">
									  			<label class="small">check out</label>
									  		</div>
									  		
									  		<button type="submit" class="btn btn-danger btn-sm btn-block">bayar</button>
									  	</div>

									  </div>
									</form>
								  </div>
								  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
								  	<form>
									  <div class="form-row">
									  	
									  	<div class="form-group col-lg-4">
									  		<label for="inputEmail4" class="small text-secondary">Email</label>
									        <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="email">
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
									        <input type="number" class="form-control form-control-sm" id="inputEmail4" placeholder="jumlah">
									  	</div>

									  	<div class="form-group col-lg-4">
									  		<div class="text-center">
									  			<label class="small">check out</label>
									  		</div>
									  		
									  		<button type="submit" class="btn btn-danger btn-sm btn-block">bayar</button>
									  	</div>

									  </div>
									</form>
								  </div>
								</div>
							</li>
						</ul>
					</div>

				</div>

				<div class="row mb-3">
					<div class="col-lg-12">
						<h6 class="text-dark font-weight-bold">Best Menu on <span class="text-danger">October 2018</span><span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
						<hr>

						<div class="card-deck">
							<div class="card card-hover">
							    <img class="card-img-top" height="150px" src="/images/example/1.jpg" style="background-size: cover;" alt="Card image cap">
							    <div class="card-body">
							      <h6 class="card-title font-weight-light text-secondary mb-0">Menu Catering 1</h6>
							      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
							      <div class="small">
							      	<div class="toko1">
							      		<div class="stars-outer">
								      		<div class="stars-inner"></div>
								      	</div>
							      	</div>
							      </div>
							      <hr>
							      <p class="card-text"><small class="text-muted">by <span class="text-dark">Cravetering</span></small></p>
							    </div>
							  </div>

							  <div class="card card-hover">
							    <img class="card-img-top" height="150px" src="/images/example/2.jpg" style="background-size: cover;" alt="Card image cap">
							    <div class="card-body">
							      <h6 class="card-title font-weight-light text-secondary  mb-0">Menu Tipe 1</h6>
							      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
							      <div class="small">
							      	<div class="toko2">
							      		<div class="stars-outer">
								      		<div class="stars-inner"></div>
								      	</div>
							      	</div>
							      </div>
							      <hr>
							      <p class="card-text"><small class="text-muted">by <span class="text-dark">Teh Botol</span></small></p>
							    </div>
							  </div>

							  <div class="card card-hover">
							    <img class="card-img-top" height="150px" src="/images/example/3.jpg" style="background-size: cover;" alt="Card image cap">
							    <div class="card-body">
							      <h6 class="card-title font-weight-light text-secondary  mb-0">Nasi Box Tipe 1</h6>
							      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
							      <div class="small">
							      	<div class="toko3">
							      		<div class="stars-outer">
								      		<div class="stars-inner"></div>
								      	</div>
							      	</div>
							      </div>
							      <hr>
							      <p class="card-text"><small class="text-muted">by <span class="text-dark">McD</span></small></p>
							    </div>
							  </div>

							  <div class="card card-hover">
							    <img class="card-img-top" height="150px" src="/images/example/5.jpg" style="background-size: cover;" alt="Card image cap">
							    <div class="card-body">
							      <h6 class="card-title font-weight-light text-secondary  mb-0">Menu Tipe 2</h6>
							      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
							      <div class="small">
							      	<div class="toko4">
							      		<div class="stars-outer">
								      		<div class="stars-inner"></div>
								      	</div>
							      	</div>
							      </div>
							      <hr>
							      <p class="card-text"><small class="text-muted">by <span class="text-dark">Hanamasa</span></small></p>
							    </div>
							  </div>
						</div>

					</div>
				</div>

				<br>

				<div class="row mb-3">
					<div class="col-lg-12">
						<h6 class="text-dark font-weight-bold">Official Catering Partner</h6>
						<ul class="list-group">
							<li class="list-group-item p-0">
								
								<div class="row">
									<div class="col-lg-3">
										<img src="/images/os-banner.jpg" width="240" height="250">
									</div>

									<div class="col-lg-9">
										<div class="row p-3 text-center text-secondary small">
											<div class="col-lg">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">Jakarta Catering</li>
													<li class="list-group-item">Akasya Catering</li>
													<li class="list-group-item">Lavina Catering</li>
													<li class="list-group-item">Kinanti Catering</li>
													<li class="list-group-item">Berdikari Catering</li>
												</ul>
											</div>
											<div class="col-lg">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">Alienco Catering</li>
													<li class="list-group-item">IBNU Family Catering</li>
													<li class="list-group-item">Heny's Kitchen</li>
													<li class="list-group-item">Kadinya Catering</li>
													<li class="list-group-item">Vessa Catering</li>
												</ul>
											</div>
											<div class="col-lg">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">Imperia Catering</li>
													<li class="list-group-item">Kiki Catering</li>
													<li class="list-group-item">3Prima Catering</li>
													<li class="list-group-item">D'Lina Catering</li>
													<li class="list-group-item">Pesan Tumpeng</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>

			</div>

			</div>
		</div>
	</div>

	<br>
	@include('footer')

		@else

		<div class="container mt-4">

			<!-- promo banner -->
			<div class="row mb-3">

				<div class="col-lg-6 mb-3">
					<h6 class="text-dark font-weight-bold">Promo Saat Ini <span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
					<ul class="list-group">
						<li class="list-group-item p-0">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-1.png" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-2.jpg" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100 rounded" height="165px" src="/images/example/p-3.jpg" alt="Third slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev text-white" href="#carouselExampleControls" role="button" data-slide="prev">
							    <h3 aria-hidden="false"><span class="fas fa-chevron-left"></span></h3>
							  </a>
							  <a class="carousel-control-next text-white" href="#carouselExampleControls" role="button" data-slide="next">
							    <h3 aria-hidden="false"><span class="fas fa-chevron-right"></span></h3>
							  </a>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-lg-6">
					<h6 class="text-dark font-weight-bold">Payment & Top Up Saldo <span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
					<ul class="list-group rounded">
						<li class="list-group-item p-0">
							<nav>
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <a class="nav-item nav-link text-danger small" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Top Up Saldo</a>
							    <a class="nav-item nav-link text-danger small" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Find Kupon</a>
							    <a class="nav-item nav-link text-danger small" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Code Promo</a>
							  </div>
							</nav>
						</li>

						<li class="list-group-item pt-3 pb-3">
							<div class="tab-content" id="nav-tabContent">
							  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							  	<form>
								  <div class="form-row">
								  	
								  	<div class="form-group col-lg-4">
								  		<label class="small text-secondary">Email</label>
								        <input type="email" class="form-control form-control-sm" id="email-input-tujuan">
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
								        <select class="form-control form-control-sm">
								        	<option>Rp. 20.000</option>
								        	<option>Rp. 50.000</option>
								        	<option>Rp. 75.000</option>
								        	<option>Rp. 100.000</option>
								        	<option>Rp. 200.000</option>
								        	<option>Rp. 500.000</option>
								        </select>
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<div class="text-center">
								  			<label class="small">check out</label>
								  		</div>
								  		
								  		<button type="submit" class="btn btn-danger btn-sm btn-block"><span class="fas fa-sign-in-alt"></span> bayar</button>
								  	</div>

								  </div>
								  <p class="text-secondary small mb-0">konfirmasi pembayaran ke email: <span class="font-weight-bold text-dark" id="email-tujuan"></span></p>
								</form>
							  </div>
							  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							  	<form>
								  <div class="form-row">
								  	
								  	<div class="form-group col-lg-4">
								  		<label for="inputEmail4" class="small text-secondary">Email</label>
								        <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="email">
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
								        <input type="number" class="form-control form-control-sm" id="inputEmail4" placeholder="jumlah">
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<div class="text-center">
								  			<label class="small">check out</label>
								  		</div>
								  		
								  		<button type="submit" class="btn btn-danger btn-sm btn-block">bayar</button>
								  	</div>

								  </div>
								</form>
							  </div>
							  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							  	<form>
								  <div class="form-row">
								  	
								  	<div class="form-group col-lg-4">
								  		<label for="inputEmail4" class="small text-secondary">Email</label>
								        <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="email">
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<label for="inputEmail4" class="small text-secondary">Nominal</label>
								        <input type="number" class="form-control form-control-sm" id="inputEmail4" placeholder="jumlah">
								  	</div>

								  	<div class="form-group col-lg-4">
								  		<div class="text-center">
								  			<label class="small">check out</label>
								  		</div>
								  		
								  		<button type="submit" class="btn btn-danger btn-sm btn-block">bayar</button>
								  	</div>

								  </div>
								</form>
							  </div>
							</div>
						</li>
					</ul>
				</div>

			</div>

			<div class="row mb-3">
				<div class="col-lg-12">
					<h6 class="text-dark font-weight-bold">Best Menu on <span class="text-danger">October 2018</span><span class="float-right small"><a href="" class="text-danger">Lihat Semua</a></span></h6>
					<hr>

					<div class="card-deck">
								<div class="card card-hover">
								    <img class="card-img-top" height="150px" src="/images/example/1.jpg" alt="Card image cap">
								    <div class="card-body">
								      <h6 class="card-title font-weight-light text-secondary mb-0">Menu Catering 1</h6>
								      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
								      <div class="small">
								      	<div class="toko1">
								      		<div class="stars-outer">
									      		<div class="stars-inner"></div>
									      	</div>
								      	</div>
								      </div>
								      <hr>
								      <p class="card-text"><small class="text-muted">by <span class="text-dark">toko 1</span></small></p>
								    </div>
								  </div>

								  <div class="card card-hover">
								    <img class="card-img-top" height="150px" src="/images/example/2.jpg" alt="Card image cap">
								    <div class="card-body">
								      <h6 class="card-title font-weight-light text-secondary  mb-0">Menu Tipe 1</h6>
								      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
								      <div class="small">
								      	<div class="toko2">
								      		<div class="stars-outer">
									      		<div class="stars-inner"></div>
									      	</div>
								      	</div>
								      </div>
								      <hr>
								      <p class="card-text"><small class="text-muted">by <span class="text-dark">toko 2</span></small></p>
								    </div>
								  </div>

								  <div class="card card-hover">
								    <img class="card-img-top" height="150px" src="/images/example/3.jpg" alt="Card image cap">
								    <div class="card-body">
								      <h6 class="card-title font-weight-light text-secondary  mb-0">Nasi Box Tipe 1</h6>
								      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
								      <div class="small">
								      	<div class="toko3">
								      		<div class="stars-outer">
									      		<div class="stars-inner"></div>
									      	</div>
								      	</div>
								      </div>
								      <hr>
								      <p class="card-text"><small class="text-muted">by <span class="text-dark">toko 3</span></small></p>
								    </div>
								  </div>

								  <div class="card card-hover">
								    <img class="card-img-top" height="150px" src="/images/example/5.jpg" alt="Card image cap">
								    <div class="card-body">
								      <h6 class="card-title font-weight-light text-secondary  mb-0">Menu Tipe 2</h6>
								      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
								      <div class="small">
								      	<div class="toko4">
								      		<div class="stars-outer">
									      		<div class="stars-inner"></div>
									      	</div>
								      	</div>
								      </div>
								      <hr>
								      <p class="card-text"><small class="text-muted">by <span class="text-dark">toko 4</span></small></p>
								    </div>
								  </div>

								  <div class="card card-hover">
								    <img class="card-img-top" height="150px" src="/images/example/5.jpg" alt="Card image cap">
								    <div class="card-body">
								      <h6 class="card-title font-weight-light text-secondary  mb-0">Menu Tipe 4</h6>
								      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 110.000</span></p>
								      <div class="small">
								      	<div class="toko5">
								      		<div class="stars-outer">
									      		<div class="stars-inner"></div>
									      	</div>
								      	</div>
								      </div>
								      <hr>
								      <p class="card-text"><small class="text-muted">by <span class="text-dark">toko 4</span></small></p>
								    </div>
								  </div>
							</div>

				</div>
			</div>

			<br>

			<div class="row mb-3">
				<div class="col-lg-12">
					<h6 class="text-dark font-weight-bold">Official Catering Partner</h6>
					<ul class="list-group">
						<li class="list-group-item p-0">
							
							<div class="row">
								<div class="col-lg-3">
									<img src="/images/os-banner.jpg">
								</div>

								<div class="col-lg-9">
									<div class="row p-3 text-center text-secondary small">
										<div class="col-lg">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">Jakarta Catering</li>
												<li class="list-group-item">Akasya Catering</li>
												<li class="list-group-item">Lavina Catering</li>
												<li class="list-group-item">Kinanti Catering</li>
												<li class="list-group-item">Berdikari Catering</li>
											</ul>
										</div>
										<div class="col-lg">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">Alienco Catering</li>
												<li class="list-group-item">IBNU Family Catering</li>
												<li class="list-group-item">Heny's Kitchen</li>
												<li class="list-group-item">Kadinya Catering</li>
												<li class="list-group-item">Vessa Catering</li>
											</ul>
										</div>
										<div class="col-lg">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">Imperia Catering</li>
												<li class="list-group-item">Kiki Catering</li>
												<li class="list-group-item">3Prima Catering</li>
												<li class="list-group-item">D'Lina Catering</li>
												<li class="list-group-item">Pesan Tumpeng</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</li>
					</ul>
				</div>
			</div>

			<br>

			<div class="row mb-3 p-3">
				<div class="col-lg-6 text-center">
					<img src="/images/logo.png"  width="400px" height="400px" title="Logo by Valencia">
				</div>

				<div class="col-lg-6 mt-5">
					<h5 class="text-danger font-weight-bold">Punya Usaha Catering ? Buka aja di Cravetering ...</h5>
					<p class="m-0 text-secondary small">Easy to use, Aman, dan Transparan</p>
					<a href="#" class="btn btn-danger btn-sm mt-2">Buka Sekarang</a>
					<hr>
					<h5 class="text-danger font-weight-bold">Kenapa Memakai Cravetering ? hayo kenapa ...</h5>
					<p class="text-secondary small">Bisa menikmati berbagai macam catering tanpa perlu menjadi pelanggan (langganan)</p>
					<p class="text-secondary small">lebih hemat lebih praktis bisa makan bersama kerabat, saudara, teman, keluarga (kan kyk sekali pesen 10 box)</p>
					<p class="text-dark small"><strong>- Wijoyo Sugianto</strong> | ketua cravetring</p>
				</div>
			</div>

		</div>
	</div>

		@include('footer')

		@endauth

@stop

@section('js')

<script type="text/javascript">
	
	// rating stars mehod
const ratings = {
	toko1: 4.7,
	toko2: 4.2,
	toko3: 3.9,
	toko4: 3.5,
	toko5: 4.5
}

// Total stars
const starsTotal = 5;

// Run getRatings when DOM loaded
document.addEventListener('DOMContentLoaded', getRatings);

// get ratings
function getRatings() {
	for (let rating in ratings) {
		// calculate percentage
		const starPercentage = (ratings[rating] / starsTotal) * 100;
		// Round to nearest 10
		const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
		// Set width of stars inner to percentage
		document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;
	}
}
	
</script>

<script>
/* EMAIL TUJUAN */
var email = document.querySelector('#email-input-tujuan');
var emailSet = document.querySelector('#email-tujuan');

function emailInfoChange() {
	var getEmail = email.value;
	emailSet.innerHTML = getEmail;
}

email.addEventListener('keyup', emailInfoChange);
</script>

@stop