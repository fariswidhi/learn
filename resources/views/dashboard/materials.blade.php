@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

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

				@foreach ($data as $d)
					<div class="col-6 col-lg-3" style="padding: 10px;">
					<a href="{!! url("/panel/daftar-materi/".$d['permalink'].'-'.$d['id']) !!}">
						<div class="card" style="height: 200px">
							<div class="card-body">
							<center><h3>{{$d['name']}}</h3></center>
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