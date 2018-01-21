@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$data->title}}</h4>
    <span>{{$data->created_at}}</span>
    <hr>
    <div class="row">
    <div class="col-lg-3">
                @if ($data->photo != null)
            {{-- expr --}}
            <img src="{{url('uploads/'.$data->photo)}}" alt="" class="img-fluid">
        @endif
    </div>
    	<div class="col-md-12">

        {!! $data->content !!}
    	</div>
    	
    </div>
    </div>
@endsection