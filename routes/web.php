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
