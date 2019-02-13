@extends('layout') 
@section('page-content')
<h1>{{$parameters['title']}}</h1>
<div class="row">
    @foreach ($dbHouses as $item)
    <div class="text-center col-sm-12 col-md-6 col-lg-6">
        <h1>{{$item['name']}}</h1>
        <img class="img-fluid" src="{{$item['imagePath']}}" alt="">
        <p>{{$item['description']}}</p>
        <h5>{{$item['type']}}</h5>
    </div>
    @endforeach
</div>
@endsection