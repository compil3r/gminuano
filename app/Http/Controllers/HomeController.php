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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function inicio() {
        return view('inicio');
    }

    public function recados() {
        return view('recados');
    }

    public function recadoNovo() {
        return view('recadonovo');
    }

    public function recadoLer() {
        return view('recadoler');
    }

    public function contatos() {
        return view('contatos');
    }
}
