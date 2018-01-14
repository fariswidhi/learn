@extends('dashboard.dashboard')

@section('content')

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
			<form action="{{@route('kids.update',$data->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<label>Nama</label>
				<input type="text" name="name" class="form-control" required  autocomplete="off" value="{{$data->name}}">
				<label>Username</label>
				<input type="text" name="username" class="form-control"   autocomplete="off" value="{{$data->username}}" readonly>
				<label>Password</label>
				<input type="password" name="password" class="form-control"   autocomplete="off">
				<br>
				<button type="submit" class="btn btn-success">Simpan</button>
			</form>
		</div>
	</div>
	</div>
</div>
@endsection