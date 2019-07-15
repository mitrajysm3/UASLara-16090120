@extends ('templateuser')

@section ('main')
<br>
<div class="container-fluid">
			        <div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">Data List Buku</h5>
                    <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col" >Kategori</th>
                            <th scope="col" >Nama Buku</th>
                            <th scope="col" >Penulis</th>
                            <th scope="col" >Penerbit</th>
                            <th scope="col" >Detail</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($buku as $buku)
                            <tr>
                            <td>{{$buku->category_id}}</td>
                            <td>{{$buku->nama_buku}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>{{$buku->penulis}}</td>
                            <td>{{$buku->detail}}</td>
                            <td class="text-center">
                            <a href="{{route('buku.edit',$buku)}}" class="btn btn-warning btn-sm" >Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('buku.delete',$buku)}}" 
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