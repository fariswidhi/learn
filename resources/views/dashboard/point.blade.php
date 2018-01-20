@extends('dashboard.dashboard')

@section('content')

<div class="container">
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<h3>Daftar Nilai Anak</h3>
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Nama</th>
			<th>Modul</th>
			<th>Nilai</th>
		</thead>
		<tbody>
		@foreach ($points as $p)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$p->user->name}}</td>
			<td>{{$p->module->name}}</td>
			<td>{{$p->point}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>

		</div>
	</div>
</div>
	
</div>
@endsection