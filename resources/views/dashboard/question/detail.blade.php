@extends('dashboard.dashboard')

@section('content')
<div class="container">

		<div class="row">
			@if (count($data) == 0)
				{{-- expr --}}
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<center>Tidak Ada Data</center>
							</div>
						</div>
					</div>
			@else

				@foreach ($data as $d)
			<div class="col-12 col-lg-3" style="padding: 10px;">
					<a href="{!! url("/panel/soal/".$param.'/'.$d['permalink'].'-'.$d['id']) !!}">
				<div class="card text-white {{$colors[array_rand($colors)]}} mb-3" style="height: 200px">
							<div class="card-body">
							<center><h3 {!! strlen($d['name']) > 15 ? 'style="margin-top: 20%;font-size: 23px;"' : 'style="margin-top: 20%;font-size: 25px;"' !!}>{{$d['name']}}</h3></center>

							</div>
						</div>
						</a>
					</div>
				@endforeach
@endif
		</div>
	</div>


{{--             'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'time'=>$m->time, --}}
@endsection

