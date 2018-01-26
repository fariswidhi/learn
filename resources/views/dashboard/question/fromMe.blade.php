@extends('dashboard.dashboard')

@section('content')
<div class="container">
@if (Auth::user()->type==2)
	<a href="{{ url('/panel/soal/buat') }}" class="btn btn-primary">Buat Soal</a>
@endif

		<div class="row">

		@if (count($data) !=0)
			{{-- expr --}}

		@foreach ($data as $d)
			{{-- expr --}}
					<div class="col-12 col-lg-3" style="padding: 10px;">
					@if (Auth::user()->type==2)
						{{-- expr --}}
			<a href="{{ url('/panel/soal/'.$d['permalink']) }}">
			@else
						<a href="{{ url('/panel/soal/'.$d['subject'].'/'.$d['permalink']) }}">
					@endif
					
						<div class="card text-white {{$colors[array_rand($colors)]}} mb-3" style="height: 200px">
							<div class="card-body">
						<center><h3 {!! strlen($d['name']) > 15 ? 'style="margin-top: 20%;font-size: 23px;"' : 'style="margin-top: 20%;font-size: 25px;"' !!}>{{$d['name']}}</h3></center>
							<br>
							

							</div>
						</div>
					</a>
					</div>
		@endforeach
		@else
		<div class="col-lg-12">
			<center><h3>Tidak Ada Data</h3></center>
		</div>
		@endif

		</div>
	</div>


{{--             'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'time'=>$m->time, --}}
@endsection