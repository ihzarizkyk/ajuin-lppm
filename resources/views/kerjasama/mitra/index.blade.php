@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Mitra</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Kerjasama</a></div>
    <div class="breadcrumb-item active"><a href="#">Mitra</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">

<!-- 		<a href="{{route('kriteriamitra.create')}}}" class="btn btn-md btn-info mt-3 mb-3">
			Buat
		</a> -->

		<table class="table table-hover" id="mitra">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Klasifikasi</th>
					<th>Negara</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($mitra as $partner)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$partner->nama ?? '-'}}</td>
					<td>{{$partner->klasifikasi ?? '-'}}</td>
					<td>{{$partner->negara ?? '-'}}</td>
					<td>
						<a class="btn btn-sm btn-danger" href="#">
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
            $('#mitra').DataTable();
        } );
</script>
@endsection