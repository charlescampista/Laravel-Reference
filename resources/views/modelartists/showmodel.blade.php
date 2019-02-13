@extends('layout') 
@section('page-title') {{$model->name}}
@endsection
 
@section('page-content')
<div class="container-fluid">
    <div class="col-12-sm col-12-md col-12-lg text-center">
        <h1>{{$model->name}}</h1>
        <img src="{{$model->image}}" alt="" class="img-fluid">
    </div>
</div>
@endsection