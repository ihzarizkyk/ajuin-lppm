<?php

namespace App\Http\Controllers\items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaMitraController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = DB::table("kriteria_mitra")->get();
        return view("items.kriteria_mitra.index",["kriteriamitra" => $data]);
    }

    public function create()
    {
        return view("items.kriteria_mitra.create");
    }

    public function store(Request $req)
    {
        DB::table("kriteria_mitra")->insert([
            "klasifikasi" => $req->klasifikasi,
            "keterangan" => $req->keterangan
        ]);

        return redirect("/items/kriteriamitra");
    }

    public function destroy($id)
    {
        DB::table("kriteria_mitra")->where("id",$id)->delete();
        return redirect()->back();
    }
}
