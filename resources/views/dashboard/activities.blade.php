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

	<h3>Aktivitas</h3>
		<br>
		<br>

	<div class="row">
		<div class="col-lg-12">
		
		<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Aktivitas</th>
			<th>Waktu</th>
		</thead>
		<tbody>
		@for ($i = 0; $i < count($arr['activity']) ; $i++)
			{{-- expr --}}

		<tr>
			<td>{{$no++}}</td>
			<td>{{$arr['activity'][$i]['activity']." ".$arr['activity'][$i]['name']}}</td>
			<td>{{$arr['activity'][$i]['times']}}</td>
		</tr>
		@endfor
</tbody>
		</table>	
		</div>
	</div>
	</div>
</div>
</div>
@endsection