<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayfaController extends Controller
{
    public function hakkimizda()
    {
        return view('hakkimizda');
    }
    public function yalanlar()
    {
        return view('yalanlar');
    }
}
