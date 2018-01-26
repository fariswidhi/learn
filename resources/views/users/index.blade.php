@extends('dashboard')

@section('content')
    <div class="jumbotron">
    <h4>Data Pengguna</h4>
    <table class="table table-hover">
      <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Opsi</th>
      </thead>
      <tbody>
      @foreach ($datas as $data)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$data->name}}</td>

          <td>          <form action="{{@url('admin/users/'.$data->id)}}" method="post" style="display: inline-block;">
          {{method_field('DELETE')}}
          {{csrf_field()}}
          <button type="submit" class="btn btn-danger">Hapus</button></td>
          </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

    {{$datas->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection