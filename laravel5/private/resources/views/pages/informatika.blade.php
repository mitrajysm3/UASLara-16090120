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
                <img src="{{asset('public/img/jar.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Teknik Komputer dan Jaringan</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu teknik komputer dan jaringan.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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
                <img src="{{asset('public/img/big.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Big Data</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu cara mengolah data dalam skala besar.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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
                <img src="{{asset('public/img/laravel.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Laravel 5</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu framework laravel 5.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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
                <img src="{{asset('public/img/rpl.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu rekayasa perangkat lunak</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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
                <img src="{{asset('public/img/mining.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Data Mining</h5>
                  <p class="card-text">Buku yang mempelajari tentang cara mengolah data menjadi informasi.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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
                <img src="{{asset('public/img/cloud.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Cloud Computing</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu cloud computing.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
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