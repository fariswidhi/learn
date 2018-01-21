@extends('dashboard.dashboard')

@section('content')
<div class="container">

		<div class="row">

				
					<div class="col-lg-12" style="padding: 10px;">
						<div class="card">
							<div class="card-body">
							<h4>Detail Pertanyaan</h4>
							<hr>
							<h3>{{$data->name}}</h3>
							<hr>
					<div class="col-lg-4">
						
		<table class="table table-striped">
							@foreach ($answers as $answer)
		<tr>
			<td>{!! $answer->true ==1 ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' !!}</td>
			<td>{{$answer->answer}}</td>
		</tr>
							@endforeach
							</table>
					</div>
							</div>
						</div>
					</div>

		</div>
	</div>


{{--             'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'time'=>$m->time, --}}
@endsection