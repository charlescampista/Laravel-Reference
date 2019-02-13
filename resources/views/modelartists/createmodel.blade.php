@extends('layout') 
@section('page-content')
<form method="POST" action="/models">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age">
    </div>

    <div class="form-group">
        <label for="image">Perfil Image</label>
        <input type="text" class="form-control" id="image" placeholder="Link of the image" name="image">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" id="description" placeholder="Tell us about you" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city">
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Nationality" name="country">
    </div>

    <div class="form-group">
        <label for="ethnicity">Ethnicity</label>
        <input type="text" class="form-control" id="ethnicity" placeholder="Your Race" name="ethnicity">
    </div>

    <div class="form-group form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection