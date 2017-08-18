<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscriptoresController extends Controller
{
    public function inicio()
    {
        return view('suscriptores.inicio');
    }
}
