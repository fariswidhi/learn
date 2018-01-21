@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">
		<h3>Ubah Materi</h3>
		<div class="row">
			<div class="col-lg-5">
				<form action="{{ route('daftar-materi.update',$data->id) }}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<label>Judul</label>
					<input type="text" name="name" class="form-control" value="{{$data->name}}">
				<label>Materi</label>
				<textarea class="form-control" name="content">{{$data->content}}</textarea><br>
				<label>Mata Pelajaran</label>
				<select class="form-control" name="subjects">
				@foreach ($subjects as $subject)
					<option {{$data->id_subject==$subject->id ? 'selected' :''}} value="{{$subject->id}}">{{$subject->name}}</option>
				@endforeach
				</select>
				<br>
				<label>Jenjang</label>
				<select class="form-control" name="levels">
				@foreach ($levels as $level)
					<option {{$data->id_level==$level->id ? 'selected' :''}} value="{{$level->id}}">{{$level->name}}</option>
				@endforeach
				</select>
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection