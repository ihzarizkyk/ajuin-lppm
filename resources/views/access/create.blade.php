@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Buat Pengguna Baru</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Akses</a></div>
    <div class="breadcrumb-item"><a href="#">Akses Pengguna</a></div>
    <div class="breadcrumb-item active"><a href="#">Buat Pengguna</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">
		<div class="card mt-3" style="width: 400px;">
			<div class="card-body">
				<h2>
					Buat Pengguna Baru
				</h2>
				<form action="#" method="POST" class="form" id="pengguna">
					@csrf
					<div class="form-group">
						<label for="">
							<b>Nama:</b>
						</label>
						<br>
						<input class="form-control" type="text" name="nama">
					</div>

					<div class="form-group">
						<label for="">
							<b>Jabatan:</b>
						</label>
						<br>
						<input class="form-control" type="text" name="jabatan">
					</div>

					<div class="form-group">
						<label for="">
							<b>Unit:</b>
						</label>
						<br>
						<input class="form-control" type="text" name="unit">
					</div>

					<div class="form-group">
						<label for="">
							<b>Institusi:</b>
						</label>
						<br>
						<input class="form-control" type="text" name="instansi">
					</div>

					<input type="submit" name="create" class="btn btn-success" value="CREATE">
					<a href="/access/user" class="btn btn-danger">CANCEL</a>
					
				</form>
			</div>
		</div>
	</div>

@endsection