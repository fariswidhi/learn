@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

		<h3>{{$data->name}}</h3>

	<div class="row">
		<div class="col-lg-6">
			<table class="table table-condensed">
				<tr>
					<td>Mata Pelajaran</td><td>:</td><td>{{$data->subject->name}}</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-12">
		{{$data->content}}
		@if (!empty($data->file))
		<embed style="width: 100%;height: 500px;" src="{{asset('/uploads/'.$data->file)}}"></embed>
		@endif
		</div>
	</div>
	</div>
</div>
</div>
@endsection