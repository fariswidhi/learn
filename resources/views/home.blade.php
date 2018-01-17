@extends('layout.ap')

@section('content')
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-2">Ayo Belajar</h1>
            <h4 class="mb-4">
                Selamat datang diaplikasi Learn
            </h4>
            <h6>
                Yang mana anak-anak bisa belajar dengan mudah dan aman dengan pemantauan orang tua ,
                karena untuk mengetahui statistik nilai.
            </h6>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div style="height: 15px;margin-top: 100px;">
                <div class="first"><button type="button" onclick="smoothScroll(document.getElementById('second'))" class="btn btn-primary">Pelajari lebih lanjut</button></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container" id="second" style="margin-bottom: 100px;">
        <div style="height: 50px;"></div>
        <div class="row">
            <div class="col-md-12">
                <center><h1>Apa masalah yang terjadi?</h1></center>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md12">
                <center>
                <p class="lead mb-0">
                    KAMI membantu anak anda untuk meraih prestasi dengan belajar yang lebih mudah dan menyenangkan dengan inovasi
                    terbaru
    
                </p>
                </center>
            </div>
        </div>
    </div>

    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters" style="background-color: #ddd;">

          <div class="col-lg-6 order-lg-2 text-white showcase-img">
            <center><img src="{{ asset('img/gambar.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>#LEARN Keren</h2>
            <hr>
            <p class="lead mb-0">Sebuah inovasi yang tak terduga bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img">
            <center><img src="{{ asset('img/gambar.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>#LEARN Keren</h2>
            <hr>
            <p class="lead mb-0">Sebuah inovasi yang tak terduga bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
          </div>
        </div>

        <div class="row no-gutters" style="background-color: #ddd;">
          <div class="col-lg-6 order-lg-2 text-white showcase-img">
            <center><img src="{{ asset('img/gambar.png') }}" width="300px" height="300px" style="margin-top: 50px;"></center>
          </div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>#LEARN Keren</h2>
            <hr>
            <p class="lead mb-0">Sebuah inovasi yang tak terduga bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
          </div>
        </div>

      </div>
    </section>

@endsection