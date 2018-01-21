@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
      <div class="col-md-4">
      <hr>
    <h3>  {{$data->name}}</h3>
    <hr>
    <table class="table table-striped">
    @foreach ($answers as $answer)
      <tr>
        <td>{{$answer->answer}}</td><td>  {!!$answer->true==1 ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'!!}</td>
      </tr>
    @endforeach
    </table>
      </div>
      
    </div>
    </div>
@endsection
