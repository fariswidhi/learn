@extends('dashboard.dashboard')

@section('content')

<div class="container">
<div class="card">
    <div class="card-body">
        
        <div class="row">

        <div class="col-md-4">
        <h5>{{$data->name}}</h5>
        <hr>
        <ul class="list-group">
            
        @foreach ($answers as $answer)
            <li class="list-group-item">{{$answer->answer}}</li>
        @endforeach
        </ul>

        </div>
        
    </div>
    </div>
</div>
    </div>

@endsection