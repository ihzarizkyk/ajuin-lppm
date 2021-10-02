@section('menu')
@if(Auth::user()->role == 0)
<ul class="sidebar-menu">
<li class="nav-item {{ Route::currentRouteName() == 'pengusul' ? 'active' : '' }}"><a class="nav-link" href="{{ route('pengusul.index') }}">Dashboard</a></li>
    <li href="#" class="menu-header"><i class="fa fa-institution"></i><span><a href="#">Institusi</a></span></li>
    <li class="menu-header">Kerjasama</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Usulan Kerjasama</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('pengusul/create') }}">Ajukan Kerjasama</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('daftar_usulan') }}">Daftar Usulan Kerjasama</a></li>
                </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-handshake"></i><span>Kerjasama</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('daftar_kerjasama') }}">Daftar Seluruh Kerjasama</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="#">Kerjasama Akan Berakhir</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('mitra')}}">Mitra</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('program')}}">Program</a></li>
                </ul>
    </li>
    <li class="menu-header">Dokumen</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Dokumen</span></a>
                <!-- <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="#">Pemberitahuan</a></li>
                </ul> -->
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="">Daftar Dokumen</a></li>
                </ul>
    </li>
    <li class="menu-header">Pelaksanaan Kegiatan</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="#">L P J</a></li>
                </ul>
    </li>

    <li class="menu-header">Akses</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Akses Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('access.user')}}">Pengguna</a></li>
                </ul>

        </li>

    <li class="menu-header">Referensi</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('kegiatan')}}">Bentuk Kegiatan</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('status')}}">Status Kerjasama</a></li>
                </ul>

                <ul class="dropdown-menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('kriteriamitra')}}">Kriteria Mitra</a></li>
                </ul>

        </li>


</ul>






@elseif(Auth::user()->role == 1)
<ul class="sidebar-menu">
    <li class="nav-item {{ Route::currentRouteName() == 'pengelola' ? 'active' : '' }}"><a class="nav-link" href="{{ route('pengelola') }}">Dash</a></li>
        <li class="menu-header">Kerjasama</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Usulan Kerjasama</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Route::currentRouteName() == 'a' ? 'active' : '' }}"><a class="nav-link" href="{{ url('') }}">Ajukan Kerjasama</a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Route::currentRouteName() == 'daftar_usulan_pen' ? 'active' : '' }}"><a class="nav-link" href="{{ route('daftar_usulan_pen') }}">Daftar Usulan Kerjasama</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Kerjasama</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Route::currentRouteName() == 'daftar_kerjasama_pen' ? 'active' : '' }}"><a class="nav-link" href="{{ route('daftar_kerjasama_pen') }}">Daftar Seluruh Kerjasama</a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a class="nav-link" href="#">Kerjasama Akan Berakhir</a></li>
                    </ul>
        </li>
        <li class="menu-header">Dokumen</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Dokumen</span></a>
                    <!-- <ul class="dropdown-menu">
                        <li class="nav-item active"><a class="nav-link" href="#">Pemberitahuan</a></li>
                    </ul> -->
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a class="nav-link" href="">Daftar Dokumen</a></li>
                    </ul>
        </li>
        <li class="menu-header">Pelaksanaan Kegiatan</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a class="nav-link" href="#">L P J</a></li>
                    </ul>
        </li>
    </ul>

@elseif(Auth::user()->role == 3)

<ul class="sidebar-menu">
    <li class="nav-item {{ Route::currentRouteName() == 'pengelola' ? 'active' : '' }}"><a class="nav-link" href="{{ route('pimpinan') }}">Dash</a>
    </li>
        <li class="menu-header">Kerjasama</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Kerjasama</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Route::currentRouteName() == 'daftar_kerjasama_pen' ? 'active' : '' }}"><a class="nav-link" href="{{ route('daftar_kerjasama_pen') }}">Daftar Seluruh Kerjasama</a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a class="nav-link" href="#">Kerjasama Akan Berakhir</a></li>
                    </ul>
        </li>

    </ul>


@endif
@endsection