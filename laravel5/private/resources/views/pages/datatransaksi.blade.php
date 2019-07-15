@extends ('templateuser')

@section ('main')
<br>
<br>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 25rem;">
                    <h5 class="card-header" style="text-align: center;">Transaksi Baru</h5>
                     <div class="container">
                     <br>
                        <form>
                            <div class="form-group">
                                <label >Nama Buku</label>
                                <input type="name" class="form-control" id="inputNamabuku" aria-describedby="Namabuku" placeholder="Nama buku">
                            </div>
                            <div class="form-group">
                                <label >Jumlah Buku di Beli</label>
                                <input type="name" class="form-control" id="inputJumlah" aria-describedby="Jumlah" placeholder="Jumlah Buku di Beli">
                            </div>
                            <div class="form-group">
                                <label>Alamat Pemesan</label>
                                <input type="name" id="inputAlamat" class="form-control" placeholder="Alamat Pemesan"><br>
                            </div>
						</div>
						<a class="btn btn-primary btn-block" href="transaksi">Simpan</a>
					</form>
					
				</div>
			</div>
			<div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">Data List Transaksi</h5>
                    <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col" >Nama Buku</th>
                            <th scope="col" >Jumlah Buku di Beli</th>
                            <th scope="col" >Alamat Pemesan</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Data Mining</td>
                            <td>1</td>
                            <td>Yogyakarta</td>
                            <td class="text-center">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" href="transaksi">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>Laravel 5</td>
                            <td>2</td>
                            <td>Magelang</td>
                            <td class="text-center">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" href="transaksi">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
		</div>
		
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Buku:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Penulis:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Penerbit:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
        <a type="button" class="btn btn-primary" href="user">Simpan</a>
      </div>
    </div>
  </div>
</div>
@stop

@section ('footer')
<div id="footer">
	<p>&copy; 2019 | Mitra Buku</p>
</div>
@stop