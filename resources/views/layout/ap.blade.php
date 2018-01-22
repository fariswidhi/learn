<!DOCTYPE html>
<html>
<head>
    <title>Pintarin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  @if (Request::segment(1)=='login')
    {{-- expr --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <nav class="navbar navbar-light fixed" style="color: #fff;">
      <div class="container">
        <a class="navbar-brand" href="{{ url('') }}" style="color: #fff;">PINTARIN</a>

            <div class="pull-right nav-desktop">
            @if (!Auth::check())
              {{-- expr --}}

                <a class="btn btn-default baken" href="{{ route('login') }}" style="color: #fff;" >Masuk</a>
                <a class="btn btn-default baken" href="{{ route('register') }}" style="color: #fff;">Daftar</a>
              @else
                <a class="btn btn-default baken" href="{{ url('/panel') }}" style="color: #fff;">Panel</a>
              
            @endif
            @if (Request::segment(1) != '')
                <a class="btn btn-default baken" href="{{ url('/berita') }}" style="color: #fff;">Berita</a>
              @else
                  <a class="btn btn-default baken" href="#berita" style="color: #fff;">Berita</a>
            @endif
            </div>
            <div class="pull-right open-wrapper">
                <button class="pull-right btn btn-outline-primary btn-nav btn-open" >&#9776;</button>
            </div>
      </div>
    </nav>

    <div  class="nav-mobile">
      <button class="btn btn-default btn-close pull-right" style="margin: 10px;"><i class="fa fa-times"></i></button>
      <ul>
         @if (!Auth::check())
              {{-- expr --}}
        <li><a href="{{ route('login') }}" style="color: #777;" >Login</a></li>
        <li><a href="{{ route('register') }}" style="color: #777;" >Daftar</a></li>
        @else
        <li><a href="{{ url('panel') }}" style="color: #777;" >Panel</a></li>

        @endif
        <li><a class="" href="{{ url('berita') }}" style="color: #777;" >Berita</a></li>
      </ul>
  </div>
    @yield('content')


@if (Request::segment(1) != 'login')

<footer class="mainfooter" role="contentinfo">

  <div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Alamat</h4>
          <address>
          Jalan Raya Rembang - Blora Km 2.5 Rembang
              </address>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="footer-pad">
          <h4>Informasi</h4>
          <ul class="list-unstyled">
            <li><a href="{{ url('/berita') }}">Berita</a></li>
            <li><a href="#">Karir</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="footer-pad">
          <h4>Tentang</h4>
          Pintarin adalah aplikasi edukasi yang bisa digunakan untuk mengontrol pendidikasn anak
        </div>
      </div>

    </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="text-xs-center">&copy; {{date('Y')}} Pintarin</p>
        </div>
      </div>
    </div>
  </div>
</footer>
@endif

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});


@if (Request::segment(1) == '')
  {{-- expr --}}
$(window).scroll(function(){
  if($(window).scrollTop() > 500){
    $(".navbar").addClass('hidden');
   $(".navbar").removeClass('hidden');
     $(".navbar").addClass('blue');
  }
  else{

    $(".navbar").addClass('hidden');
    $(".navbar").removeClass('hidden');
     $(".navbar").removeClass('blue');
     // $(".navbar").addClass('top');

  }
});
@else
    $(".navbar").addClass('blue');
@endif
  $(document).on('click','.btn-open',function(){
    $(".nav-mobile").toggleClass('slide');
  });
  $(document).on('click','.btn-close',function(){
    $(".nav-mobile").toggleClass('slide');
  });
</script>

</body>
</html>