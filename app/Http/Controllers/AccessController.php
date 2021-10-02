<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Access;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AccessController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view("access.index",compact('user'));
    }

    public function create()
    {
        return view("access.create");
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function pengusul($id)
    {
        DB::table("users")->where("id",$id)->update([
            "jabatan" => "pengusul"
        ]);

        return redirect()->back();
    }

    public function pengelola($id)
    {
        DB::table("users")->where("id",$id)->update([
            "jabatan" => "pengelola"
        ]);

        return redirect()->back();      
    }

    public function legal($id)
    {
        DB::table("users")->where("id",$id)->update([
            "jabatan" => "legal"
        ]);

        return redirect()->back();
    }

    public function pimpinan($id)
    {
        DB::table("users")->where("id",$id)->update([
            "jabatan" => "pimpinan"
        ]);

        return redirect()->back();
    }
}
