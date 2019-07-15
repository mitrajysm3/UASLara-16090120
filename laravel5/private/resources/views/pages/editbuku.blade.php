@extends ('templatelogin')

@section ('main')
<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5" style="width: 28rem;">
			<div class="card-header" style="text-align: center;">Form Edit Buku</div>
				<div class="card-body">
					<form action="{{route('user.update',$user)}}" method="post">
                        {{ csrf_field() }}
						<div class="form-group">
							<div class="form-label-group">
								<input type="text" name="category_id" id="name" class="form-control" placeholder="Username"
								required="required" autofocus="autofocus" value="{{$user->username}}" disabled selected>
								<label for="name">Kategori</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" name="nama_buku" id="inputEmail" class="form-control" placeholder="Email Adress"
								required="required" autofocus="autofocus" value="{{$user->email}}">
								<label for="inputEmail">Nama Buku</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="password" name="penulis" id="inputPassword" class="form-control" placeholder="Password"
								 required="required" value="{{$user->password}}">
								<label for="inputPassword">Penulis</label>
							</div>
                            <div class="form-group">
							<div class="form-label-group">
								<input type="email" name="penerbit" id="inputEmail" class="form-control" placeholder="Email Adress"
								required="required" autofocus="autofocus" value="{{$user->email}}">
								<label for="inputEmail">Penerbit</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="password" name="detail" id="inputPassword" class="form-control" placeholder="Password"
								 required="required" value="{{$user->password}}">
								<label for="inputPassword">Detail</label>
							</div>
						</div>
						<button type="submit" class="btn btn-warning">Update</button>
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
        Anda telah mendaftar sebagai anggota kami.
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