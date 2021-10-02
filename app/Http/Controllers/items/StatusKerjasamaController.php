<?php

namespace App\Http\Controllers\items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusKerjasama;

class StatusKerjasamaController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = DB::table("status_kerjasama")->get();
        return view("items.status_kerjasama.index",["status" => $data]);
    }
}
