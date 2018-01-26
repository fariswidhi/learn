@extends('dashboard.dashboard')

@section('content')
<div class="container">
	
<div class="card">
	<div class="card-body">
	<div class="row">
		<div class="col-lg-5">
   @if (Session::has('failed'))
    @component('alerts.danger')
    @slot('title')
    {{session('failed')}}
    @endslot
@endcomponent
  <br>
    @endif

		<h3>Ubah Data Anak</h3>
			<form action="{{@route('daftar-anak.update',$data->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<label>Nama</label>
				<input type="text" name="name" class="form-control" required  autocomplete="off" value="{{$data->name}}">
				<label>Username</label>
				<input type="text" name="username" class="form-control"   autocomplete="off" value="{{$data->username}}" readonly>
				<label>Email</label>
				<input type="text" name="email" class="form-control" required  autocomplete="off" value="{{$data->email}}">
				<label>Password</label>
				<input type="password" name="password" class="form-control"   autocomplete="off">

				<label>Jenjang</label>
				<select class="form-control" name="level" required>
				<option value="">Plih Jenjang Anak</option>
				@foreach ($levels as $level)
					<option {{$data->id_level == $level->id ? 'selected' : ''}} value="{{$level->id}}">{{$level->name}}</option>
				@endforeach
				</select>
				<label>Jenis Kelamin</label>
				<select class="form-control" name="gender">
				<option {{$data->gender=='laki-laki' ? 'selected' : ''}} value="laki-laki">Laki - Laki</option>
					<option {{$data->gender=='perempuan' ? 'selected' : ''}} value="perempuan">Perempuan</option>
				</select>
				<button type="submit" class="btn btn-success">Simpan</button>
			</form>
		</div>
	</div>
	</div>
</div>
</div>
@endsection