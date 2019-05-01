<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data mahasiswa dengan LARVEL</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<h2>andi wijang prasetyo</h2>
		<h3>Tambah Data Mahsiswa</h3>
		
		@foreach($mahasiswa as $p)
		<form action="/mahasiswa/update" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="email">NIM:</label>
				<input type="text" name="nim" class="form-control" id="neme" value="{{ $p->nim }}" required="required">
			 </div>
			<div class="form-group">
				<label for="email">Nama:</label>
				<input type="text" name="nama" class="form-control" id="nama" value="{{ $p->nama }}" required="required">
			 </div>	
			 
			<div class="form-group">
				<label for="email">Alamat:</label>
				<textarea type="text" name="alamat" class="form-control" id="Alamat" required="required">{{ $p->alamat }}</textarea>
			 </div>	
			 <div class="form-group">
				<label for="email">Asal Sekolah:</label>
				<input type="text" name="asal_sekolah" class="form-control" id="asalsekolah" value="{{ $p->asal_sekolah }}" required="required"> 
			 </div>	
			 <input type="hidden" name="mahasiswa_id" value="{{ $p->mahasiswa_id }}">
			 <button type="submit" class="btn btn-primary">Submit</button>
			 <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
		</form>
		@endforeach
	</div>

</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</html>