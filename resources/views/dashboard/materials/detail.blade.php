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

			@if (count($data) == 0)
				{{-- expr --}}
				<tr>
					<td colspan="2"><center>Tidak Ada data</center></td>
				</tr>
			@else

			@foreach ($data as $d)
				{{-- expr --}}
				<tr>
				<td>{{$no++}}</td>
					<td><a href="{{ url('panel/daftar-materi/'.$param.'/'.$d['permalink'].'-'.$d['id']) }}">{{$d['name'] }}</a></td>
				</tr>
			@endforeach
			@endif
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection