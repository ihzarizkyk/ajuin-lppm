<?php

namespace App\Http\Controllers\items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BentukKegiatanController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = DB::table("bentuk_kegiatan")->get();
        return view("items.bentuk_kegiatan.index",["kegiatan" => $data]);
    }

    public function create()
    {
        return view("items.bentuk_kegiatan.create");
    }

    public function store(Request $req)
    {
        $req->validate([
            "nama" => "required",
            "keterangan" => "required",
        ]);

        DB::table("bentuk_kegiatan")->insert([
            "nama" => $req->nama,
            "keterangan" => $req->keterangan
        ]);

        return redirect()->route("kegiatan");

    }

    public function edit($id)
    {
        $data = DB::table("bentuk_kegiatan")->where("id",$id)->get();
        return view("items.bentuk_kegiatan.edit",["kegiatan" => $data]);
    }

    public function destroy($id)
    {
        DB::table("bentuk_kegiatan")->where("id",$id)->delete();

        return back();
    }
}
