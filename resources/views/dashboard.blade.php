<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard-style.css') }}">
</head>
<body>
<div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>

  </a>
  <div class="logo">
  Admin
  </div>
</div>
<div class="sidebar">
  <ul>
    <li><a href="{{url('/admin/subjects')}}"><i class="fa fa-desktop"></i><span>Mata Pelajaran</span></a></li>
    <li><a href="{{url('/admin/news')}}"><i class="fa fa-newspaper-o"></i><span>Berita </span></a></li>
    <li><a href="{{url('/admin/materials')}}"><i class="fa fa-server"></i><span>Materi </span></a></li>
    <li><a href="{{url('/admin/modules')}}"><i class="fa fa-calendar"></i><span>Modul Soal</span></a></li>
    <li><a href="{{url('/admin/levels')}}"><i class="fa fa-calendar"></i><span>Jenjang</span></a></li>
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                       <i class="fa fa-sign-out"></i> <span>Keluar</span>  </a></li>
  </ul>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
</div>

<!-- Content -->
<div class="main">
  <div class="hipsum">
     @yield('content')

  </div>
</div>


</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


<script type="text/javascript">
	$('#menu-action').click(function() {
  $('.sidebar').toggleClass('active');
  $('.main').toggleClass('active');
  // $(this).toggleClass('active');

  if ($('.sidebar').hasClass('active')) {
    $(this).find('i').addClass('fa-close');
    $(this).find('i').removeClass('fa-bars');
  } else {
    $(this).find('i').addClass('fa-bars');
    $(this).find('i').removeClass('fa-close');
  }
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
    
</html>