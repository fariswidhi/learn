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

// Add hover feedback on menu
// $('#menu-action').hover(function() {
//     $('.sidebar').toggleClass('hovered');
// });

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    var n = 2;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment

            var a = n++;
            $(wrapper).append('<div><br><input style="float: left;margin-right: 10px;" type="radio"  name="answer[]" value="'+a+'"><input type="text" name="answers[]" style="width: 85%;"  class="form-control"/><a href="#" class="remove_field">Hapus</a>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
    
</html>