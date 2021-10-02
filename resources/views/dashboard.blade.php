@extends('layout')
@section('user', Auth::user()->nama)
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
<div class="mt-3 text-right pt-1 pb-1">
    <a href="{{ url('pengusul/create') }}" class="btn btn-warning btn-lg btn-left">
        <i class="far fa-edit"></i>
        Ajukan Kerjasama
    </a>
</div>
<div class="row">
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
                    0
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
                    0
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
                    0
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
                    0
                  </div>
                </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                  <h4>Usulan Kerjasama</h4>
                    <div class="card-header-action">
                      <a href="{{ url('pengusul/datausulan') }}" class="btn btn-primary">Lihat semua</a>
                    </div>
            </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-item mt-1">
                      <ul class="list-unstyled list-unstyled-border">
                      @foreach($kerjasama->take(3) as $item)
                        <li class="media">
                            <img class="mr-3 rounded" width="50" src="{{asset('../assets/img/ikon-dokumen.png')}}" alt="product">
                          <div class="media-body">
                            <div class="media-title"><a href="#">{{ $item->perihal_kerjasama  }}</a></div>
                            <div class="text-muted text-small"><div class="bullet"></div> Diajukan {{ $item->created_at  }}</div>
                          </div>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
    </div>
</div> --}}
<!-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color:blue">
                <h4 style="color:white"> Prosedur Pengusulan Kerjasama </h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-md-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-user"></i>
                            </div>
                            <div class="wizard-step-label">
                              Unit Pelaksana
                            </div>
                          </div>
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-search"></i>
                            </div>
                            <div class="wizard-step-label">
                              Unit Pengelola
                            </div>
                          </div>
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-file-signature"></i>
                            </div>
                            <div class="wizard-step-label">
                              Legal
                            </div>
                          </div>
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-user"></i>
                            </div>
                            <div class="wizard-step-label">
                              Unit Pelaksana
                            </div>
                          </div>
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-file-signature"></i>
                            </div>
                            <div class="wizard-step-label">
                              Legal
                            </div>
                          </div>
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-user"></i>
                            </div>
                            <div class="wizard-step-label">
                              Unit Pelaksana
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div> -->
@endsection