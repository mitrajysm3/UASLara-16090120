
<html>
    <head>
        <title>Latihan Collective Laravel</title>
    </head>
    <body>
        {!! Form::open(array('route' => 'barang.store','method'=>'POST')) !!}
        <table border="1">
            <tr><td>Kode Barang</td><td>{{ Form::text('kode_barang',null,array('placeholder'=>'Kode Barang'))}}</td></tr>
            <tr><td>Nama Barang</td><td>{{ Form::text('nama_barang',null,array('placeholder'=>'Nama Barang'))}}</td></tr>
            <tr><td>Harga</td><td>{{ Form::text('harga',null,array('placeholder'=>'harga'))}}</td></tr>
            <tr><td colspan="2">{{ Form::submit('Simpan')}}</td></tr>
        </table>
        {{ Form::close()}}
    </body>
</html>
