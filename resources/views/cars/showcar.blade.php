@extends('layout')
@section('page-title')
    {{$car->name}}
@endsection

@section('page-content')
<h1>{{$car->name}}</h1>
<img src="{{$car->image}}" alt="" class="img-fluid">
<h4>{{$car->brand}}<h4>
<h4>{{$car->color}}</h4>    
@endsection