<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;
use Illuminate\Support\Facades\DB;


class PimpinanController extends Controller
{
    public function index()
    {
        $data = DB::table('kerjasama')->get();
        return view('pimpinan.kerjasama',["kerjasama" => $data]);
    }

    public function signature($id)
    {
        //
    }

    public function revision($id)
    {
        //
    }

    public function disapprove($id)
    {

    }
}
