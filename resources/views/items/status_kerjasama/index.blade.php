@extends('layout')
@section('user', Auth::user()->name)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Status Kerjasama</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Referensi</a></div>
    <div class="breadcrumb-item active"><a href="#">Status Kerjasama</a></div>
  </div>
</div>
@endsection
@section('isi')

  <div class="container-fluid">

    <a href="#" class="btn btn-md btn-info mt-3 mb-3">
      Buat
    </a>

    <table class="table table-hover" id="status_kerjasama">
      <thead>
        <tr>
          <th>No</th>
          <th>Status</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($status as $st)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$st->status ?? '-'}}</td>
          <td>{{$st->keterangan ?? '-'}}</td>
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
            $('#status_kerjasama').DataTable();
        } );
</script>
@endsection