<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function ges_adm(){
        return view('gestion-administrativa.ges_adm');
    }
    public function nomina(){
        return view('nomina.nomina');
    }
    public function inventario(){
        return view('inventario.inventario');
    }
}
