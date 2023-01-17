<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eticaret Projesi</title>
</head>
<body>
Merhaba {{$isim . " ".$soyisim }}
<hr>
@if($isim=='eray')
    Hoşgeldin Eray<br>
@elseif($isim=='berat')
    Hoşgeldin Berat<br>
@endif
<hr>
@switch($isim)
    @case('eray')
        Hoşgeldin Eray<br>
        @break
    @case('berat')
        Hoşgeldin Berat<br>
        @break
@endswitch
<hr>
@for($x=0;$x<=10;$x++)
    Dögü Değeri : {{$x}}
@endfor
<hr>
@php $x=0 @endphp
@while($x<=10)
    Dögü Değeri : {{$x}}
    @php $x++ @endphp
@endwhile
<hr>
@foreach($isimler as $isim)
    {{$isim . ($isim !== end($isimler) ? ', ':'')}}
@endforeach
<hr>
@foreach($kullanicilar as $kullanici)
    @continue($kullanici['id']== 1)
    <li>{{$kullanici['kullanici_adi']}}</li>
    @break($kullanici['id'] == 4)
@endforeach
<hr>
@php $html='<b>Html Formatında yazdırma</b>' @endphp
{!! $html !!}
<hr>

</body>
</html>
