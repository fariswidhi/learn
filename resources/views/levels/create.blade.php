@extends('dashboard')

@section('content')
    <div class="jumbotron">

    <h4>{{$title}}</h4>
    <div class="row">
      <div class="col-md-4">
        <form action="{{url('admin/'.$url)}}" method="post">
        {{method_field('POST')}}
        {{csrf_field()}}
        <label>Nama</label>
          <input type="text" name="name" class="form-control" required>
           
            <br>
          <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
      
    </div>
    </div>
@endsection