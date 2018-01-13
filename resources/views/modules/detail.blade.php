@extends('dashboard')

@section('content')
    <div class="jumbotron">
		{{$data->name}}
		<br>
{{-- 		<a href="#" class="btn btn-primary">
			Tambah Soal
		</a> --}}
		<button id="add" class="btn btn-primary">Tambah</button>
		
		<div class="row">
			<div class="col-lg-4">
				<form action="{{ url('admin/modules/add-questions/'.$id) }}" method="post">
				{{csrf_field()}}
					<label>Soal</label>
					<textarea class="form-control" name="question"></textarea>

					<div class="input_fields_wrap">
					<br>
    <button class="add_field_button btn btn-primary">Add More Fields</button>
    <div>
        <br>
    <input type="radio" name="answer[]" value="1" style="float: left;">
    <input type="text" name="answers[]" class="form-control" style="width: 85%;"></div>
</div>
<br><br>
<button type="submit" class="btn btn-danger">Ok</button>
				</form>
			</div>
		</div>
    </div>
@endsection
