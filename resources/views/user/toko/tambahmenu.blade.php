@extends('app')
@section('title') {{ $store->name }} - tambah menu @stop
@section('content')
	
	@include('navbar')

	<div class="container mt-5 mb-5">
		
		<div class="row">
			
			<div class="col-lg-3 mb-3">
				<ul class="list-group">
					<li class="list-group-item p-3 mb-0">

						<div class="row">
							<div class="col-lg-3">
								<img src="{{ $store->user->picture }}" width="50px" height="50px" class="rounded">
							</div>

							<div class="col-lg-8">
								<h6 class="font-weight-bold text-danger mb-0">{{ $store->user->name }}</h6>
								<p class="text-secondary font-weight-light small">joined : 13 sep 2018</p>
							</div>
						</div>
						<br>
						<p class="text-dark font-weight-bold small"><span class="fas fa-coins"></span> Rp. 75.000</p>
						<a href="" class="btn btn-danger btn-block btn-sm small">Aktivasi crave wallet</a>
						<a href="" class="btn btn-light btn-block btn-sm small">top up saldo</a>

						<br>
						<hr>
						<br>

						<div class="row">
							<div class="col-lg-3">
								<img src="{{ $store->logo }}" width="50px" height="50px" class="rounded border border-danger p-1">
							</div>

							<div class="col-lg-8">
								<h6 class="font-weight-bold text-danger mb-0">{{ $store->name }}</h6>
								<p class="text-secondary font-weight-light small">buka : 13 sep 2018</p>
							</div>
						</div>
						<br>
						<a href="" class="btn btn-danger btn-block btn-sm small">Upgrade to Gold Store</a>
						<a href="" class="btn btn-light btn-block btn-sm small">Edit Store Profile</a>

						<br>
						<hr>

						<h6 class="text-uppercase font-weight-bold small">NOTIFACTION &nbsp; &nbsp; &nbsp;<a data-toggle="collapse" href="#profilesaya" role="button" aria-expanded="true" aria-controls="profilesaya" class="float-right text-secondary"><span class="fas fa-chevron-down"></span></a></h6>

						<div class="collapse show" id="profilesaya">
					      	<div class="small font-weight-light text-black-50">
					      		<a href="" class="text-secondary">Pesan masuk</a> &nbsp; &nbsp; &nbsp;<span class="badge badge-danger badge-pill small">0</span><br>
						      	<a href="" class="text-secondary">Diskusi masuk</a><br>
						      	<a href="" class="text-secondary">Ulasan masuk</a>
					      	</div>
					    </div>

					</li>
				</ul>
			</div>

			<div class="col-lg-9">
				<form>
					
					<ul class="list-group mb-2">
						<li class="list-group-item p-4">
							<h6 class="text-dark font-weight-bold">Apa yang anda buat</h6>
							<hr>
							<div class="row">
								<div class="col-lg-6">
									<div class="forum-group">
										<label class="small text-secondary">Nama Menu Makanan &nbsp;<span class="fas fa-info-circle"></span></label>
										<input type="text" name="menu_name" class="form-control">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="forum-group">
										<label class="small text-secondary">Kategory Makanan &nbsp;<span class="fas fa-info-circle"></span></label>
										<select name="menu_category" class="form-control">
											<option>--</option>
											<option>Appetizer</option>
											<option>Main Course</option>
											<option>Dessert</option>
										</select>
									</div>
								</div>
							</div>
						</li>

						<li class="list-group-item">
							<h6 class="text-dark font-weight-bold">Gambar Menu Makanan</h6>
							<p class="text-secondary font-weight-light small">Masukan gambar makanan, untuk saat ini hanya dapat 1 gambar saja.</p>
							<label for="attach-project-file" id="lbl-upload">
							  <i id="remove-project-file" class="close">x</i>
							  <div class="filename" id="attached-project-file">Click to select a file</div>
							</label>
							<input id="attach-project-file" type="file" name="menu_picture">
						</li>

						<li class="list-group-item">
							<div class="row">
								<div class="col-lg-6">
									<h6 class="text-dark font-weight-bold">Description Tentang Makanan</h6>
									<p class="text-secondary font-weight-light small">Masukan keterangan makanan semenarik mungkin.</p>
									<textarea class="form-control" cols="5" rows="5" name="menu_description"></textarea>
								</div>

								<div class="col-lg-6">
									<h6 class="text-dark font-weight-bold">Jangka Waktu Tersedia Makanan</h6>
									<p class="text-secondary font-weight-light small">masukan tanggal tersedianya menu makanan anda.</p>
									<hr class="mb-1">
									<div class="forum-group">
										<label class="small text-secondary">Start Date &nbsp;<span class="fas fa-info-circle"></span></label>
										<input type="date" name="menu_date_start" class="form-control form-control-sm">
									</div>
									<div class="forum-group">
										<label class="small text-secondary">End Date &nbsp;<span class="fas fa-info-circle"></span></label>
										<input type="date" name="menu_date_end" class="form-control form-control-sm">
									</div>
								</div>
						</li>

						<li class="list-group-item">
							<h6 class="text-dark font-weight-bold">Detail Menu</h6>
							<p class="text-secondary font-weight-light small">Tambahkan detail harga, minimum jumlah order, dan lainnya.</p>
							<div class="row">
								<div class="col-lg-6">
									<label class="small text-secondary">Harga Makanan&nbsp;<span class="fas fa-info-circle"></span></label>
									<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">Rp.</span>
									  </div>
									  <input type="number" class="form-control" placeholder="12.000" aria-describedby="basic-addon1">
									</div>
								</div>

								<div class="col-lg-4">
									<label class="small text-secondary">Minimum Jumlah Order &nbsp;<span class="fas fa-info-circle"></span></label>
									<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">Min : 5</span>
									  </div>
									  <input type="number" class="form-control" min="5" aria-describedby="basic-addon1">
									</div>
								</div>

								<div class="col-lg-2 mb-1">
									<label class="small text-secondary">Status &nbsp;<span class="fas fa-info-circle"></span></label>
									<div class="input-group">
										<label class="switch">
										  <input type="checkbox" name="menu_status" id="checkAvailable">
										  <span class="slider"></span>
										</label>
										<p class="small text-secondary font-weight-light mt-1"><span id="isAvailable"></span></p>
									</div>
								</div>
							</div>
						</li>

					</ul>

					<ul class="list-group">
						<li class="list-group-item p-3">
							<div class="row">
								<div class="col-lg-10">
									<h6 class="font-weight-bold small mt-2">Periksa kembali data menu makanan anda.</h6>
								</div>

								<div class="col-lg-2">
									<button type="submit" class="btn btn-danger btn-sm btn-block">Selesai</button>
								</div>
							</div>
						</li>
					</ul>

				</form>
			</div>

		</div>

	</div>

@stop