@extends('layout') 
@section('page-title') Sponsors
@endsection
 
@section('page-content')
<a href="/sponsor/create">REGISTER SPONSOR</a>
<div class="row">
    @foreach ($sponsors as $sponsor)
    <div class="col-sm-12 col-md-6 col-lg-6">
        <h1>{{$sponsor->name}}</h1>
        <img class="img-fluid" src="{{$sponsor->image}}" alt="" srcset="">
        <p>{{$sponsor->description}}</p>
        <h3>{{$sponsor->country}}</h3>
        <h2>{{$sponsor->slogan}}</h2>
    <h3><a href="/sponsor/{{$sponsor->id}}">View</a></h3>
    <h3><a href="/sponsor/{{$sponsor->id}}/edit">Edit</a></h3>
    </div>
    @endforeach
</div>
@endsection