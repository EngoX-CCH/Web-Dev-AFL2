@extends('Layout.layout')

@section('container')


<div class="aboutText">
    <h1>{{$pagetitle}}</h1>
    <br>

    <p class="aboutDetail">Heshe adalah merek parfum lokal yang dirintis oleh 5 mahasiswa Universitas Ciputra. 
        Kehidupan yang sempurna harus didasari oleh dua sisi yang berpasangan merupakan 
        cerita yang diangkat oleh merek Heshe. Sehingga merek Heshe terlahir dari dua kata 
        yaitu “He” yang berarti laki-laki dan “She” yang berarti perempuan. 
        Keduanya merupakan simbol dari kunci kehidupan sempurna yang dapat menciptakan kehidupan yang abadi.</p>
    <br>

    <div class="aboutImage">
        <img src="images/HeShe_team_square.png" width="300" height="300">
    </div>
</div>

@endsection