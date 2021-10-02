<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Kerjasama - Ajuin</title>
</head>
<body>
	
	<div class="container">
		<div class="card">
			<div class="card-body">
				@foreach($kerjasama as $kj)
				<iframe width="400" height="auto" src="{{asset('data_file')/$kj->file}}" frameborder="0"></iframe>
				@endforeach
			</div>
		</div>
	</div>

</body>
</html>