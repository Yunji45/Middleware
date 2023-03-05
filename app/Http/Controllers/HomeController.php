<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function mhs()
    {
        $data = ['Lusi' , 'Andri' ,'Haikal'];
        return view ('mahasiswa' ,compact('data'));
    }

    public function dsn()
    {
        return view ('dosen');
    }

    public function adm()
    {
        return view ('admin');
    }
}
