@extends('layout')
@section('page-title')
    Cars
@endsection
@section('page-content')
<a href="\car\create">REGISTER CAR</a>
<div class="row">
    @foreach ($cars as $item)
    <div class="text-center col-sm-12 col-md-6 col-lg-6">
        <h1> {{$item->name}} </h1>
        <img class="img-fluid" src="{{$item->image}}" alt="">
        <p> {{$item->description}} </p>
        <h5> {{$item->brand}} </h5>
        <h5> {{$item->color}} </h5>
        <p> {{$item->city}} </p>
        <p> {{$item->ethnicity}} </p>
        <h3><a href="/car/{{$item->id}}">View</a></h3>
        <h3><a href="/car/{{$item->id}}/edit">Edit</a></h3>
    </div>
    @endforeach
</div>
@endsection