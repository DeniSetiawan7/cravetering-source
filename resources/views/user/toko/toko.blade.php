@extends('app')
@section('title') {{ $store->name }} - {{ $store->slogan }} @stop
@section('css')
	
	<style type="text/css">
		
		.module {
			position: relative;
		}

		.module > header {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  width: 100%;
		  padding: 20px 10px;
		  background: inherit;
		  background-attachment: fixed;
		  overflow: hidden;
		}
		.module > header::before {
		  content: "";
		  position: absolute;
		  top: -20px;
		  left: 0;
		  width: 200%;
		  height: 200%;
		  background: inherit;
		  background-attachment: fixed;
		  -webkit-filter: blur(4px);
		  filter: blur(4px);
		}
		.module > header::after {
		  content: "";
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  background: rgba(0, 0, 0, 0.7)
		}
		.module > header > h4, p {
		  margin: 0;
		  color: white;
		  position: relative;
		  z-index: 1;
		}

	</style>

@stop
@section('content')
	
	@include('navbar')

	<div class="container mt-3">
		<div class="card mb-5">
			<div class="module">
			  <img class="card-img-top" src="{{ $store->banner }}" height="370px" style="background-size: cover;" alt="Card image cap">
			  <header class="p-4">
			    <h4 class="font-weight-light">
			      {{ $store->name }}
			    </h4>
			    <p class="small">"{{ $store->slogan }}"</p>
			  </header>
			</div>
		  <div class="card-body">
		    <div class="row">
		    	<div class="col-lg-2 text-center">
		    		<img src="{{ $store->logo }}" class="shadow rounded m-0" width="120px" height="120px">
		    	</div>

		    	<div class="col-lg-8">
		    		<h6 class="font-weight-bold"><span class="fas fa-map-marker-alt"></span> {{ $store->kota }} / <span class="fas fa-lock-open"></span> {{ $store->created_at }}</h6>
		    		<p class="font-weight-light text-secondary small">{{ $store->description }}</p>
		    		<hr>
		    		<div class="small mb-2">
		    			<a href="#" class="btn btn-danger btn-sm m-1"><span class="far fa-comments"></span> &nbsp; Chat Penjual</a>
		    			<a href="#" class="btn btn-danger btn-sm m-1"><span class="fas fa-plus"></span> &nbsp; Following</a>
		    			<a href="#" class="btn btn-danger btn-sm m-1"><span class="fas fa-angle-double-down"></span> &nbsp; Statistik Toko</a>
		    			@if($store->user_id == Auth::user()->id)
		    			<a href="#" class="btn btn-info btn-sm m-1 float-right"><span class="fas fa-cog"></span></a>
		    			<a href="/store/{{ $store->domain }}/tambahmenu" class="btn btn-danger btn-sm m-1 float-right"><span class="fas fa-plus"></span> tambah menu</a>
		    			@endif
		    		</div>
		    	</div>

		    	<div class="col-lg-2 text-center">
		    		<ul class="list-group shadow-sm">
		    			<li class="list-group-item">
		    				<div class="h2 mt-3">
				    			4.9 <span class="h6 small">/ 5</span>
				    		</div>
				    		<div class="toko">
					      		<div class="stars-outer">
						      		<div class="stars-inner"></div>
						      	</div>
						      	<p class="small text-dark">3232 ulasan</p>
					      	</div>
		    			</li>
		    		</ul>
		    	</div>
		    </div>
		  </div>
		</div>

		<div class="font-weight-bold text-dark h6">Menu utama bulan ini</div>
		<hr>
		<div class="card-deck mb-5">
		  <div class="card card-hover">
		    <img class="card-img-top" src="http://localhost:8000/images/profile/default_picture.jpg" alt="Card image cap">
		    <div class="card-body tex">
		      <h5 class="card-title text-secondary font-weight-light">Menu 1</h5>
		      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
		      <div class="small">
		      	<div class="toko1">
		      		<div class="stars-outer">
			      		<div class="stars-inner"></div><span class="text-secondary"> (12)</span>
			      	</div>
		      	</div>
		      </div>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Added 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card card-hover">
		    <img class="card-img-top" src="http://localhost:8000/images/profile/default_picture.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-secondary font-weight-light">Menu 1</h5>
		      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
		      <div class="small">
		      	<div class="toko2">
		      		<div class="stars-outer">
			      		<div class="stars-inner"></div><span class="text-secondary"> (12)</span>
			      	</div>
		      	</div>
		      </div>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Added 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card card-hover">
		    <img class="card-img-top" src="http://localhost:8000/images/profile/default_picture.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-secondary font-weight-light">Menu 1</h5>
		      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
		      <div class="small">
		      	<div class="toko3">
		      		<div class="stars-outer">
			      		<div class="stars-inner"></div><span class="text-secondary"> (12)</span>
			      	</div>
		      	</div>
		      </div>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Added 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card card-hover">
		    <img class="card-img-top" src="http://localhost:8000/images/profile/default_picture.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-secondary font-weight-light">Menu 1</h5>
		      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
		      <div class="small">
		      	<div class="toko4">
		      		<div class="stars-outer">
			      		<div class="stars-inner"></div><span class="text-secondary"> (12)</span>
			      	</div>
		      	</div>
		      </div>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Added 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card card-hover">
		    <img class="card-img-top" src="http://localhost:8000/images/profile/default_picture.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-secondary font-weight-light">Menu 1</h5>
		      <p class="card-text"><span class="text-danger font-weight-bold small">Rp 150.000</span></p>
		      <div class="small">
		      	<div class="toko5">
		      		<div class="stars-outer">
			      		<div class="stars-inner"></div><span class="text-secondary"> (12)</span>
			      	</div>
		      	</div>
		      </div>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Added 5 mins ago</small>
		    </div>
		  </div>
		</div>
	</div>

@stop

@section('js')

<script type="text/javascript">
	
	// rating stars mehod
const ratings = {
	toko: 4.7,
	toko1: 1.7,
	toko2: 2.7,
	toko3: 3.7,
	toko4: 4.7,
	toko5: 3.5
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

@stop