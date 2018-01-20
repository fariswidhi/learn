@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
    	<div class="col-md-6">
    		<form action="{{url('admin/'.$url)}}" method="post" enctype="multipart/form-data">
    		{{method_field('POST')}}
    		{{csrf_field()}}
    		<label>Judul</label>
    			<input type="text" name="name" class="form-control" required>
            <label>Artikel</label>
                <textarea required class="form-control" name="content"></textarea>
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            <br>
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection