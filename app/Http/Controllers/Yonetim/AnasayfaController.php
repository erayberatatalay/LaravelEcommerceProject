<?php

namespace App\Http\Controllers\Yonetim;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnasayfaController extends Controller
{
    public function index()
    {
        $istatistikler = [
            'bekleyen_siparis' => 'xx',
            'tamamlanan_siparis' => 'xx',
            'toplam_urun' => 'xx',
            'toplam_kullanici' => 'xx',
            'toplam_kategori ' => 'xx',
        ];
        return view('yonetim.anasayfa',compact('istatistikler'));
    }
}
