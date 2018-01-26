@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">
<div class="pull-right">
	<form action="{{ url('/panel/daftar-materi/') }}" method="get">
		<input type="text" name="q" class="form-control" placeholder="Cari Materi">
	</form>
</div>
   @if (Session::has('success'))
    @component('alerts.success')
    @slot('title')
    {{session('success')}}
    @endslot
@endcomponent
  <br>
    @endif


		<br>
		<br>
		<div class="row">

					<div class="col-12 col-lg-3" style="padding: 10px;">
						@if (Auth::user()->type == 2)
					<a href="{!! url("/panel/daftar-materi/dari-saya") !!}">
					@else
					<a href="{!! url("/panel/daftar-materi/dari-orangtua") !!}">
					@endif
						<div class="card" style="height: 200px">

							<div class="card-body">
							@if (Auth::user()->type == 2)
								{{-- expr --}}
							<center><h3 style="margin-top: 15%;">Dari Saya</h3></center>
							@else

							<center><h3  style="margin-top: 15%;">Dari Orangtua</h3></center>
							@endif
							</div>
						</div>
						</a>
					</div>
				@foreach ($data as $d)
					<div class="col-12 col-sm-6 col-lg-3" style="padding: 10px;">
					<a href="{!! url("/panel/daftar-materi/".$d['permalink'].'-'.$d['id']) !!}">
						<div class="card text-white {{$colors[array_rand($colors)]}} mb-3" style="height: 200px">
							<div class="card-body">
							<center><h3 {!! strlen($d['name']) > 15 ? 'style="margin-top: 20%;font-size: 23px;"' : 'style="margin-top: 20%;font-size: 25px;"' !!}>{{$d['name']}}</h3></center>
							</div>
						</div>
						</a>
					</div>
				@endforeach

		</div>
	</div>
</div>
</div>
@endsection