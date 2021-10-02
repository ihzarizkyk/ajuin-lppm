@extends('layout')
@section('user', Auth::user()->username)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Kerjasama</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Kerjasama</a></div>
  </div>
</div>
@endsection
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
              <div class="hero-inner">
                <h2> Daftar Kerjasama</h2>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" id="table-usulan">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Perihal Kerjasama</th>
                        <th>Deskripsi</th>
                        <th>Pengusul</th>
                        <th>Tanggal Diajukan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kerjasama as $kj)
                        <tr>
                            <td>{{$loop->iteration ?? 'null'}}</td>
                            <td>{{$kj->perihal_kerjasama ?? 'null'}}</a>
                            </td>
                            <td>{{$kj->deskripsi ?? 'null'}}</td>
                            <td>{{$kj->anggaran ?? 'null'}}</td>    
                            <td>{{$kj->created_at ?? 'null'}}</td>
                            <td>
                                <a href="/kerjasama/{{$kj->id}}/revision" class="btn btn-sm btn btn-warning">Revisi</a>
                                <a href="/kerjasama/{{$kj->id}}/signature" class="btn btn-sm btn btn-success">Ttd</a>
                                <a href="/kerjasama/{{$kj->id}}/disapprove" class="btn btn-sm btn btn-danger">Tolak</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
@endsection