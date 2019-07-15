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
                <img src="{{asset('public/img/travel/1.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Travelling is Possible </h5>
                  <p class="card-text">Buku tentang kisah 101 inspirasi perjalanan wisata.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp110.000</p>
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
                <img src="{{asset('public/img/travel/2.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Menghirup Dunia</h5>
                  <p class="card-text">Buku tentang kisah perjalanan wisata keliling dunia.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp50.000</p>
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
                <img src="{{asset('public/img/travel/3.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Travelling Aja Dulu</h5>
                  <p class="card-text">Buku tentang melakukan perjalanan wisata dengan banyak hal .</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp80.000</p>
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
                <img src="{{asset('public/img/travel/7.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">101 Travel Indonesia</h5>
                  <p class="card-text">Buku tentang kisah 101 tips & cerita travel keliling Indonesia.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp120.000</p>
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
                <img src="{{asset('public/img/travel/5.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Travellers Kambodja</h5>
                  <p class="card-text">Buku tentang perjalanan wisata para travellers di kambodja.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp65.000</p>
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
                <img src="{{asset('public/img/travel/6.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Hanoi Vietnam</h5>
                  <p class="card-text">Buku tentang cara mudah melakukan wisata ke hanoi vietnam.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp45.000</p>
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