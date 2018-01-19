@extends('layout.ap')
<style type="text/css">
	.berita{
		/*position: absolute;*/
		margin-top: 100px;
	}
</style>
@section('content')

	
	<div class="jumbotron">
      <div class="container">
		<h1>Berita</h1>  <hr>
        <h1>{{$data1->title}}</h1>
        <p>{{$data1->content}}</p>
        <p><a class="btn btn-primary btn-lg" href="{{ url('berita/detail/'.$data1->id) }}" role="button">Baca selanjutnya &raquo;</a></p>
      </div>
    </div>

	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
      	@foreach ($data2 as $data)
      		
        <div class="col-md-4" >
        	<div class="card">
            <img src="{{url('uploads/'.$data->photo)}}" class="img img-responsive" style="width: 100%;height: 200px;">
             <div class="card-body">
          <h2>{{ $data->title }}</h2>

          <p><a class="btn btn-default" href="{{ url('berita/detail/'.$data->id) }}" role="button">Baca detail &raquo;</a></p>
        	</div>
        	</div>
        </div>

      	@endforeach
      </div>
  </div>
  	<center>
  		<div class="pag" style="margin-left: 50%;padding: 10px;">
      	{{ $data2->links('vendor.pagination.bootstrap-4') }}
      </div>
  	</center>



{{-- 	<center>
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item"><a class="page-link" href="#">Next</a></li>
	  </ul>
	</nav>
	</center> --}}
@endsection