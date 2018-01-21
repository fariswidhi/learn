@extends('dashboard')

@section('content')
    <div class="jumbotron">

{{-- 		<a href="#" class="btn btn-primary">
			Tambah Soal
		</a> --}}

		 @if (Session::has('success'))
    @component('alerts.success')
    @slot('title')
    {{session('success')}}
    @endslot
@endcomponent
  <br>
    @endif
    
		<div class="row">
			<div class="col-lg-4">
					{{$data->name}}
		<br>
				<form action="{{ url('admin/modules/add-questions/'.$id) }}" method="post">
				{{csrf_field()}}
					<label>Soal</label>
					<textarea class="form-control" name="question"></textarea>

					<div class="input_fields_wrap">
					<br>
    <button class="add_field_button btn btn-primary">Tambah Pilihan</button>
    <div>
        <br>
    <input type="radio" name="answer[]" value="1" style="float: left;margin-right: 10px;">
    <input type="text" name="answers[]" class="form-control" style="width: 85%;"></div>
</div>
<br><br>
<button type="submit" class="btn btn-danger">Ok</button>
				</form>
			</div>
			<div class="col-lg-6">

				<h4>Daftar Soal</h4>
				<table class="table table-striped">
				@foreach ($questions as $data)
					{{-- expr --}}
					<tr>
						<td>{{$no++}}</td>
						<td>{{$data->name}}</td>
						<td><a href="{{ url('/admin/modules/'.$id.'/'.$data->id) }}" class="btn btn-primary">Detail</a> <a href="{{ url('/admin/modules/'.$id.'/'.$data->id.'/delete') }}" class="btn btn-danger">Hapus</a></td>
					</tr>
				@endforeach
				</table>
			</div>
		</div>
    </div>
@endsection
