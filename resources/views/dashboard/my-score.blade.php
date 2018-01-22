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
		@foreach ($data as $d)
			{{-- expr --}}
			<tr>
				<td>{{$no++}}</td>
				<td>{{$d->module->name}}</td>
				<td>{{$d->point}}</td>
			</tr>
		@endforeach
		</table>	
		</div>
	</div>
	</div>
</div>
</div>
@endsection