<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FF4500;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
	aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Togglenavigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ url('home')}}">Mitra Buku</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('akuntansi')}}">Akuntansi</a>
          <a class="dropdown-item" href="{{ url('computer')}}">Computer</a>
          <a class="dropdown-item" href="{{ url('kesehatan')}}">Kesehatan</a>
          <a class="dropdown-item" href="{{ url('motivasi')}}">Motivasi</a>
          <a class="dropdown-item" href="{{ url('biografi')}}">Biografi</a>
          <a class="dropdown-item" href="{{ url('travel')}}">Travelling</a>
          <a class="dropdown-item" href="{{ url('informatika')}}">Informatika</a>
        </div>
      </li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('transaksibuku')}}">Keranjang <span
				class='fas fa-cart-plus'></span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('homeadmin')}}">Login<span
					class='far fa-hand-point-right'></span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
			<button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
		</form>
	</div>
	</a>
	</nav>