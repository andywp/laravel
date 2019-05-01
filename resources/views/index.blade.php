<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data mahasiswa dengan LARVEL</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<h2>andi wijang prasetyo</h2>
		<h3>Data Mahsiswa</h3>

		<a href="/mahasiswa/tambah"> + Tambah Anyar</a>
		
		<br/>
		<br/>

		<table class="table">
			<tr  class="thead-dark" >
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Asal Sekolah</th>
				<th>Opsi</th>
			</tr>
			@foreach($mahasiswa as $p)
			<tr>
				<td>{{ $p->nim }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->alamat }}</td>
				<td>{{ $p->asal_sekolah }}</td>
				<td>
					<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
					|
					<a href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>

</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</html>