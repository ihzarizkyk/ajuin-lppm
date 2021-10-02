@extends('layout')
@section('user', $user)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Detail</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="#">Kerjasama</a></div>
    <div class="breadcrumb-item active"><a href="#">Usulan Kerjasama</a></div>
    <div class="breadcrumb-item"><a href="#">Detail</a></div>
  </div>
</div>
@endsection
@section('isi')
    <div class="row">
        <div class="card col-12">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
            @endif
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">Detail Kerjasama</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="revisi-tab" data-toggle="tab" href="#revisi" role="tab" aria-controls="revisi" aria-selected="false">Revisi</a>
                    </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                    <h2 class="section-title"><strong>Detail Kerjasama</strong></h2>
                    <table border="0" width="100%" style="color:black;border-collapse: collapse" >
                        <thead>
                        </thead>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Perihal Kerjasama</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em">{{ $kerjasama->perihal_kerjasama }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Deskripsi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em">{{ $kerjasama->deskripsi }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Rencana Implementasi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em">{{ $kerjasama->rencana }}</td>
                        </tr>
                    </table>
                    <h2 class="section-title">Mitra</h2>
                    <h2 class="section-title">Bentuk Kegiatan</h2>
                    @if ($kerjasama->status == 1)
                         <h2 class="section-title">Status</h2>
                         <table border="0" width="100%" style="color:black;border-collapse: collapse" >
                         <tr>
                            <td style="width: 30%" class="align-baseline">Status Kerjasama</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em"><div class="badge badge-success">Disetujui</div></td>
                        </tr>
                         <tr>
                            <td style="width: 30%" class="align-baseline">Aksi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em"><a href="/pengelola/usulan/{{$kerjasama->id}}/disapprove">Batal Setujui</a></td>
                        </tr>
                         </table>
                    @endif
                    <h2 class="section-title">Dokumen</h2>
                    <table border="0" width="100%" style="color:black;border-collapse: collapse" >
                        <thead>
                        </thead>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Jenis Dokumen</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em">M</td>
                        </tr>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Dokumen Pendukung</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em"><a href="/pengelola/file/{{ $kerjasama->file }}" target="_blank">{{ $kerjasama->file }}</a></td>
                        </tr>
                    </table>
                </div>

                <div class="tab-pane fade" id="revisi" role="tabpanel" aria-labelledby="revisi-tab">
                    @if($rev->count()>0)
                    <h2 class="section-title">Revisi</h2>
                    <table border="0" width="100%" style="color:black;border-collapse: collapse" >
                        <thead>
                        </thead>
                        @foreach ($rev as $item)
                        <tr>
                            <td style="width: 30%">Revisi ke-{{ $loop->iteration }}</td>
                            <td style="width: 2%" class="align-baseline"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: 30%" class="align-baseline">Perihal Revisi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td>{{ $item->revisi }} </td>
                        </tr>
                        
                        <tr>
                            <td style="width: 30%" class="align-baseline">Tanggal Revisi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%" class="align-baseline">File Tambahan</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td><a href="/pengelola/file/{{ $item->file }}" target="_blank">{{ $item->file }}</a></td>
                        </tr>
                        @if ($item->status==0)
                        <tr>
                            <td style="width: 30%" class="align-baseline">Aksi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em"><button class="btn btn-icon btn-sm btn-primary" id="modal-edit-rev"><i class="far fa-edit"></i></button>
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <td style="width: 30%" class="align-baseline">Status Revisi</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td>
                                @if ($item->status==0)
                                    <div class="badge badge-danger">Belum Diperbaiki</div>
                                @else
                                     <div class="badge badge-success">Sudah Diperbaiki Pengusul</div>
                                @endif
                            </td>
                        </tr>
                        @if ($item->status==1)
                        <tr>
                            <td style="width: 30%" class="align-baseline">Direvisi pada tanggal</td>
                            <td style="width: 2%" class="align-baseline">:</td>
                            <td style="padding-bottom: 1.5em">xx</td>
                        </tr>
                        @endif
                        @endforeach
                         </table>
                        @endif
                </div>
              </div>
            </div>
        </div>
        
    </div>
    @if ($kerjasama->status == 0)
    <div class="row">
        <a href="/pengelola/usulan/{{$kerjasama->id}}/approve" class="btn btn-primary btn-lg btn-icon icon-left mr-3"><i class="fas fa-check"></i> Setujui</a>
        <a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn btn-danger btn-lg btn-icon icon-left mr-3"><i class="fas fa-times"></i> Tolak</a>
        <div class="row col-12">
            <div class="collapse col-md-12" id="collapseExample">
                <form enctype="multipart/form-data" class="mt-4 col-xl-12" method="POST" action="{{ url('pengelola/store_rev') }}">
                    @csrf
                    <input hidden name="kerjasama_id" value="{{ $kerjasama->id }}">
                    <div class="form-group">
                        <label>Revisi</label>
                        <textarea  style="height=500px" value="{{ old('perihal_kerjasama') }}" type="text" class="form-control" name="revisi" tabindex="1" required autofocus></textarea>
                    </div>
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="filename" name="file">
                        <div id="passwordHelpBlock" class="form-text">
                            File yang diterima .pdf
                        </div>
                    </div>
                    <button type="submit"  class="bt-3 btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                        Submit
                  </button>
                </form>
              </div>
        </div>
    </div>
    @endif
    
@endsection