@extends('dashboard.dashboard')

@section('content')
<div class="container">

		<div class="row">

				@foreach ($data as $d)
					<div class="col-lg-3" style="padding: 10px;">
					<a href="{!! url("/panel/soal/".$param.'/'.$d['permalink'].'-'.$d['id']) !!}">
						<div class="card">
							<div class="card-body">
							<center><h3>{{$d['name']}}</h3>
							<br>
														<i class="fa fa-clock-o"></i> {{$d['time']. " Menit"}}
							</center>

							</div>
						</div>
						</a>
					</div>
				@endforeach

		</div>
	</div>


{{--             'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'time'=>$m->time, --}}
@endsection