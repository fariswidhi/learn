@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

   @if (Session::has('success'))
    @component('alerts.success')
    @slot('title')
    {{session('success')}}
    @endslot
@endcomponent
  <br>
    @endif

	<h3>Nilai Saya</h3>
		<br>
		<br>

	<div class="row">
		<div class="col-lg-6">
		
		<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Modul</th>
			<th>Nilai</th>
			<th>Tanggal</th>
		</thead>
		@foreach ($data as $d)
			{{-- expr --}}
			<tr>
				<td>{{$no++}}</td>
				<td>{{$d->module->name}}</td>
				<td>{{$d->point}}</td>
				<td>{{$d->created_at}}</td>
			</tr>
		@endforeach
		</table>	
		{{$data->links('vendor.pagination.bootstrap-4')}}
		</div>
	</div>
	</div>
</div>
</div>
@endsection