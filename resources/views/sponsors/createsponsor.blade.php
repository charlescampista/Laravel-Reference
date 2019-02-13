@extends('layout') 
@section('page-content')
<form method="POST" action="/sponsor"> {{csrf_field()}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Company name" name="name">
    </div>
    <div class="form-group">
        <label for="image">Image Link</label>
        <input type="text" class="form-control" id="image" placeholder="Image link" name="image">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Description for your company" name="description">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Company nationality" name="country">
    </div>

    <div class="form-group">
        <label for="slogan">Slogan</label>
        <input type="text" class="form-control" id="slogan" placeholder="Your company slogan" name="slogan">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection