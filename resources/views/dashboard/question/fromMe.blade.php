@extends('dashboard.dashboard')

@section('content')
<div class="container">
@if (Auth::user()->type==2)
	<a href="{{ url('/panel/soal/buat') }}" class="btn btn-primary">Buat Soal</a>
@endif
		<div class="row">
		@foreach ($data as $d)
			{{-- expr --}}
					<div class="col-lg-3" style="padding: 10px;">
					@if (Auth::user()->type==2)
						{{-- expr --}}
			<a href="{{ url('/panel/soal/'.$d['permalink']) }}">
			@else
						<a href="{{ url('/panel/soal/'.$d['subject'].'/'.$d['permalink']) }}">
					@endif
					
						<div class="card">
							<div class="card-body">
							<h3>{{$d['name']}}</h3>
							<br>
							

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