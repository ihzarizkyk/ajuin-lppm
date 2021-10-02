@extends('layout')
@section('user', $user)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Usulan Kerjasama</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="#">Kerjasama</a></div>
    <div class="breadcrumb-item"><a href="#">Usulan Kerjasama</a></div>
  </div>
</div>
@endsection
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
              <div class="hero-inner">
                <h2> Daftar Usulan Kerjasama Baru</h2>
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
                        <th >No</th>
                        <th >Perihal Kerjasama</th>
                        <th >Deskripsi</th>
                        <th >Pengusul</th>
                        <th >Tanggal Diajukan</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kerjasama as $kj)
                        <tr>
                            <td>{{$loop->iteration ?? 'null'}}</td>
                            <td><a href="/pengelola/usulan/{{$kj->id}}/lihatkerjasama">{{$kj->perihal_kerjasama ?? 'null'}}</a>
                            </td>
                            <td>{{$kj->deskripsi ?? 'null'}}</td>
                            <td>{{$kj->anggaran ?? 'null'}}</td>    
                            <td>{{$kj->created_at ?? 'null'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
@endsection