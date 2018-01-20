@extends('layout.ap')

@section('content')
    <header class="header text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h3 class="mb-4 intro-text" id="intro-text">
      Banyak anak yang mengalami penurunan prestasi,salah satu hal yang menyebabkan  adalah kurangnya perhatian dari orang tua terhadap putra-putrinya
    
  </h3>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div style="height: 100px;margin-top: 100px;">
                <div class="first"><a href="#pelajari" class="btn btn-primary">Pelajari lebih lanjut</a></div>
            </div>
          </div>
        </div>
      </div>
    </header>


    <section class="section" id="pelajari">
      <div class="container-fluid p-0">
        <div class="row no-gutters" style="background-color: #ddd;">


          <div class="col-lg-12 my-auto section-text" style="width: 100%;">

            <p class="lead mb-0">
            <center><h2>Pintarin</h2></center>
            <hr>
  <center> <h3>           Pintarin adalah Aplikasi yang berguna untuk pembelajaran anak dan bisa dikontrol langsung oleh orang tua</h3>
  <br>
  <a href="#fitur" class="btn btn-primary">Apa Fiturnya? </a>
  </center>
              .<br><br>
            </p>

          </div>
        </div>

        <div class="row no-gutters" id="fitur">
          <div class="col-lg-6 text-white section-img" >
            <center><img class="img-intro" src="{{ asset('img/books.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 my-auto section-text">
            <h2 style="margin-top: -100px;">Banyak Materi</h2>
            <hr>
            <p class="lead mb-0">
                Disini anda bisa menemukan banyak materi yang mendidik dan bermanfaat untuk anak. 
            </p>
          </div>
        </div>

        <div class="row no-gutters" style="background-color: #ddd;">
          <div class="col-lg-6 order-lg-2 text-white section-img">
            <center><img class="img-intro" src="{{ asset('img/questions.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 order-lg-1 my-auto section-text">
            <h2 style="margin-top: -100px;">Bank Soal</h2>
            <hr>
            <p class="lead mb-0">
              Ada kumpulan soal yang bisa anak-anak kerjakan sesuai materi yang telah dibaca.
             </p>
          </div>
        </div>

        <div class="row no-gutters bg-section">
          <div class="col-lg-6 text-white section-img">
            <center><img class="img-intro" src="{{ asset('img/learning.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 my-auto section-text" >
            <h2 style="margin-top: -100px;">Aktivitas Anak</h2>
            <hr>
            <p class="lead mb-0">
              Anda bisa melihat aktivitas anak di Aplikasi ini. Mulai dari Membaca Materi, Mengerjakan Soal dan lain sebagainya 
            </p>
          </div>
        </div>




        <div class="row no-gutters bg-features ">
<div class="container" style="padding: 40px;">
<center>
<h3 class="features-title">Apalagi?</h3>
<h4 class="features-title">Anda bisa melihat semua fitur aplikasi</h4>
<br>
<br>
</center>
  <div class="row">
<div class="col-lg-6">


              <div class="col-lg-6  centered" >
              <center>
                  <img src="{{ asset('img/father.png') }}" class="features-img">
                  <br>
                  <br>
                  <h3 class="features-title">Orang Tua</h3>
                        </center>
                  <br>
                  <ul class="features-list">
                    <li>Menambahkan Materi Pelajaran</li>
                    <li>Menambahkan Soal untuk Anak</li>
                    <li>Melihat Semua Nilai Anak</li>
                    <li>Melihat Aktivitas Anak Yang Dilakukan Anak di Aplikasi ini</li>
                  </ul>
      

<br>
<br><br>
<br><br>
            </div>          
          </div>

          <div class="col-lg-6">


              <div class="col-lg-6  centered" >
              <center>
                  <img src="{{ asset('img/boy.png') }}" class="features-img">
                  <br>
                  <br>
                  <h3 class="features-title">Anak</h3>
                        </center>
                  <br>
                  <ul class="features-list">
                    <li>Mencari dan Membaca Berbagai Materi Pelajaran</li>
                    <li>Mengerjakan Soal Secara Online</li>
                    <li>Melihat Nilai dari soal yang sudah ikerjakan </li>
                  </ul>
      

<br>
<br><br>
<br><br>
            </div>          
          </div>

  </div>  
</div>





        </div>



    <br>
    <br>
    <br>


      </div>

        <div class="row no-gutters" id="berita">

<div class="container" >
<center><h4>Berita Terbaru</h4></center>
<br>
  <div class="row">
          @foreach ($news as $data)

    <div class="col-lg-3 col-12 col-sm-6" style="padding: 10px;">
      <div class="card">
        <div class="card-body">
            <img src="{{url('uploads/'.$data->photo)}}" class="img-news-home">
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
  <a href="{{ url('/berita') }}" class="btn btn-primary">Berita Lainnya</a>
  </center>
</div>
</div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection