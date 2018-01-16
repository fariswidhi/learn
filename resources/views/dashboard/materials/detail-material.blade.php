@extends('dashboard.dashboard')

@section('content')

<div class="card">
	<div class="card-body">

		<h3>{{$data->name}}</h3>

	<div class="row">
		<div class="col-lg-4">
			<table class="table table-condensed">
				<tr>
					<td>Mata Pelajaran</td><td>:</td><td>{{$subjectname}}</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-12">
		{{$data->content}}
		</div>
	</div>
	</div>
</div>
@endsection