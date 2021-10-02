@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Sasaran Kinerja</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Kerjasama</a></div>
    <div class="breadcrumb-item active"><a href="#">Program</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">

<!-- 		<a href="{{route('kriteriamitra.create')}}}" class="btn btn-md btn-info mt-3 mb-3">
			Buat
		</a> -->

		<table class="table table-hover" id="sasaran">
			<thead>
				<tr>
					<th>No</th>
					<th>Sasaran Kinerja</th>
					<th>Keterangan</th>
					<th>Level</th>
					<th>Indikator</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sasaran as $indicator)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$indicator->sasaran ?? '-'}}</td>
					<td>{{$indicator->keterangan ?? '-'}}</td>
					<td>{{$indicator->level ?? '-'}}</td>
					<td>{{$indicator->indikator ?? '-'}}</td>
					<td>
						<a class="btn btn-sm btn-info" href="#">
							Details
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
            $('#sasaran').DataTable();
        } );
</script>
@endsection