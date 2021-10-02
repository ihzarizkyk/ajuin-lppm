<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.0/b-2.0.0/b-colvis-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/fc-3.3.3/fh-3.1.9/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.0/sp-1.4.0/sl-1.3.3/datatables.min.css"/>
	<title>Pengelola - Ajuin</title>
</head>
<body>

	<div class="container">

		<a href="{{route('logout')}}" class="btn btn-md btn btn-danger float-right mt-3 mb-3">
			Keluar
		</a>

		<br>

		<h1>
			{{auth()->user()->unit}} - Dokumen: ({{$kerjasama->count()}})
		</h1>

		<table class="table table-hover" id="pengelola">
			<thead>
				<tr>
					<th>No</th>
					<th>Perihal Kerjasama</th>
					<th>Deskripsi</th>
					<th>Status</th>
					<th>TGL</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kerjasama as $kj)
				<tr>
					<td>{{$loop->iteration ?? 'null'}}</td>
					<td>{{$kj->perihal_kerjasama ?? 'null'}}
						<small><a class="btn btn-sm btn-info" href="/pengelola/{{$kj->id}}/view">view</a></small>
					</td>
					<td>{{$kj->deskripsi ?? 'null'}}</td>
					<td>{{$kj->status ?? 'null'}}</td>
					<td>{{$kj->created_at ?? 'null'}}</td>
					<td>
						<a href="/pengelola/kerjasama/{{$kj->id ?? '#'}}/approved" class="btn btn-sm btn-success">Approved</a>
						<a href="/pengelola/kerjasama/{{$kj->id ?? '#'}}/disapproved" class="btn btn-sm btn-danger">Disapproved</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script>
  	$(document).ready( function () {
            $('#pengelola').DataTable();
        } );
  </script>
</body>
</html>