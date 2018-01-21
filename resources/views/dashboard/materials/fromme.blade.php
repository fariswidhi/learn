@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

	<h3>Daftar Materi Pelajaran Dari Saya</h3>
		<br>
		<br>
		@if (Auth::user()->type==2)

		<a href="{{ url('/panel/daftar-materi/create') }}" class="btn btn-primary">Buat Materi</a>
		@endif
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
					<td><a href="{{ url('panel/materi/'.$d['subject'].'/'.$d['permalink'].'-'.$d['id']) }}">{{$d['name'] }}</a></td>
					@if (Auth::user()->type ==2)
						{{-- expr --}}
					<td><a href="{{ url('panel/daftar-materi/'.$d['id'].'/edit') }}" class="btn btn-success ">Edit</a> <form style="display: inline-block;" action="{{ url('panel/daftar-materi/'.$d['id']) }}" method="post">{{ csrf_field() }}
						{{method_field("DELETE")
						}}   <button class="btn btn-danger " type="submit">Hapus</button></form></td>
					@endif
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection