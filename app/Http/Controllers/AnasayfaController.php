<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;

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

        $urunler_slider = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_slider', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(config('ayar.anasayfa_slider_urun_adet'))->get();

        $urun_gunun_firsati = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_gunun_firsati', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->first();

        $urunler_one_cikan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_one_cikan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            //->take(get_ayar('anasayfa_liste_urun_adet'))->get();
            ->get();
        $urunler_cok_satan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_cok_satan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            //->take(get_ayar('anasayfa_liste_urun_adet'))->get();
            ->get();
        $urunler_indirimli = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_indirimli', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            //->take(get_ayar('anasayfa_liste_urun_adet'))->get();
            ->get();
        return view('anasayfa', compact('kategoriler', 'urunler_slider', 'urun_gunun_firsati', 'urunler_one_cikan', 'urunler_cok_satan', 'urunler_indirimli'));
    }
}
