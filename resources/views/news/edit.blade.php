@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
    	<div class="col-md-4">
    		<form action="{{url('admin/'.$url.'/'.$data->id)}}" method="post">
    		{{method_field('PUT')}}
    		{{csrf_field()}}
    		<label>Judul</label>
    			<input type="text" name="name" class="form-control" required value="{{$data->title}}">
            <label>Artikel</label>
                <textarea required class="form-control" name="content">{{$data->content}}</textarea>
            <br>
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection