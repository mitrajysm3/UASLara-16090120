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
                <img src="{{asset('public/img/akuntansi/sektor.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Akuntansi Sektor Publik </h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu akuntansi pada sektor publik.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp95.000</p>
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
                <img src="{{asset('public/img/akuntansi/pajak.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Akuntansi Perpajakan</h5>
                  <p class="card-text">Buku yang mempelajari tentang ilmu perpajakan pada akuntansi.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp85.000</p>
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
        <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card-desk" style="max-width: 500px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="{{asset('public/img/kesehatan/bidan.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Promosi Kesehatan </h5>
                  <p class="card-text">Buku untuk promosi kesehatan pada mahasiswa kebidanan.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp135.000</p>
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
                <img src="{{asset('public/img/kesehatan/tubuh.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Sinyal Bahaya Tubuh</h5>
                  <p class="card-text">Buku yang mempelajari sinyal bahaya tubuh.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp125.000</p>
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
                <img src="{{asset('public/img/computer/kenal.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Pengenalan Komputer</h5>
                  <p class="card-text">Buku yang mempelajari tentang pengenalan komputer.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp60.000</p>
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
                <img src="{{asset('public/img/computer/siskom.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Dasar Sistem Komputer</h5>
                  <p class="card-text">Buku yang mempelajari tentang dasar sistem komputer.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp75.000</p>
                  <a href="home" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a>
                  <a href="transaksibuku" class="btn btn-success" style="">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>

                <br>
                <br>
                <nav aria-label="..." >
                      <ul class="pagination justify-content-center">
                        <li class="page-item active" aria-current="page" >
                          <span class="page-link">
                            1
                            <span class="sr-only">(current)</span>
                          </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                      </ul>
                    </nav>
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