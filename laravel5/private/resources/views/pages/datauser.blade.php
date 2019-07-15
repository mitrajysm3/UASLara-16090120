@extends ('templateuser')

@section ('main')
<br>
<br>

            <div id="content-wrapper">
              <div class="container-fluid">
                <div class="card card-login mx-auto mt-5" style="width: 48rem;">
                    <h5 class="card-header">Data User Terdaftar</h5>
                    <div class="card-body">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                            <th scope="col" >Username</th>
                            <th scope="col" >Email</th>
                            <th scope="col" >Password</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($user as $user)
                            <tr>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td class="text-center">
                            <a href="{{route('user.edit',$user)}}" class="btn btn-warning btn-sm" >Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('user.delete',$user)}}" 
                            onclick="return confirm('Yakin Anda ingin menghapus data ini ?')">Hapus</a></td>
                            </tr>
                          @endforeach
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
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
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