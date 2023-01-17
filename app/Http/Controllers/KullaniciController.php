<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }
    public function giris()
    {
        return 'giris';
    }

    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public function kaydol()
    {
        return 'kaydol';
    }

    public function aktiflestir()
    {
        return 'aktiflestir';
    }

    public function oturumukapat()
    {
        return 'oturumukapat';
    }
}
