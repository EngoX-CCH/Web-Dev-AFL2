@extends('Layout.MainLayout')

@section('container')
    <h1>{{$mainText}} </h1>

    <img src="../{{ $perfume['image']}}" style="width: 100px">

    <h2>Name : {{ $perfume['name'] }}</h2>
    {{-- <h3>Contact : {{ $perfume['contact'] }}</h3> --}}

@endsection