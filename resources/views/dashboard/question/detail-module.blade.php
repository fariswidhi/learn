@extends('dashboard.dashboard')

@section('content')

<div class="container" style="margin-bottom: 10px;">
    <div class="card">
    <div class="card-body">
        
        <div class="row">
<div class="col-lg-6">
    <ul class="list-group">
        <li class="list-group-item">{{$data->name}}</li>
        <li class="list-group-item">{{$data->time." Menit"}}</li>
        <li class="list-group-item">{{$data->subject->name}}</li>
        <li class="list-group-item">{{$data->subject_number." Soal"}}</li>
        <li class="list-group-item"><form method="post" action="{{ url('/panel/soal/'.$param) }}" style="display: inline-block;">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-danger">Hapus </button></form></li>
    </ul>
    <br><br>

</div>

</div>

</div>
</div>
</div>

<div class="container">


<div class="card">
    <div class="card-body">
        
        <div class="row">
            <div class="col-lg-6">

        <br>
                <form action="{{ url('panel/soal/'.$param.'/tambah') }}" method="post">
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
                        <td><a href="{{url('panel/soal/'.$param.'/'.$data->id)}}" class="btn btn-primary btn-sm">Detail</a> <a href="{{url('panel/soal/'.$param.'/hapus/'.$data->id)}}" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        
    </div>
    </div>
</div>


@endsection