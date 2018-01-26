@extends('dashboard.dashboard')

@section('content')
<div class="container">
@if ($type==2)
	{{-- expr --}}

@if ($active == 0)
	{{-- expr --}}
<span class="alert alert-danger">Maaf Akun Anda Belum Terverifikasi <a href="{{ url('/panel/pengaturan') }}">klik disini</a> untuk verifikasi akun</span>
<br>
<br>
@endif
@endif
	<div class="row">
	@if ($level == 2)

		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{@url('panel/daftar-anak')}}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-child fa-5x"></i>
	                <br>
	                <br>
	                <p>Anak</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>

		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{@url('panel/aktivitas-anak')}}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-history fa-5x"></i>
	                <br>
	                <br>
	                <p>Aktivitas Anak</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>

		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{@url('/panel/nilai')}}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-trophy fa-5x"></i>
	                <br><br>
	                <p>Nilai</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>



		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/daftar-materi') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-book fa-5x"></i>
	                <br><br>
	                <p>Materi</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>



		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('/panel/daftar-soal') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-list fa-5x"></i>
	                <br><br>
	                <p>Soal</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>


		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/profil') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-user fa-5x"></i>
	                <br><br>
	                <p>Profil</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>



		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/pengaturan') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-cog fa-5x"></i>
	                <br><br>
	                <p>Pengaturan</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>


	@elseif($level == 3)
			<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/daftar-materi') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-book fa-5x"></i>
	                <br><br>
	                <p>Materi</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>



		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/daftar-soal') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-list fa-5x"></i>
	                <br><br>
	                <p>Soal</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>

		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/nilai-saya') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-trophy fa-5x"></i>
	                <br><br>
	                <p>Nilai</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>
		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{ url('panel/profil') }}">
			<div class="menu-item blue ">
			<center>
	                <i class="fa fa-user fa-5x"></i>
	                <br><br>
	                <p>Profil</p>
	        </center>
             </div>
	            </a>
         	</div>
		</div>

	@endif
</div>

		</div>
@endsection