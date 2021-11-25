<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacunaController extends Controller
{
    public function index(){
        return view('vacuna.index');
    }

    public function show()
    {
        return view('vacuna.search');
    }
}
