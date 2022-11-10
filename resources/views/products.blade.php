@extends('Layout.layout')

@section('container')
    <h1>{{$mainText}} </h1>

    @foreach ($perfumes as $perfume)
        <img src="../{{ $perfume['image']}}" style="width: 100px">
        <h2>Name : {{ $perfume['name'] }}</h2>
        <p>Description : {{ $perfume['description'] }}</p>
    @endforeach

@endsection
