<html>
 <head>
  Tabel barang
 </head>
 @if(session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
	{{ session('error') }}
</div>
@endif
<a href="{{ url('/barang/create') }}">Tambah Data</a>
<table border="2">
<center> <b>
 <tr>
  <th>Nama Barang</th>
  <th>Jumlah</th>
  <th>Harga</th>
  <th>Aksi</th>
 </tr>
 <tr>
 @foreach ($barang as $row)
 <tr>
  <td>{{ isset($i) ? ++$i : $i = 1}}</td>
  <td>{{ $row->nama_barang }}</td>
  <td>{{ $row->jumlah }}</td>
  <td>{{ $row->harga }}</td>
  <td>
	<a href="{{ url('/barang/' . $row->id . '/edit') }}">Edit</a>
	|
	<form action="{{ url('barang', $row->id) }}" method="POST">
		@method('DELETE')
		@csrf
		<button type="submit">Delete</button>
	</form>

  </td>
 </tr>
 @endforeach
 
</b></center>
</table>
</body>
</html>