@extends('layout')
@section('user', $user)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Dashboard</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
  </div>
</div>
@endsection
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
              <div class="hero-inner">
                <h2>Selamat Datang, {{ $user }}</h2>
                <p class="lead">Akses cepat berada di section ini.</p>
                <div class="mt-4">
                  <a href="{{ url('pengusul/create') }}" class="btn btn-outline-white btn-lg btn-icon icon-left mr-3"><i class="fas fa-level-up-alt"></i> Ajukan Kerjasama</a>
                  <a href="{{ route('daftar_usulan_pen') }}" class="btn btn-outline-white btn-lg btn-icon icon-left mr-3"><i class="fas fa-level-up-alt"></i> Usulan Kerjasama</a>
                  <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left mr-3"><i class="fas fa-level-up-alt"></i> Kerjasama Aktif</a>
                  <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left mr-3"><i class="fas fa-level-up-alt"></i> Riwayat Kerjasama</a>
                </div>
              </div>
            </div>
          </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                          <i class="far fa-file-alt"></i>
                    </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Kerjasama</h4>
                          </div>
                          <div class="card-body">
                            10
                          </div>
                        </div>
                </div>
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                          <i class="fas fa-check"></i>
                    </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Dokumen Kerjasama Selesai</h4>
                          </div>
                          <div class="card-body">
                            10
                          </div>
                        </div>
                </div>
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                          <i class="fas fa-history"></i>
                    </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Dokumen Kerjasama Masih Proses</h4>
                          </div>
                          <div class="card-body">
                            10
                          </div>
                        </div>
                </div>
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                          <i class="fas fa-ban"></i>
                    </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Dokumen Kerjasama Ditolak</h4>
                          </div>
                          <div class="card-body">
                            10
                          </div>
                        </div>
                </div>
            </div>

            
    </div>
</div>


@endsection