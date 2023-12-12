<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Profil</title>
</head>
<body>

    <h1>Profil &#128112;</h1>
    <hr>
    <table border='0'>
        @if($nama == 'Herlina')
            <tr>
                <td>Nama Saya :</td>
                <td>{{ $nama }} </td>
            </tr>
        @endif
    </table>

    <hr>
    <h1>Contoh Penerapan
        <br> Nama= Herlina Utari
        <br> Nama= Lilis Risnawati
        <br> Nama= Tia amila
     </head>

     <h1>Contoh forelse </h1>
<table>
    @forelse( ['nama'] as $data)
    <tr>
        <td> Nama </td>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse
</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<5;$i++)
        {{$i}}<br>
    @endfor
</table>