@extends('dashboard.dashboard')

@section('content')
<div class="container">
	
<div class="card">
	<h3>Ringkasan Data Anak</h3>
	<div class="card-body">
	<div class="row">
		<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-6">
		<h4>Profil</h4>
			<table class="table table-striped">
				<tr>
					<td>Nama</td><td>{{$user->name}}</td>
				</tr>
				<tr>
					<td>Username</td><td>{{$user->username}}</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td><td>{{$user->jenis_kelamin}}</td>
				</tr>
			</table>
		</div>
				
			</div>			
		</div>
<br>


		<div class="col-lg-7">
			<h4>Aktivitas Terakhir</h4>
			<table class="table table-responsive">
			@if (count($arr[0]['activity']) == 0)
				{{-- expr --}}
				<tbody>
					<tr>
						<td>Tidak Ada Data</td>
					</tr>
				</tbody>
			</table>
	@else
		<tbody>
		@for ($i = 0; $i < count($arr[0]['activity']) ; $i++)
			{{-- expr --}}

		<tr>
			<td>{{$no++}}</td>
				<td>{{$arr[0]['activity'][$i]['activity'].' '.$arr[0]['activity'][$i]['name']}}</td>
				<td>{{$arr[0]['activity'][$i]['times']}}</td>
		</tr>
		@endfor

			</table>
<center>
	<a class="btn btn-primary" href="{{ url('/panel/daftar-anak/'.$username.'/aktivitas') }}">Lihat Selengkapnya</a>
	</center>
				@endif
		</div>
		<div class="col-lg-6">
			<h4>Daftar Nilai</h4>
			<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Modul</th>
				<th>Nilai</th>
			</thead>
			<tbody>
			@php
				$no=1;
			@endphp
			@if (count($points) !=0)
				{{-- expr --}}

			@foreach ($points as $p)
					{{-- expr --}}
					<tr>
						<td>{{$no++}}</td>
						<td>{{$p->module->name}}</td>
						<td>{{$p->point}}</td>
					</tr>
				@endforeach
			@else
			<tr>
				<td>Tidak Ada Data</td>
			</tr>
			@endif
</tbody>

			</table>

	@if (count($points) !=0)
<center>
	<a class="btn btn-primary" href="{{ url('/panel/daftar-anak/'.$username.'/nilai') }}">Lihat Selengkapnya</a>
	</center>
	@endif
		<br>
		<br>
		<br>

		</div>


	</div>
	</div>
</div>
</div>
@endsection