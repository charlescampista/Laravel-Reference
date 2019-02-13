@extends('layout') 
@section('page-title') Edit Donator
@endsection
 
@section('page-content')
<form method="POST" action="/models/{{$model->id}}">
    {{csrf_field()}} {{method_field('PATCH')}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{$model->name}}">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age" value="{{$model->age}}">
    </div>

    <div class="form-group">
        <label for="image">Perfil Image</label>
        <input type="text" class="form-control" id="image" placeholder="Link of the image" name="image" value="{{$model->image}}"
            ]>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" id="description" placeholder="Tell us about you" name="description">{{$model->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" value="{{$model->city}}">
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Nationality" name="country" value="{{$model->country}}">
    </div>

    <div class="form-group">
        <label for="ethnicity">Ethnicity</label>
        <input type="text" class="form-control" id="ethnicity" placeholder="Your Race" name="ethnicity" value="{{$model->ethnicity}}">
    </div>

    <div class="form-group form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="/models/{{$model->id}}" method="POST" class="form-group">
    @method('DELETE')
    @csrf
    <button class="btn" type="submit">Delete</button>
</form>
@endsection