@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Bentuk Kegiatan</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Referensi</a></div>
    <div class="breadcrumb-item active"><a href="#">Bentuk Kegiatan</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">

		<a href="{{route('kegiatan.create')}}" class="btn btn-md btn-success mb-3">
			Buat
		</a>

		<table class="table table-hover" id="kegiatan">
			<thead>
				<tr>
					<th>No</th>
					<th>Kegiatan</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kegiatan as $kgt)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$kgt->nama ?? 'null'}}</td>
					<td>{{$kgt->keterangan ?? 'null'}}</td>
					<td><a class="btn btn-sm btn-danger" href="/items/bentukkegiatan/{{$kgt->id}}/delete" onclick="return confirm('Are you sure ?');">Hapus</a>
						<a class="btn btn-sm btn-warning" href="/items/bentukkegiatan/{{$kgt->id}}/edit">Ubah</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
@endsection
@section('script')
<script>
  $(document).ready( function () {
            $('#kegiatan').DataTable();
        } );
</script>
@endsection