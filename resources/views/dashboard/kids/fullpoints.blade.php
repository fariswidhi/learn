@extends('dashboard.dashboard')

@section('content')
<div class="container">
	
<div class="card">
	<div class="card-body">
	<div class="row">
		<div class="col-lg-6">
			<h4>Daftar Nilai</h4>
			<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Modul</th>
				<th>Nilai</th>
				<th>Waktu</th>
			</thead>
			<tbody>
			@php
				$no=1;
			@endphp
			@foreach ($points as $p)
					{{-- expr --}}
					<tr>
						<td>{{$no++}}</td>
						<td>{{$p->module->name}}</td>
						<td>{{$p->point}}</td>
						<td>{{$p->created_at}}</td>
					</tr>
				@endforeach
</tbody>

			</table>
			{{$points->links('vendor.pagination.bootstrap-4')}}

		</div>
	</div>
	</div>
</div>
</div>
@endsection