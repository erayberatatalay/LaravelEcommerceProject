<?php
/*Route::get('/', function () {
    return view('anasayfa');
});

Route::get('/merhaba', function () {
    return 'welcome';
});

Route::get('/api/v1/merhaba', function () {
    return ['mesaj' => 'welcome'];
});

Route::get('/urun/{urunadi}/{id?}', function ($urunadi, $id = 0) {
    return "Ürün Adı: $urunadi $id";
})->name('urun_detay');

Route::get('/kampanya', function () {
    return redirect()->route('urun_detay', ['urunadi' => 'elma', 'id' => 5]);
});*/
Route::get('/', 'AnasayfaController@index');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');
Route::get('/sepet', 'SepetController@index')->name('sepet');
Route::get('/odeme', 'OdemeController@index')->name('odeme');
Route::get('/siparisler', 'SiparisController@index')->name('siparisler');
Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');

Route::group(['prefix' => 'kullanici'], function () {
    Route::get('/oturumac', 'KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac', 'KullaniciController@giris');
    Route::get('/kaydol', 'KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol', 'KullaniciController@kaydol');
    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');
    Route::post('/oturumukapat', 'KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
});
