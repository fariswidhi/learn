@extends('dashboard.dashboard')

@section('content')

<div class="container">
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
		<div class="pull-right">
	<form action="{{ url('/panel/daftar-materi/') }}" method="get">
		<input type="text" name="q" class="form-control" placeholder="Cari Materi" value="{{ $q!='' ? $q : '' }}">
	</form>
</div>
			<h3>Hasil Pencarian</h3>
			<br>
			<ul class="list-group">
			@if (count($data) !=0)
				{{-- expr --}}
	@foreach ($data as $d)
		{{-- expr --}}
		<li class="list-group-item"><a href="{{ url('/panel/daftar-materi/'.$d['subject'].'/'.$d['permalink'].'-'.$d['id']) }}">{{$d['name']}}</a></li>
	@endforeach
	@else
	<li class="list-group-item">Tidak Ada Data</li>
	@endif
	</ul>
		</div>
	</div>
</div>
	
</div>
@endsection