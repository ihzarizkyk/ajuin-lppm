@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Akses Pengguna</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Akses</a></div>
    <div class="breadcrumb-item active"><a href="#">Pengguna</a></div>
  </div>
</div>
@endsection
@section('isi')

	<div class="container-fluid">

		<a href="{{route('access.user.create')}}" class="btn btn-md btn-primary mb-3">
			Buat
		</a>

		<table class="table table-hover" id="access">

			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Peralihan</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				@foreach($user as $usr)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$usr->name}}</td>
					<td>{{$usr->jabatan ?? '-'}}</td>
					<td>
						<summary>
							<details>
								<div id="jabatan">
									
										<a class="btn btn-sm btn-info" href="/access/user/{{$usr->id}}/legal">
											Legal
										</a>
									
									
										<a class="btn btn-sm btn-info" href="/access/user/{{$usr->id}}/pengusul">
											Pengusul
										</a>
									
									
										<a class="btn btn-sm btn-info" href="/access/user/{{$usr->id}}/pengelola">
											Pengelola
										</a>
									
									
										<a class="btn btn-sm btn-info" href="/access/user/{{$usr->id}}/pimpinan">
											Pimpinan
										</a>
									
							
								</div>
							</details>
						</summary>
					</td>

					<td>
						<a href="/access/user/{{$usr->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?');">
							Delete
						</a>
					</td>

				</tr>
				@endforeach
			</tbody>

		</table>
	</div>

@endsection