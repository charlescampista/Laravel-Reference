@extends('layout')
@section('page-title')
    Edit
@endsection

@section('page-content')
<form action="/donator/{{$donator->id}}" method="POST"> 
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
        <label for="Name">Name</label>
    <input type="text" class="form-control" placeholder="Donator name" id="name" name="name" value="{{$donator->name}}">
    </div>

    <div class="form-group">
        <label for="image">Image Link</label>
    <input type="text" class="form-control" id="image" placeholder="Image link" name="image" value="{{$donator->image}}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="About the donator" name="description" value="{{$donator->description}}">
    </div>

    <div class="form-group">
        <label for="donation">Donation</label>
    <input type="text" class="form-control" id="donation" placeholder="Kind of contribuition" name="donation" value="{{$donator->donation}}">
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form method="POST" action="/donator/{{$donator->id}}" class="form-group">
    @method('DELETE')
    @csrf
    <button class="btn" type="submit">Delete</button>
</form>
@endsection