@extends ('templatelogin')

@section ('main')
<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5" style="width: 28rem;">
			<div class="card-header" style="text-align: center;">Form Edit Anggota</div>
				<div class="card-body">
					<form action="{{route('user.update',$user)}}" method="post">
             {{ csrf_field() }}
						<div class="form-group">
							<div class="form-label-group">
								<input type="text" name="username" id="name" class="form-control" placeholder="Username"
								required="required" autofocus="autofocus" value="{{$user->username}}" disabled selected>
								<label for="name">Username</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Adress"
								required="required" autofocus="autofocus" value="{{$user->email}}">
								<label for="inputEmail">Email</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
								 required="required" value="{{$user->password}}">
								<label for="inputPassword">Password</label>
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