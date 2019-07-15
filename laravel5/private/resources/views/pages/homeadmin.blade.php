@extends ('templatelogin')

@section ('main')
<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5" style="width: 28rem;">
			<div class="card-header" style="text-align: center;">LOGIN</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-label-group">
								<input type="name" id="name" class="form-control" placeholder="Username"
								required="required" autofocus="autofocus">
								<label for="name">Username</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="inputEmail" class="form-control" placeholder="Email Adress"
								required="required" autofocus="autofocus">
								<label for="inputEmail">Email</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
								<label for="inputPassword">Password</label>
							</div>
						</div>
						<div class="form-group sm-4">
							<label for="inputState">Peran</label>
							<select id="inputState" class="form-control" placeholder="peran"required="required">
								<option>Admin</option>
								<option>Users</option>
							</select>
						</div>
						<div class="text-center">
						<a class="btn btn-primary" href="admin">Login</a>
					</form>
					<div class="text-center">
						<a class="d-block small" href="create">Register</a>
					</div>
				</div>
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