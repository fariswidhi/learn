@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
    	<div class="col-md-4">
    		<form action="{{url('admin/'.$url)}}" method="post">
    		{{method_field('POST')}}
    		{{csrf_field()}}
    		<label>Nama</label>
    			<input type="text" name="name" class="form-control" required>
            <label>Mata Pelajaran</label>
            <select class="form-control" required name="subjects">  
                <option value="">Pilih Mata Pelajaran</option>
                @foreach ($subjects as $data)
                    {{-- expr --}}
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
            <label>Waktu</label>
            <input type="number" name="time" class="form-control">
            <label>Deskripsi</label>
            <textarea name="desription" class="form-control"></textarea>
            <br>
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection
