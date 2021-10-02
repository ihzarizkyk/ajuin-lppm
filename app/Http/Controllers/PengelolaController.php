<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kerjasama;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PengelolaController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user()->name;
        return view("pengelola.dashboard",compact('user'));
    }
    // public function index()
    // {
    //     $kerjasama = Kerjasama::all();
    //     return view("pengelola.index",["kerjasama" => $kerjasama]);
    // }

    public function view()
    {
        // $kerjasama = Kerjasama::where('status', '=', 0);
        $kerjasama = DB::table('kerjasama')
        ->where('status', '=', 0)
        ->get();
        $user = Auth::user()->name;
        return view("pengelola.usulan", compact('kerjasama','user'));
    }

    public function view2()
    {
        // $kerjasama = Kerjasama::where('status', '=', 0);
        $kerjasama = DB::table('kerjasama')
        ->where('status', '=', 1)
        ->get();
        $user = Auth::user()->name;
        return view("pengelola.kerjasama", compact('kerjasama','user'));
    }

    public function lihatkerjasama($id)
    {
        $user = Auth::user()->name;
        $kerjasama = Kerjasama::findOrFail($id);
        $rev = DB::table('revisi')
        ->where('kerjasama_id', '=', $id)
        ->get();
        // dd($rev);
        return view("pengelola.detail_kerjasama",compact('kerjasama','user', 'rev'));
    }

    public function reviewfile($namafile)
    {
        $file = $namafile;
        return view("pengelola.pdf",compact('file'));
    }

    public function store_revisi(Request $request)
    {
        $this->validate($request, [
			'revisi' => 'required',
            'file' => 'mimes:pdf|max:10000',
		]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'storage';
	    $file->move($tujuan_upload,$nama_file);
        DB::table('revisi')->insert([
            'revisi' => $request->revisi,
            'status' => 0,
            'kerjasama_id' => $request->kerjasama_id,
            'file' => $nama_file,
        ]);
        return redirect()->back()->with(['success' => 'Berhasil menambah revisi']);
    }

    public function approved($id)
    {
            DB::table('kerjasama')->where("id",$id)->update([
                "status" => 1
            ]);

            return redirect()->back()->with(['success' => 'Usulan kerjasama disetujui']);
    }

    public function disapproved($id)
    {
            DB::table('kerjasama')->where("id",$id)->update([
                "status" => 0
            ]);

            return redirect()->back()->with(['success' => 'Usulan kerjasama berhasil diubah']);
    }

}
