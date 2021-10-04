@extends('layout')
@section('user', Auth::user()->nama)
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Ubah Usulan Kerjasama</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="#">Ubah Usulan</a></div>
  </div>
</div>
@endsection
@section('isi')

<div class="container-fluid">
    <div class="card mt-3">

        <div class="card-header" style="background-color:#3C64B1">
        <h4 style="color:white">Ubah Pengajuan Kerjasama</h4>
        </div>

        <div class="card body">

        <form class="mt-4 col-xl-8 offset-2" method="POST" action="{{ route('kerjasama.update') }}" class="needs-validation" novalidate="">
            @csrf
                <div class="row col-8">
                @if(count($errors) > 0)
                <div class="alert alert-danger mb-3">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif

                <br>

            <a href="{{route('daftar_usulan')}}" class="btn btn-danger btn-lg btn-icon icon-right float-right mb-3 mr-2 mt-3" tabindex="3">
                  Kerjasama
            </a>
                
            <button type="submit"  class="btn btn-primary btn-lg btn-icon icon-right float-right mb-3 mt-3" tabindex="4">
                  Perbarui Pengajuan
            </button>

            <h5 style="text-align:center">Detail Informasi Kerja Sama</h5>
<!--             <div class="form-group">
                <label>Lama Kerja Sama</label>
                <input id="lama_kerjasama" value="{{ old('lama_kerjasama') }}" type="text" class="form-control" name="lama_kerjasama" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div> -->
            <div class="form-group">
                <input type="hidden" name="id" value="{{$items->id}}">
            </div>
            <div class="form-group mr-3 mb-3">
                <label>Perihal Kerja Sama</label>
                <textarea id="perihal_kerjasama" value="{{old('perihal_kerjasama')}}" type="text" class="form-control" name="perihal_kerjasama" tabindex="1" required autofocus>{{$items->perihal_kerjasama}}</textarea>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>

            <div class="form-group mr-3 mb-3">
                <label>Awal Kerjasama</label>
                <input class="form-control" type="date" value="{{ $items->awal_kerjasama }}" name="awal" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>

            <div class="form-group mr-3 mb-3">
                <label>Akhir Kerjasama</label>
                <input class="form-control" type="date" value="{{ $items->akhir_kerjasama }}" name="akhir_kerjasama" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>

            <div class="form-group">
                <label>Bentuk Kegiatan</label>
                <select class="form-control" id="bentuk_kegiatan" name="bentuk_kegiatan[]" multiple="multiple">
                    @foreach($bentuk as $kegiatan)
                    <option value="{{$kegiatan->id}}" @foreach($items->bentukKegiatans as $kgt) {{$kgt['id'] == $kegiatan->id ? 'selected' : ''}} @endforeach>
                        {{$kegiatan->nama}}
                    </option>
                    @endforeach                  
                </select>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>

            <div class="form-group">
                <label>Unit Pelaksana Kerjasama</label>
                <input id="unit_pelaksana" value="{{$items->unit_pelaksana}}" type="text" class="form-control" name="unit_pelaksana" tabindex="1" disabled></input>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Kerja Sama</label>
                <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="1" required autofocus>{{$items->deskripsi}}</textarea>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
                <div id="passwordHelpBlock" class="form-text">
                    Tuliskan secara singkat deskripsi kerja sama ini.
                </div>
            </div>

            <div class="form-group">
                <label>Jenis Dokumen</label>
                <select class="form-control" name="jenis_dokumen">
                    <option Selected disabled>
                        <p class="text-secondary">Pilih Jenis Dokumen</p>
                    </option>
                    <option value="Memorandum of Understanding (MOU)">Memorandum of Understanding (MOU)</option>
                    <option value="Memorandum of Aggreement (MOA)">Memorandum of Aggreement (MOA)</option>
                    <option value="Implementation Arrangement (IA)">Implementation Arrangement (IA)</option>
                </select>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
            </div>

            <div class="form-group">
                <label>Rencana Implementasi Kegiatan</label>
                <textarea id="rencana_implementasi" value="{{ old('rencana_implementasi') }}" type="text" class="form-control" name="rencana_implementasi" tabindex="1" required autofocus>{{$items->rencana}}</textarea>
                <div class="invalid-feedback">
                    Harus diisi
                </div>
                <div id="passwordHelpBlock" class="form-text">
                    Tuliskan secara singkat rencana impelementasi kegiatan kerja sama ini.
                </div>
            </div>

            <!-- <hr> -->

<!--             <div class="card" id="penggiat">

                <div class="card-header mb-3 bg-white">
                    <h4>Penggiat Kerjasama</h4>
                </div>

                <div class="card-header bg-light">
                   Pihak 1
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="instansi" class="label">
                            <b>Nama Instansi</b>
                        </label>
                        <select name="instansi" id="" class="form-control">
                            <option value="Institut Teknologi Telkom Surabaya" selected disabled>Institut Teknologi Telkom Surabaya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">
                            <b>Alamat</b>
                        </label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>

                    <h4>Penandatangan</h4>

                    <p class="secondary-text">Pejabat yang menandatangani dokumen</p>

                    <br>

                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    <b>Nama:</b>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    <b>Jabatan:</b>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div id="pegiat">
                        
                    </div>

                    <button class="btn btn-success btn-lg btn-icon icon-right" onclick="tambah()">
                        Tambah Penggiat
                    </button>

                </div>
                
                </div> -->

            </div>
        </form>

    </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('#bentuk_kegiatan').select2({
        placeholder: "Pilih Bentuk Kegiatan",
        allowClear: true
    });
});
</script>
@endsection