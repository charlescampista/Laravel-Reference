@extends('layout')
@section('page-title')
    Edit
@endsection

@section('page-content')
<form action="/car/{{$car->id}}" method="POST"> 
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
        <label for="Name">Name</label>
    <input type="text" class="form-control" placeholder="Car name" id="name" name="name" value="{{$car->name}}">
    </div>

    <div class="form-group">
        <label for="image">Image Link</label>
    <input type="text" class="form-control" id="image" placeholder="Image link" name="image" value="{{$car->image}}">
    </div>

    <div class="form-group">
        <label for="brad">Brad</label>
    <input type="text" class="form-control" id="brand" placeholder="Brand" name="brand" value="{{$car->brand}}">
    </div>

    <div class="form-group">
        <label for="color">Color</label>
    <input type="text" class="form-control" id="color" placeholder="Color" name="color" value="{{$car->color}}">
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form method="POST" action="/car/{{$car->id}}" class="form-group">
    @method('DELETE')
    @csrf
    <button class="btn" type="submit">Delete</button>
</form>
@endsection