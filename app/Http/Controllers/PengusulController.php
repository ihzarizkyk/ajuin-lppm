<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kerjasama;
use App\Models\BentukKegiatan;
use App\Models\PenggiatKerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengusulController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact(['user']));
    }

    public function daftar_usulan()
    {
        $user = Auth::user();
        $kerjasama = Kerjasama::with('bentukKegiatans')->get();
        $bentuk = BentukKegiatan::all();
        // foreach($kerjasama->bentukKegiatans()->nama as $kerja)
        // {
        //     echo $kerja;
        // }

        return view('pengusul.daftar_usulan',['user' => $user,'kerjasama' => $kerjasama,'bentuk' => $bentuk]);
    }

    public function daftar_kerjasama()
    {
        $user = Auth::user();
        return view('dashboard', compact(['user']));
    }

    public function create()
    {
        $user = Auth::user();
        $dokumen = Dokumen::all();
        $bentuk = BentukKegiatan::all();
        return view('pengusul.formkerjasama', compact('user', 'dokumen','bentuk'));
    }

    public function simpan_kerjasama(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:pdf|max:10000',
		]);
        
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        $kerjasama = new Kerjasama();
        $kerjasama->perihal_kerjasama = $request->perihal_kerjasama;
        $kerjasama->unit_pelaksana = $request->unit_pelaksana;
        $kerjasama->deskripsi = $request->deskripsi;
        $kerjasama->rencana = $request->rencana_implementasi;
        $kerjasama->lama_kerjasama = now();
        $kerjasama->file = $nama_file;
        // $kerjasama->dokumen_id = $request->dokumen;
        $kerjasama->status = '0';
        $kerjasama->users_id = Auth::user()->id;
        $kerjasama->save();

        $kerjasama->bentukKegiatans()->sync($request->bentuk_kegiatan);

        return redirect()->route('pengusul.index');
    }

    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $items = Kerjasama::with('bentukKegiatans')->find($id);
        $bentuk = BentukKegiatan::all();
        return view("pengusul.ubah",compact(["items" ,"bentuk"]));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'perihal_kerjasama' => 'required',
            'bentuk_kegiatan' => 'array|required',
            'deskripsi' => 'required',
            'rencana_implementasi' => 'required'
        ]);

        $kerjasama = Kerjasama::find($request->id);
        $kerjasama->perihal_kerjasama = $request->perihal_kerjasama;
        // $kerjasama->unit_pelaksana = $request->unit_pelaksana;
        $kerjasama->deskripsi = $request->deskripsi;
        $kerjasama->rencana = $request->rencana_implementasi;
        $kerjasama->lama_kerjasama = now();
        // $kerjasama->dokumen_id = $request->dokumen;
        $kerjasama->status = '0';
        $kerjasama->users_id = Auth::user()->id;
        $kerjasama->save();

        $kerjasama->bentukKegiatans()->sync($request->bentuk_kegiatan);

        return redirect()->route('daftar_usulan');
    }

    public function destroy($id)
    {
        //
    }
}
