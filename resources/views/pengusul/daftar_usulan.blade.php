@extends('layout')
@extends('menu')
@section('breadcrumb')
<div class="section-header">
  <h1>Daftar Usulan Kerjasama</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="#">Daftar Usulan</a></div>
  </div>
</div>
@endsection
@section('isi')
    <div class="row">
              <div class="col-12">
                <div class="card mt-3">
                  <div class="card-header">
                    <h4>Daftar Semua Usulan Kerjasama</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                        <tr>
                          <th style="width: 70px">No.</th>
                          <th>Perihal</th>
                          <th>Deskripsi</th>
                          <!-- <th>Status</th> -->
                          <th>Tanggal Diajukan</th>
                          <!-- <th>Dokumen Penunjang</th> -->
                          <th>Kegiatan</th>
                          <!-- <th>Hapus</th> -->
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kerjasama as $item)
                        <tr>
                          <td style="width: 90px">{{ $loop->iteration }}</td>
                          <td><a href="{{ url('pengusul/'.$item->id) }}">{{ $item->perihal_kerjasama }}</a></td>
                          <td>{{ $item->deskripsi }}</td>
                          <td>{{ $item->created_at }}</td>
                          <td>
                              <summary>
                                <details>
                           @foreach($item->bentukKegiatans as $items)
                          {{ $items['nama'].','}}
                            @endforeach
                                </details>
                              </summary>
                          </td>
                          <td>
                            <a href="/kerjasama/{{ $item->id }}/hapus" class="btn btn-icon btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                            <a href="/kerjasama/{{$item->id}}/ubah" class="btn btn-icon btn-info"><i class="fa fa-edit"></i></a>
                          </td>
                        </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div
@endsection