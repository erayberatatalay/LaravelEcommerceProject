<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {
        $isim = "eray";
        $soyisim = "atalay";

        //return view('anasayfa', ['isim' => 'eray']);

        //return view('anasayfa', compact('isim', 'soyisim'));

        return view('anasayfa')->with(['isim' => 'eray', 'soyisim' => "atalay"]);

    }
}
