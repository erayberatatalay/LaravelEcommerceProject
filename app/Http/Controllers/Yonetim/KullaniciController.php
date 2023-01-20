<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Auth;
use Hash;

class KullaniciController extends Controller
{
    public function oturumac()
    {
        if (request()->isMethod('POST')) {
            $this->validate(request(), [
                'email' => 'required|email',
                'sifre' => 'required'
            ]);

            $credentials = [
                'email' => request()->get('email'),
                'password' => request()->get('sifre'),
                'yonetici_mi' => 1,
                'aktif_mi' => 1
            ];

            if (Auth::guard('yonetim')->attempt($credentials, request()->has('benihatirla'))) {
                return redirect()->route('yonetim.anasayfa');
            } else {
                return back()->withInput()->withErrors(['email' => 'Giriş hatalı!']);
            }
        }

        return view('yonetim.oturumac');
    }

    public function oturumukapat()
    {
        Auth::guard('yonetim')->logout();

        return redirect()->route('yonetim.oturumac');
    }
}
