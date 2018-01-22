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

<h3>Aktivitas</h3>
<br>
    <div class="row">

    @foreach ($arr as $d)
    	<div class="col-6">

			<div class="row">
				<div class="col-lg-3">
			<center><i class="fa fa-user fa-4x"></i>
			{{$d['username']}}
			</center>

				</div>
				<div class="col-lg-8">
				<ul class="list-group"> 

@foreach ($d['activity'] as $data)
	{{-- expr --}}
					{{-- expr --}}
					<li class="list-group-item">
	{!!$data['times']."<br>"!!} 
	{{$data['activity']}}
		{{$data['name']}}


					</li>
@endforeach

<li class="list-group-item">
<center>
	<a class="btn btn-default" href="{{ url('/panel/aktivitas-anak/'.$d['username']) }}">Lihat Semua</a>
	</center>
</li>

				</ul>
				</div>
			</div>
    	</div>
    @endforeach
    </div>
	</div>
</div>
</div>
@endsection