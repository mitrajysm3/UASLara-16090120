<div id='karyawan'>
	<h1>Passing Data Controller </h1>
	<p>Passing Data Controller ke view Laravel</p>

	<p>Nama : {{$nama}}</p>
	<p>Belajar Mata Kuliah</p>

	<ul>
		@foreach($matkul as $m)

		<li>
			{{$m}}
		</li>
		@endforeach
	</ul>
</div>