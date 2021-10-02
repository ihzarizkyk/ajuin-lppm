@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Buat Data Bentuk Kegiatan</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Referensi</a></div>
    <div class="breadcrumb-item"><a href="#">Bentuk Kegiatan</a></div>
    <div class="breadcrumb-item active"><a href="#">Buat Bentuk Kegiatan</a></div>
  </div>
</div>
@endsection
@section('isi')
<div class="container-fluid">
	
		<div class="card">

			<div class="card-body">

			<a href="{{route('kegiatan')}}" class="btn btn-dark btn-sm mb-3">
				Bentuk Kegiatan
			</a>

				<form action="{{route('kegiatan.store')}} " method="POST" name="bentuk_kerjasama">
					@csrf
				<div class="form-group">
					<label for="">
						<b>Kegiatan:</b>
					</label>
					<br>
					<input class="form-control" type="text" name="nama" placeholder="masukkan nama kegiatan" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">
						<b>Keterangan:</b>
					</label>
					<br>
					<textarea class="form-control" name="keterangan" id="" cols="60" rows="10" placeholder="masukkan keterangan"></textarea>
				</div>
				<br>
				<div>
					<input type="submit" class="btn btn-success" name="kirim" value="create">
				</div>
			</form>	
			</div>

		</div>

</div>
@endsection