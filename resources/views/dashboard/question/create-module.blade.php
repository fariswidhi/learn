@extends('dashboard.dashboard')

@section('content')

<div class="container">
<div class="card">
    <div class="card-body">
        
        <div class="row">

        <div class="col-md-4">
            <form action="{{url('panel/soal/buat')}}" method="post">
            {{method_field('POST')}}
            {{csrf_field()}}
            <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            <label>Mata Pelajaran</label>
            <select class="form-control" required name="subjects">  
                <option value="">Pilih Mata Pelajaran</option>
                @foreach ($subjects as $data)
                    {{-- expr --}}
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
            <label>Waktu</label>
            <input type="number" name="time" class="form-control">
            <label>Jumlah Soal</label>
            <input type="number" name="number" class="form-control">
            <label>Deskripsi</label>
            <textarea name="desription" class="form-control"></textarea>
            <br>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
        
    </div>
    </div>
</div>
    </div>

@endsection