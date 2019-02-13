@extends('layout')
@section('page-title')
    Register
@endsection

@section('page-content')
    <form action="/donator" method="POST"> {{csrf_field()}}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" placeholder="Donator name" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="image">Image Link</label>
            <input type="text" class="form-control" id="image" placeholder="Image link" name="image">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="About the donator" name="description">
        </div>

        <div class="form-group">
            <label for="donation">Donation</label>
            <input type="text" class="form-control" id="donation" placeholder="Kind of contribuition" name="donation">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection