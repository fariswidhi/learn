@extends('dashboard.dashboard')

@section('content')
<div class="container">
	
<div class="card">
	<div class="card-body">
	<h3>Aktivitas </h3>
	<div class="row">
		<div class="col-lg-5">
		<table class="table table-responsive">
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

		</div>
	</div>
	</div>
</div>
</div>
@endsection