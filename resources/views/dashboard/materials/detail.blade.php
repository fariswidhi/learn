@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

	<h3>Daftar Materi Pelajaran</h3>
		<br>
		<br>
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Nama</th>
			</thead>
			<tbody>

			@foreach ($data as $d)
				{{-- expr --}}
				<tr>
				<td>{{$no++}}</td>
					<td><a href="{{ url('panel/daftar-materi/'.$param.'/'.$d['permalink'].'-'.$d['id']) }}">{{$d['name'] }}</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection