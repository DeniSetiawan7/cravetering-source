@extends('app')
@section('title') Verifikasi Toko | Cravetering @stop
@section('content')
	
	@include('navbar')

	<div class="container mt-5">
		
		<!-- MultiStep Form -->
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <form id="msform" action="/createstore/final" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Informasi Toko</li>
                        <li>Alamat Toko</li>
                        <li>Payment Gateaway</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset class="pl-5 pr-5 pt-5 rounded border shadow-sm">

                        <div class="text-secondary text-center">
                            <h1 class="text-danger"><span class="fas fa-store"></span></h1>
                            <h6 class="font-weight-bold">Halo, <span class="text-dark">{{ $store->user->name}}</span></h6>
                            <p class="lead">Lengkapi infomasi toko catering anda, agar dapat menarik para customer.</p>
                            <br>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Slogan Toko</label>
                            <input type="text" name="slogan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Description Toko</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Logo Toko</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="logo" id="customFile">
                              <label class="custom-file-label form-control-file" for="customFile"></label>
                            </div>
                        </div>

                        <input type="button" name="next" class="next btn btn-danger btn-block" value="next"/>
                        
                    </fieldset>

                    <fieldset class="pl-5 pr-5 pt-5 rounded border shadow-sm">

                        <div class="text-secondary text-center">
                            <h1 class="text-danger"><span class="fas fa-map-marker-alt"></span></h1>
                            <h6 class="font-weight-bold">Halo, <span class="text-dark">{{ $store->user->name}}</span></h6>
                            <p class="lead">Lengkapi infomasi lokasi alamat toko catering anda <br> agar dapat memudahkan para customer untuk mencari anda.</p>
                            <br>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Lokasi Toko</label>
                            <textarea type="text" name="alamat_toko" class="form-control" cols="3" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Kota</label>
                            <input type="text" name="kota" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Kodepos</label>
                            <input type="number" min="0" name="kodepos" class="form-control">
                        </div>

                        <input type="button" name="next" class="next btn btn-danger btn-block" value="next"/>
                        <input type="button" name="previous" class="previous btn btn-secoondary btn-block" value="Previous"/>
                        
                    </fieldset>

                    <fieldset class="pl-5 pr-5 pt-5 rounded border shadow-sm">

                        <div class="text-secondary text-center">
                            <h1 class="text-danger"><span class="fab fa-cc-visa"></span></h1>
                            <h6 class="font-weight-bold">Halo, <span class="text-dark">{{ $store->user->name}}</span></h6>
                            <p class="lead">Lengkapi infomasi pembayaran anda <br> agar system dapat memproses trasaksi secara otomatis.</p>
                            <br>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Nama Bank</label>
                            <select class="form-control" name="nama_bank">
                              <option value=""></option>
                              <option value="bca">BCA</option>
                              <option value="mandiri">Mandiri</option>
                              <option value="bri">BRI</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">No Rekening Bank</label>
                            <input type="number" min="0" name="no_rekening" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-secondary small">Atas Nama</label>
                            <input type="text" name="nama_pemilik" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-block btn-success">Verifikasi Sekarang</button>
                        <input type="button" name="previous" class="previous btn btn-secoondary btn-block" value="Previous"/>
                        
                    </fieldset>

                </form>
            </div>
        </div>

	</div>

@stop