<nav class="navbarlogin navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
	aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Togglenavigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ url('home')}}">Mitra Buku</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="{{ url('user')}}">Data User<span
		class="sr-only">(current)</span></a>
			</li>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('buku')}}">Data Buku</a>
			</li>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('transaksi')}}">Data Transaksi</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
	</a>
	</nav>