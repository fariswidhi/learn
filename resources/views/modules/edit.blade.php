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
            <label>Mata Pelajaran</label>
            <select class="form-control" required name="subjects">  
                <option value="">Pilih Mata Pelajaran</option>
                @foreach ($subjects as $d)
                    {{-- expr --}}
                    <option {{$d->id == $data->id_subjects ? 'selected':''}} value="{{$d->id}}">{{$d->name}}</option>
                @endforeach
            </select>
            <label>Waktu</label>
            <input type="number" name="time" class="form-control" value="{{$data->time}}">
            <br>
            <label>Jenjang</label>
            <select class="form-control" required name="levels">  
                <option value="">Pilih Jenjang</option>
                @foreach ($levels as $level)
                    {{-- expr --}}
                    <option {{ $level->id==$data->id_level ? 'selected' : ''}} value="{{$level->id}}">{{$level->name}}</option>
                @endforeach
            </select>
            <label>Deskripsi</label>
            <textarea name="desription" class="form-control">{{$data->description}}</textarea>
            <br>
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection
