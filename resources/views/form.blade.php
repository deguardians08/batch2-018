@extends('template')
@section('content')
<br>
	<div class="form-group">
		<label>Label</label>
		<input type="text" name="" id="" class="form-control">
	</div>
	<div class="form-group">
		<label>id Kategori</label>
		<input type="text" name="" id="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="" id="" class="form-control">
	</div>
	<div class="form-group">
		<label>deskripsi</label>
		<input type="text" name="" id="" class="form-control">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="text" name="" id="" class="form-control">
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="" id="" class="form-control">
	</div>
	<div>
		<a href="{{ url('/')}}" class="btn btn-succes">Simpan data</a>
	</div>
@endsection