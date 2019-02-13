@extends('layout') 
@section('page-title') Resgister Car
@endsection
 
@section('page-content')
<form action="/car" method="POST"> {{csrf_field()}}
    <div class="form-group">
        <label for="Name">Name</label>
    <input type="text" class="form-control" placeholder="Car name" id="name" name="name" value="{{old('name')}}" required>
    </div>

    <div class="form-group">
        <label for="image">Image Link</label>
    <input type="text" class="form-control {{$errors->has('image') ? 'btn-secondary': ''}}" id="image" placeholder="Image link" name="image" value="{{old('image')}}">
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="brand" placeholder="Brand" name="brand" value="{{old('brand')}}">
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" class="form-control" id="color" placeholder="Color" name="color" value="{{old('color')}}">
    </div>
    @if ($errors->any()) 

    @foreach ($errors->all() as $error)
    <ul>
        <div class="alert alert-danger">
            <li>{{$error}}</li>
        </div>
    </ul>
    @endforeach 
    
    @endif



    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection