@if ($errors->any()) 

    @foreach ($errors->all() as $error)
    <ul>
        <div class="alert alert-danger">
            <li>{{$error}}</li>
        </div>
    </ul>
    @endforeach 
    
    @endif