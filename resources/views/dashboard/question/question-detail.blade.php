@extends('dashboard.dashboard')

@section('content')
<div class="container">

		<div class="row">


					<div class="col-lg-12" style="padding: 10px;">

					<div class="card">
							<div class="card-body">
							<div class="col-lg-6" style="float: none;margin: 0 auto;">
								<table class="table table-hover">
									<tr>
										<td>Mata Pelajaran</td><td>{{$subject}}</td>
									</tr>
									<tr>
										<td>Waktu</td><td>{{$time}}</td>
									</tr>
								</table>
								<center>
								<a class="btn btn-primary" href="{{ url('/dashboard/question/'.$param1.'/'.$param2.'/start') }}">Mulai</a>
								</center>
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