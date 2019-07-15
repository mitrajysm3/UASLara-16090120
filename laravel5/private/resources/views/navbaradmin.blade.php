<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffa500;">
  <a class="navbar-brand" href="{{ url('home')}}">Mitra Buku</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="{{ url('user')}}">Data User<span
			class='fas fa-user-check'></span></a>
			</li>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('buku')}}">Data Buku<span
					class='fas fa-address-book'></span></a>
			</li>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('transaksi')}}">Data Transaksi<span
					class='fas fa-chart-pie'></span></a>
			</li>
		</ul>
			<form class="form-inline my-2 my-lg-0">
				<a class="nav-link" href="{{ url('home')}}">Logout<span
					class='far fa-hand-point-left'></span></a>
			</form>
	</div>
	</a>
	</nav>