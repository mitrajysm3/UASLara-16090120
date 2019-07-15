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
                <img src="{{asset('public/img/biografi/1.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Jack Ma Alibaba.com </h5>
                  <p class="card-text">Buku biografi tentang Jack Ma dalam memulai bisnis Alibaba.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp100.000</p>
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
                <img src="{{asset('public/img/biografi/2.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Mark Zuckerberg</h5>
                  <p class="card-text">Buku biografi tentang Mark Zuckerberg dalam membuat facebook.</p>
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
                <img src="{{asset('public/img/biografi/3.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Mr.Crack dari Parepare</h5>
                  <p class="card-text">Buku biografi tentang Bj.Habibie yang dikenal sebagai Mr.Crack .</p>
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
                <img src="{{asset('public/img/biografi/4.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Tri Rismaharini</h5>
                  <p class="card-text">Buku biografi tentang kisah perjuangan ibu risma dari surabaya.</p>
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
                <img src="{{asset('public/img/biografi/7.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Bung Karno</h5>
                  <p class="card-text">Buku biografi tentang Soekarno memperjuangkan Indonesia.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp185.000</p>
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
                <img src="{{asset('public/img/biografi/6.jpg')}}" class="card-img" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Bj.Habibie</h5>
                  <p class="card-text">Buku biografi tentang Bj.Habibie dalam membangun Indonesia.</p>
                  <p class="card-text">Tersedia</p>
                  <p class="card-text">Harga : Rp145.000</p>
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