@extends('Layout.layout')

@section('container')

<body>
    <div class="homeDescription">
        <h1 class="">{{$mainText}}</h1>
        <br>
        <br>
        <h3>{{$description}}</h3>
        <h3>{{$extradescription}}</h3>
        <br>
        <br>
        <button type="button" class="btn btn-dark">See product <a href="/about">HERE!</a></button>
    </div>


    
    <div class="homeImage">
        <img src="images/client_perfume.jpg" width="400" height="400">
    </div>
    
</body>

@endsection