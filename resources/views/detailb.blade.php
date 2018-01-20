@extends('layout.ap')


@section('content')

	<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-lg-12">
			
	<div class="card">
		<div class="card-body">
		<h1 >{{ $data->title }}</h1>
		<time>{{$data->created_at}}</time>
		<hr>
				@if ($data->photo != null)

			{{-- expr --}}
			<img src="{{ url('/uploads/'.$data->photo) }}" class="img-fluid">
		@endif


		<div class="content">
			<p>{!! $data->content !!}</p>
		</div>
		</div>
	</div>

		</div>
	</div>
	<br>
		<a href="{{ url('berita') }}" class="btn btn-info btn-md" style="margin-bottom: 100px;">Kembali</a>
	</div>

@endsection