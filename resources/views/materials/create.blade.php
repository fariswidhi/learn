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
            <label>Materi</label>
                <textarea required class="form-control" name="content"></textarea>
            <label>Mata Pelajaran</label>
            <select class="form-control" required name="subjects">  
                <option value="">Pilih Mata Pelajaran</option>
                @foreach ($datas as $data)
                    {{-- expr --}}
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
            <br>
            <label>Jenjang</label>
            <select class="form-control" required name="levels">  
                <option value="">Pilih Jenjang</option>
                @foreach ($levels as $data)
                    {{-- expr --}}
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
            <br>
            
    			<button type="submit" class="btn btn-success">Simpan</button>
    		</form>
    	</div>
    	
    </div>
    </div>
@endsection