@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Kriteria Mitra</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Referensi</a></div>
    <div class="breadcrumb-item active"><a href="#">Kriteria Mitra</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">

		<a href="{{route('kriteriamitra.create')}}}" class="btn btn-md btn-info mt-3 mb-3">
			Buat
		</a>

		<table class="table table-hover" id="kriteria_mitra">
			<thead>
				<tr>
					<th>No</th>
					<th>Klasifikasi</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kriteriamitra as $km)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$km->klasifikasi ?? '-'}}</td>
					<td>{{$km->keterangan ?? '-'}}</td>
					<td>
						<a class="btn btn-sm btn-danger" href="/items/kriteriamitra/id/delete" onclick="return confirm('Are you sure ?');">
							Delete
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
	
@endsection
@section('script')
<script>
  $(document).ready( function () {
            $('#kriteria_mitra').DataTable();
        } );
</script>
@endsection