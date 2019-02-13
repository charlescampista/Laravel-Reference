@extends('layout') 
@section('page-title') Donators
@endsection
 
@section('page-content')
<a href="/donator/create">REGISTER DONATOR</a>
<div class="row">
    @foreach ($donators as $donator)
    <div class="col-sm-12 col-md-6 col-lg-6">
        <h1>{{$donator->name}}</h1>
        <img src="{{$donator->image}}" alt="" class="img-fluid">
        <p>{{$donator->description}}</p>
        <h3>{{$donator->donation}}</h3>
        <h3><a href="/donator/{{$donator->id}}">View</a></h3>
        <h3><a href="/donator/{{$donator->id}}/edit">Edit</a></h3>
    </div>
    @endforeach
</div>
@endsection