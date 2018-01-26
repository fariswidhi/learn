@extends('dashboard.dashboard')

@section('content')

<div class="container">
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<h3>Profil</h3>

			<div class="col-lg-6">
				<table class="table table-striped">
					<tr>
						<td>Nama</td><td>{{$data->name}}</td>
					</tr>
					<tr>
						<td>Username</td><td>{{$data->username}}</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>{{$data->gender}}</td>
					</tr>
					@if ($data->type == 2)
					<tr>
						<td>Email</td><td>{{$data->email}}</td>
					</tr>
					<tr>
						<td>Nomor Hp</td><td>{{$data->phone}}</td>
					</tr>
					<tr>
						<td>Alamat</td><td>{{$data->address}}</td>
					</tr>

					<tr>
						<td>Status Akun</td><td>{{$data->active==0 ? 'Belum Terverifikasi':'Terverifikasi'}}</td>
					</tr>
					@else
					<tr>
						<td>Jenjang Sekolah</td><td>{{$data->level->name}}</td>
					</tr>

					@endif

				</table>
			</div>
		</div>
	</div>
</div>
	
</div>
@endsection