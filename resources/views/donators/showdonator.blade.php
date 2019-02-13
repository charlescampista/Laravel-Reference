@extends('layout') 
@section('page-title') {{$donator->name}}
@endsection
 
@section('page-content')
<h1>{{$donator->name}}</h1>
<img src="{{$donator->image}}" alt="" class="img-fluid">
<p>
    {{$donator->description}}
</p>
<h2>{{$donator->donation}}</h2>
@if ($donator->tasks->count())
<div class="card bg-info text-white">
    <h1>Tasks</h1>
    @foreach ($donator->tasks as $item)
    <h4>
        <form action="/donatortasks/{{$item->id}}" class="form-group" method="POST">
            @method('PATCH') @csrf
            <div class="form-check">
                <label class="form-check-label  {{$item->completed ? 'is-completed' : ''}}" for="completed">
                        <input type="checkbox" class="form-check-input" name="completed" onchange="this.form.submit()" {{$item->completed ? 'checked' : ''}}>
                        {{$item->description}}
                </label>
            </div>
        </form>
    </h4>
    @endforeach
</div>
@endif

<div class="bg-success text-white">
    <label for="task">New Task</label>
    <form action="/donatortasks/{{$donator->id}}/task" method="POST" class="form-group">
        @csrf
        <input type="text" class="form-control" name="description" placeholder="Add a new task">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    @include('errors')
</div>
@endsection