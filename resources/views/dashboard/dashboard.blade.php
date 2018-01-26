<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{@asset('/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{@asset('/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{@asset('css/dashboard.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-blue">

  <a class="navbar-brand" href="{{@url('panel')}}">Pintarin</a>
    
  @if (Auth::user()->type ==2)
    {{-- expr --}}
  @if (!empty(Request::segment(2)))

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
              <a href="{{@url('panel/daftar-anak')}}" class="nav-link">
              Anak
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/aktivitas-anak')}}" class="nav-link">
              Aktivitas Anak  
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/nilai')}}" class="nav-link">
              Nilai
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/daftar-materi')}}" class="nav-link">
              Materi
              </a>
      </li>

      <li class="nav-item">
              <a href="{{@url('panel/daftar-soal')}}" class="nav-link">
              Soal
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/pengaturan')}}" class="nav-link">
              Pengaturan
              </a>
      </li>
    </ul>



  </div>
  @endif
  @endif


  @if (Auth::user()->type ==3)
    {{-- expr --}}
  @if (!empty(Request::segment(2)))

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
              <a href="{{@url('panel/daftar-materi')}}" class="nav-link">
              Materi
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/daftar-soal')}}" class="nav-link">
                  Soal
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/nilai-saya')}}" class="nav-link">
              Nilai
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('panel/profil')}}" class="nav-link">
              Profil
              </a>
      </li>

    </ul>



  </div>
  @endif
  @endif
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  </div>



                                <ul class="nav navbar-nav navbar-right">
                                  @if (!empty(Request::segment(2)))
                                <li><button class="btn btn-default pull-left btn-menu"><i class="fa fa-bars"></i></button></li>
                                @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Keluar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                  @endif
                                </ul>


</nav>
<div  class="nav-mobile">
      <button class="btn btn-default btn-close pull-right" style="margin: 10px;"><i class="fa fa-times"></i></button>
      <ul>


  @if (Auth::user()->type ==2)
    {{-- expr --}}
  @if (!empty(Request::segment(2)))

        <li><a href="{{ url('panel/daftar-anak') }}" style="color: #777;" >Anak</a></li>

        <li><a href="{{ url('panel/aktivitas-anak') }}" style="color: #777;" >Aktivitas Anak</a></li>
        <li><a href="{{ url('panel/nilai') }}" style="color: #777;" >Nilai</a></li>
  <li><a href="{{ url('panel/daftar-materi') }}" style="color: #777;" >Materi</a></li>
    <li><a href="{{ url('panel/daftar-soal') }}" style="color: #777;" >Soal</a></li>
  <li><a href="{{ url('panel/pengaturan') }}" style="color: #777;" >Pengaturan</a></li>

  </div>
  @endif
  @endif



  @if (Auth::user()->type ==3)
    {{-- expr --}}
  @if (!empty(Request::segment(2)))

        <li><a href="{{ url('panel/daftar-materi') }}" style="color: #777;" >Materi</a></li>

        <li><a href="{{ url('panel/daftar-soal') }}" style="color: #777;" >Soal</a></li>
        <li><a href="{{ url('panel/nilai-saya') }}" style="color: #777;" >Nilai Saya</a></li>
  <li><a href="{{ url('panel/profil') }}" style="color: #777;" >Profil</a></li>
  </div>
  @endif
  @endif




      </ul>
  </div>




<!-- navbar -->
<br><br>

<style type="text/css">
    
  @media(min-width: 552px){
    .nav-mobile{
      display: none;
    }
    .btn-menu{
      display: none;
    }
  }


  @media(max-width: 552px){
      .open-wrapper{
    display: block;
  }
    .nav-desktop{
         display: none;
    }
  .btn-open,.btn-close{
    display: block;
  }
   .nav-mobile{
    width: 100%;
    height: 100%;
    position: fixed;
    background-color: #f0f0f0;
    z-index: 9999;
    top: 0;
    left: -100%;
    transition: 0.1s ease-out;
  }
  .nav-mobile ul{
    display: block;
    left: 0;
    margin-top: 50px;
  }
  .nav-mobile ul li{
    list-style: none;
    display: block;
    padding: 10px;
  }
  .nav-mobile ul li:hover{
    background-color: #fff;
  } 
  .nav-mobile ul li a{
    text-decoration: none;
    display: block;;
  }
  .slide{
    left: 0;
    transition: 0.1s ease-out;
  }
  }

</style>




  <div class="container">
{{-- 

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  @for($i = 1; $i <= count(Request::segments()); $i++) 
  @php
    $link = url('panel');
  @endphp
  <li class="breadcrumb-item"> @if($i < count(Request::segments()) & $i > 0) @php $link = Request::segment($i); @endphp <a href="{{$link}}">{{Request::segment($i)}}</a> {!!'<i class="fa fa-angle-right"></i>'!!} @else {{Request::segment($i)}} @endif 
  </li> @endfor 

  </ol>
</nav> --}}
  </div>


	@yield('content')
{{-- 

<div class="footer-bottom">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

          © 2018 LEARN UFA

        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="design">

           Suported By  |  <a target="_blank" href="http://www.smktiufa.sch.id">Web Designer SMK Umar Fatah Rembang</a>
        </div>
      </div>
    </div>
  </div>
</div>

 --}}

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).on('click','.btn-menu',function(){
    $(".nav-mobile").toggleClass('slide');
  });
  $(document).on('click','.btn-close',function(){
    $(".nav-mobile").toggleClass('slide');
  });
  
$(document).ready(function() {
    var max_fields      = 10; 
    var wrapper         = $(".input_fields_wrap"); 
    var add_button      = $(".add_field_button"); 
    
    var x = 1; 
    var n = 2;
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 

            var a = n++;
            $(wrapper).append('<div><br><input style="float: left;margin-right: 10px;" type="radio"  name="answer[]" value="'+a+'"><input type="text" name="answers[]" style="width: 85%;"  class="form-control"/><a href="#" class="remove_field">Hapus</a>'); 
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@stack('scripts')
    
</body>
</html>