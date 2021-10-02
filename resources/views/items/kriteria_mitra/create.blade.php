@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Buat Data Kriteria Mitra</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Referensi</a></div>
    <div class="breadcrumb-item"><a href="#">Kriteria Mitra</a></div>
    <div class="breadcrumb-item active"><a href="#">Buat Kriteria Mitra</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">
		<div class="card mt-3" style="width: 400px;">
			<div class="card-body">
				<h2>
					Buat Kriteria Mitra
				</h2>
				<form action="/items/kriteriamitra/store" method="POST" class="form" id="kriteria_mitra">
					@csrf
					<div class="form-group">
						<label for="">
							<b>Klasifikasi:</b>
						</label>
						<br>
						<input type="text" name="klasifikasi">
					</div>

					<div class="form-group">
						<label for="">
							<b>Keterangan:</b>
						</label>
						<br>
						<textarea name="keterangan" id="" cols="30" rows="10"></textarea>
					</div>

					<input type="submit" name="create" class="btn btn-success" value="CREATE">
					<a href="/items/kriteriamitra" class="btn btn-danger">CANCEL</a>
					
				</form>
			</div>
		</div>
	</div>

@endsection