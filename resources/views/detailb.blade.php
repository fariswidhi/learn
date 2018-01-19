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
			<h3>{{ $data->title }}</h3>
		</div>
		{{-- <hr> --}}
		<div class="content">
			<p>{{ $data->content }}</p>
		</div>
		<a href="{{ url('berita') }}" class="btn btn-info btn-md" style="margin-bottom: 100px;">Kembali</a>
	</div>

@endsection