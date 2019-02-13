@extends('layout')
@section('page-title')
    {{$sponsor->name}}
@endsection

@section('page-content')
    <div class="container-fluid">
    <h1>{{$sponsor->name}}</h1>
    <img src="{{$sponsor->image}}" alt="" class="img-fluid">
    <p> {{$sponsor->description}} </p>
    <h3> {{$sponsor->country}} </h3>
    <h2>{{$sponsor->slogan}}</h2>
    </div>
@endsection