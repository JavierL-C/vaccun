<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view('registro.index');
    }

    public function show()
    {
        return view('registro.search');
    }
}
