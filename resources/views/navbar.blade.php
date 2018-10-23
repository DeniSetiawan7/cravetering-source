<nav class="shadow-sm navbar navbar-expand-sm cravecolor-bg-grey navbar-light">
  <div class="container-fluid">
  	<a class="navbar-brand cravecolor-f-darkgrey" href="/">
	    <img src="/images/logo-font.png" height="35px">
	</a>

	<!-- navbar toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburgerMenu" aria-controls="hamburgerMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon nav-light"></span>
    </button>

    <div class="collapse navbar-collapse" id="hamburgerMenu">

    	<ul class="navbar-nav ml-auto">
    		<div class="input-group">
			  <input type="text" class="form-control form-control-sm search-style" placeholder="cari menu atau catering store" style="width: 1300px;">
			  <div class="input-group-append">
			    <button class="btn btn-danger btn-sm" type="button"><span class="fas fa-search"></span> Search</button>
			  </div>
			</div>
    	</ul>

		<ul class="navbar-nav ml-auto">

			@auth
			<a href="#" class="btn btn-default btn-block text-secondary mt-0 mb-0"><span class="fas fa-shopping-cart"></span> <span class="badge badge-danger badge-pill small">0</span></a>
			<a href="/createstore" target="_blank" class="btn btn-default btn-block text-secondary mt-0 mb-0 mr-3"><span class="fas fa-store"></span> <span class="small font-weight-bold">Toko</span></a>
			<a href="#" class="btn btn-default btn-block p-0 mt-0 mb-0 mr-3"><img class="rounded" src="{{ Auth::user()->picture }}" width="35px" height="35px"></a>
            <div class="dropdown">
                <a class="btn btn-default btn-block" style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a href="/logout" class="dropdown-item small">logout</a>
                </div>
            </div>

			@else

			<li class="nav-link">
			<a href="/register" class="btn btn-default btn-sm text-secondary">Register</a>
			</li>
			<li class="nav-link">
				<a href="/login" class="btn btn-outline-secondary btn-sm">Login</a>
			</li>

			@endauth

		</ul>
	</div>
  </div>
</nav>