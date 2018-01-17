@extends('dashboard.dashboard')

@section('content')
<div class="container">

	<div class="row">
	@if ($level == 2)

		<div class="col-6 col-lg-4" style="padding: 10px;">
			<div class="card panel card-body">
	            <a href="{{@url('dashboard/kids')}}">
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
	            <a href="{{@url('dashboard/kids-activity')}}">
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
	            <a href="">
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
	            <a href="{{ url('dashboard/materials') }}">
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
	            <a href="">
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
	            <a href="">
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
	            <a href="{{ url('dashboard/materials') }}">
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
	            <a href="{{ url('dashboard/questions') }}">
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

	@endif
</div>

		</div>
@endsection