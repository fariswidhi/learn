<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{@asset('/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{@asset('/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{@asset('css/dashboard.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-blue">
  <a class="navbar-brand" href="{{@url('dashboard')}}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @if (Auth::user()->type ==2)
    {{-- expr --}}
  @if (!empty(Request::segment(2)))

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
              <a href="{{@url('dashboard/kids')}}" class="nav-link">
              Anak
              </a>
      </li>
      <li class="nav-item">
              <a href="{{@url('dashboard/kids-activity')}}" class="nav-link">
              Aktivitas Anak  
              </a>
      </li>
    </ul>



  </div>
  @endif
  @endif
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  </div>



                                <ul class="nav navbar-nav navbar-right">
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
                                </ul>


</nav>
<!-- navbar -->
<br><br>

	@yield('content')


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



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--     <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.1.1/turbolinks.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ujs/1.2.1/rails.min.js"></script>
    <style type="text/css">
        .turbolinks-progress-bar {
  height: 2px;
  background-color: white;
}
    </style> --}}
{{--     <script type="text/javascript">
if (Turbolinks.supported) {
  // ...
Turbolinks.setProgressBarDelay(3000)

}

    </script> --}}
<!-- container -->
@stack('scripts')
    
</body>
</html>