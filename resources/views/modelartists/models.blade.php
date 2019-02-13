@extends('layout') 
@section('page-title') Models
@endsection
 
@section('page-content')
<a href="\models\create">REGISTER MODEL</a>
<div class="row">
    @foreach ($models as $item)
    <div class="text-center col-sm-12 col-md-6 col-lg-6">
        <h1> {{$item->name}} </h1>
        <img class="img-fluid" src="{{$item->image}}" alt="">
        <p> {{$item->description}} </p>
        <h5> {{$item->age}} Years old.</h5>
        <p> {{$item->country}} </p>
        <p> {{$item->city}} </p>
        <p> {{$item->ethnicity}} </p>
        <h3><a href="/models/{{$item->id}}">View</a></h3>
        <h3><a href="/models/{{$item->id}}/edit">Edit</a></h3>
    </div>
    @endforeach
</div>
@endsection