@extends('layout.ap')
<style type="text/css">
	.berita{
		/*position: absolute;*/
		margin-top: 100px;
	}
</style>
@section('content')

	
	<div class="jumbotron" style='background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ url('uploads/'.$data1->photo) }}")   no-repeat center center fixed;background-size: cover;color: #fff'>
      <div class="container" >
		<h1>Berita</h1>  <hr>
        <h1>{{$data1->title}}</h1>

        <p><a class="btn btn-primary btn-lg" href="{{ url('berita/'.$data1->id) }}" role="button">Baca  &raquo;</a></p>
      </div>
    </div>

	<div class="container">
      <!-- Example row of columns -->
      
 {{--      <div class="row">

      		
        <div class="col-md-4" >
        	<div class="card">
            <img src="{{url('uploads/'.$data->photo)}}" class="img img-responsive" style="width: 100%;height: 200px;">
             <div class="card-body">
          <h2>{{ $data->title }}</h2>

          <p><a class="btn btn-default" href="{{ url('berita/detail/'.$data->id) }}" role="button">Baca detail &raquo;</a></p>
        	</div>
        	</div>
        </div>


      </div> --}}


  <div class="row">
          @foreach ($data2 as $data)

    <div class="col-lg-3" style="padding: 10px;">
      <div class="card">
        <div class="card-body">
            <img src="{{url('uploads/'.$data->photo)}}" style="width: 100%;height: 200px;">
            <br>
            <br>
            <a href="{{ url('berita/'.$data->id) }}" >
            <h4>{{$data->title}}</h4>
            </a>
        </div>
      </div>
    </div>

            @endforeach

  </div>
      <center>
      <div class="pag" style="margin-left: 50%;padding: 10px;">
        {{ $data2->links('vendor.pagination.bootstrap-4') }}
      </div>
    </center>

  </div>



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