@extends('templateadmin')

@section('main')

<div id="halamanadmin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 25rem;">
                    <h5 class="card-header" style="text-align: center;">Tambah Kategori Buku</h5>
                     <div class="container">
                     <br>
                        <form>
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label >Kategori Id</label>
                                <input type="text" name="kategori_id" class="form-control" id="inputUsername" aria-describedby="Username" placeholder="Id Kategori">
                            </div>
                            <div class="form-group">
                                <label >Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" id="inputEmail" aria-describedby="Email" placeholder="Nama Kategori">
                            </div>
                            <div class="text-center">
                            <a type="submit" class="btn btn-success">Tambah Kategori</a> 
                            </div>
                        </form>
                        
                        <br>
                    </div>
                </div>
            </div>
              <div class="col-sm-8">
                <div class="card" style="width: 25rem;">
                    <h5 class="card-header" tyle="text-align: center;">Tambah Buku Baru</h5>
                     <div class="container">
                     <br>
                        <form action="{{ route('pages.store2') }}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputState">Kategori Buku</label>
                                <input type="text" name="category_id" class="form-control" id="inputcategory" aria-describedby="Nama buku" placeholder="category">
                            </div>
                            <div class="form-group">
                                <label >Nama Buku</label>
                                <input type="text" name="nama_buku" class="form-control" id="inputNamabuku" aria-describedby="Nama buku" placeholder="Nama buku">
                            </div>
                            <div class="form-group">
                                <label >Penulis</label>
                                <input type="text" name="penulis" class="form-control" id="inputPenulis" aria-describedby="Penulis" placeholder="Penulis">
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail" class="form-control" aria-label="textarea"></textarea>
                              </div>
                              
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                      </div>
                      
                    </form>
                    <br>
                  </div>
                </div>
                
                

@stop

@section('footer')

@stop