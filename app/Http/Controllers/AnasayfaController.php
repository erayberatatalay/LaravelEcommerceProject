<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AnasayfaController extends Controller
{
    /*public function index()
    {
        $isim = "eray";
        $soyisim = "atalay";
        $isimler = ['eray', 'berat', 'atalay'];
        $kullanicilar = [
            ['id'=>'1','kullanici_adi'=>'eray'],
            ['id'=>'2','kullanici_adi'=>'berat'],
            ['id'=>'3','kullanici_adi'=>'atalay'],
            ['id'=>'4','kullanici_adi'=>'melek'],
            ['id'=>'5','kullanici_adi'=>'özdemir']
        ];
        return view('anasayfa', ['isim' => 'eray']);
        return view('anasayfa', compact('isim', 'soyisim', 'isimler','kullanicilar'));
        return view('anasayfa')->with(['isim' => 'eray', 'soyisim' => "atalay"]);
    }*/
    public function index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(8)->get();
        return view('anasayfa', compact('kategoriler'));
    }
}
