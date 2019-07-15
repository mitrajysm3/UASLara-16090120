@extends('template')

@section('main')
	    <div class="text-center" style="color: black; background-image:url({{asset('public/img/salju2.jpg')}})">
    	<br>
    	<br>
    	<br>
        <h1>Mitra Buku</h1>
        <p>Salah satu situs website sederhana karya mahasiswa dalam menjual buku secara online.</p>
    	<br>
    	<br>
    	<br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/1.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Bob Sadino </h5>
                  <p class="card-text">Buku 33 cara kaya ala bob sadino dalam berbisnis.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp150.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/2.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Jack Ma</h5>
                  <p class="card-text">Buku 45 trik kaya ala jack ma dalam berbisnis.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp175.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/4.png')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Funtastic Service</h5>
                  <p class="card-text">Buku yang mempelajari tentang pelayanan yang menyenangkan.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp180.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/5.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Satu Keluarga Satu Pengusaha</h5>
                  <p class="card-text">Buku yang mempelajari tentang usaha dalam satu keluarga.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp150.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/7.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">8 Kunci Sukses Entepreneur</h5>
                  <p class="card-text">Buku yang mempelajari tentang kunci suskes entepreneur sejati.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp175.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/motivasi/4.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Bob Sadino</h5>
                  <p class="card-text">Buku 36 langkah sukses membuat bisnis ala bob sadino.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp135.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
                
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Buku ini adalah 
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')

@stop