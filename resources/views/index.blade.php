<!DOCTYPE html>
<html>
<head>
	<title>KasirApp</title>
</head>
<body>

	<h2>Data Barang</h2>

	<a href="/barang/tambah"> + Tambah Barang Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Barang</th>
			<th>Harga Satuan</th>
			<th>Opsi</th>
		</tr>
		@foreach($harga as $p)
		<tr>
			<td>{{ $p->nama_barang }}</td>
			<td>{{ $p->harga_satuan }}</td>

			<td>
				<a href="/barang/edit/{{ $p->barang_id }}">Edit</a>
				|
				<a href="/barang/hapus/{{ $p->barang_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>