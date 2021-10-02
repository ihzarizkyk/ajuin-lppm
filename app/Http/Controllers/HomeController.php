<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
            if($role == 0){
                return redirect()->to('pengusul');
            }elseif($role == 1)
            {
                return redirect()->route('pengelola'); 
            }elseif($role == 2)
            {
                return redirect()->route('humas');
            }elseif($role == 3)
            {
                return redirect()->route('pimpinan');
            }else {
                return redirect()->to('logout');
            }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    
}
