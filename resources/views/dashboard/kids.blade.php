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

		<a href="{{@url('panel/'.$url.'/create')}}" class="btn btn-primary">Tambah</a>
		<br>
		<br>
		<div class="row">
			<div class="col-lg-5">
				<ul class="list-group">
				@if (count($data) != 0)

				@foreach ($data as $d)
  <li class="list-group-item"><h4 class="child">
  <a href="{{ url('panel/daftar-anak/'.$d->username) }}">{{$d->username}}</a></h4>
  <a class="btn btn-outline-warning" href="{{@route('daftar-anak.edit',$d->id)}}"><i class="fa fa-pencil"></i> Ubah</a>
<form onsubmit="return confirm('Yakin?');" action="{{ route('daftar-anak.destroy',$d->id) }}" style="display: inline-block;" method="post">

	{{csrf_field()}}
	{{method_field('DELETE')}}
	<button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash-o"></i> Hapus</button>
</form>
  </li>
					{{-- expr --}}
				@endforeach
				@else
				<li class="list-group-item">Tidak Ada data</li>
				@endif
</ul>
			</div>
		</div>
	</div>
</div>
</div>
@endsection