@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
    	<div class="col-md-4">
    		<form action="{{url('admin/'.$url.'/'.$id)}}" method="post">
    		{{method_field('PUT')}}
    		{{csrf_field()}}
    		<label>{{$title}}</label>
    			<input type="text" name="name" class="form-control" value="{{$data->name}}">
    			<br>
    			<button type="submit" class="btn btn-success">Ubah</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection