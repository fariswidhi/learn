@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
    	<div class="col-md-4">
    		<form action="{{url('admin/'.$url.'/'.$data->id)}}" method="post">
    		{{method_field('PUT')}}
    		{{csrf_field()}}
    		<label>Nama</label>
    			<input type="text" name="name" class="form-control" required value="{{$data->name}}">
            <label>Materi</label>
                <textarea required class="form-control" name="content">{{$data->content}}</textarea>
            <label>Mata Pelajaran</label>
            <select class="form-control" required name="subjects">  
                <option value="">Pilih Mata Pelajaran</option>
                @foreach ($subjects as $subject)
                    <option {{$data->id_subject == $subject->id ? 'selected':''}} value="{{$subject->id}}">{{$subject->name}}</option>
                @endforeach
            </select>
            <br>
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection