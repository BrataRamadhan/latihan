<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('welcome');
    }

    // public function tampil(){
    //     $siswa = DB::table('student')->get();
    //     // $siswa = Siswa::with('user')->get();
    //     // dd($siswa);
    //     return view('survey', compact('siswa'));
    // }
}
