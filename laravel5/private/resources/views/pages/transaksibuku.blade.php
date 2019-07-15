@extends ('template')

@section ('main')
<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Order Buku</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-label-group">
								<input type="name" id="inputNamabuku" class="form-control" placeholder="Nama Buku"
								required="required" autofocus="autofocus">
								<label for="inputNamabuku">Nama Buku</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="jumlah" id="inputJumlah" class="form-control" placeholder="Jumlah Buku Yang Dibeli"
								required="required" autofocus="autofocus">
								<label for="inputJumlah">Jumlah Buku</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="telepon" id="inputTelepon" class="form-control" placeholder="Nomer Telepon"
								required="required" autofocus="autofocus">
								<label for="inputTelepon">Nomer Telepon</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="alamat" id="inputAlamat" class="form-control" placeholder="Alamat Pemesan"
								required="required" autofocus="autofocus">
								<label for="inputAlamat">Alamat Pemesan</label>
							</div>
						</div>
						<a class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalCenter" href="transaksibuku">Simpan</a>
					</form>
					
				</div>
			</div>
			
		</div>
		
	</div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Terimakasih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda telah mengunjungi toko buku kami, semoga berkenan kembali
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary" href="home">Tutup</a>
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