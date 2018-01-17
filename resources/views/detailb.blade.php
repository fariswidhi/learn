@extends('layout.ap')

<style type="text/css">
	.berita{
		margin-top: 100px;
	}
</style>
@section('content')

	<div class="container">
		<h1 class="berita">Detail Berita</h1><hr>
		<div class="title">
			<h2>{{ $data->title }}</h2>
		</div>
		<hr>
		<div class="content">
			<h5>{{ $data->content }}</h5>
		</div>
		<a href="{{ url('berita') }}" class="btn btn-info btn-md">Kembali</a>
	</div>

@endsection