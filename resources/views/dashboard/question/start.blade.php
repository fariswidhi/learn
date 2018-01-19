@extends('dashboard.dashboard')

@section('content')
<div class="row" style="width: 95%;margin: 0 auto;">
	<div class="col-lg-3">
			<div class="card">
			<div class="card-body">
			<h5>Daftar Soal</h5>
			<hr>
				<div id="subject">
					
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
			<div class="card">
			<div class="card-body">
			<h5>Soal</h5>
			<hr>
		<div id="question">
			
		</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4" >
			<div class="card" style="min-height: 500px;">
			<div class="card-body">
			<h5>Jawaban</h5>
			<hr>
			<div id="answer">
				
			</div>
			<div id="pagination" class="pull-left" style="width: 100%;">

				<button class='pull-right btn btn-primary btn-pagination btn-prev'>Selanjutnya</button>
				<button class='pull-right btn btn-primary btn-pagination btn-next'>Selanjutnya</button>
			</div>
			<br><br>
			<div class="pull-left" style="width: 100%;">
<button type="button" style="width: 100%;" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">
	<i class="fa fa-exclamation-triangle"></i> Berhenti
</button>
</div>

			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	Apakah Anda Ingin Berhenti?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-done">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nilai Anda </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<center><h3>		Nilai Anda</h3></center>
<center><h2 class="point"></h2></center>
      </div>
      </div>

    </div>
  </div>
</div>


@push('scripts')
<div class="modal fade" id="timeout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Waktu Habis </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<center><h3>		Maaf Waktu Sudah Habis</h3></center>
<center><h2></h2></center>
      </div>
      </div>

    </div>
  </div>
</div>

<script>


$('#exampleModal').on('shown.bs.modal', function () {
	$(".close-btn").focus();
});

setTimeout(
	function(){
		$("#timeout").modal('toggle');
	}
	, 1000)
$(document).on('click','.btn-done',function(){
	$.ajax({
		url: "{{ url('/api/questions/end') }}",
		type: "POST",
		dataType: "json",
		success: function(res){
			if(res.success == 'true'){
				$("#exampleModal").modal('toggle');
				$('#success').modal({backdrop: 'static', keyboard: false})  
				$("#success").modal("show");
				$(".point").text(res.point);
				 window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "{{ url('/panel') }}";

    }, 3000);

			}
		}
	});
});
$(document).ready(function(){


	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

});
load();

function load(){
		$.ajax({
	url: "{{ url($current."/json") }}",
	method: "GET",
	dataType: "json",
	success:function(res){
		var html = '';
		var no =1;
		for (var i = 0; i < res.length; i++) {
			var n = no++;
			html += "<button  data-value="+res[i].iduser+" data-num="+res[i].num+" data-max="+res[i].max+" data-min="+res[i].min+" data-id="+res[i].id+" class='"+(res[i].answered == "true" ? "btn btn-success" : "btn btn-outline-success"   )+" map num"+n+"'>"+n+"</button> ";
		}

		$("#subject").html(html);
		// tes

	}
});
}


function parse(id,max,min,num,value){

	// var max  = $(this).attr('data-max');
	// var min = $(this).attr('data-min');

		var pagination = "";
		pagination += "<button ";
		var statePrev = "";
		var stateNext = "";

		var number = parseInt(num)+1;

		var next = $(".num"+number).attr('data-id');

		var numbermin = parseInt(num)-1;
		var prev = $(".num"+numbermin).attr('data-id');


		var newmax = $(".num"+number).attr('data-max');
		var newmin = $(".num"+numbermin).attr('data-min');


		if(min == "true" ){
		statePrev = "disabled ";

		}
		else{
			statePrev = "";
		}
		if(max == "true"){
			stateNext = "disabled ";
		}
		else{
			stateNext = "";
		}



		 pagination += statePrev+  " data-id='"+prev+"' data-num='"+parseInt(num-1)+"' data-max='"+max+"' data-min='"+min+"'";
		 pagination += "class='pull-left btn btn-primary btn-pagination btn-prev'>Sebelumnya</button>";
		 pagination += "<button ";
		 pagination +=   stateNext+" data-id='"+next+"' data-num='"+parseInt(number)+"' data-max='"+max+"' data-min='"+min+"'";
		 pagination += "class='pull-right btn btn-primary btn-pagination btn-next'>Selanjutnya</button>";

		$("#pagination").html(pagination);

	$.ajax({
		url: "{{ url('api/question/') }}/"+id,
		dataType: "json",
		method:"GET",
		success: function(res){
			var subj = "";
			var answers = "";

			subj = res.subject;
			$("#question").html(subj);
			for (var i = 0; i < res.answer.length; i++) {
				answers += "<input  data-value='"+value+"' data-question="+id+" type='radio' class='radio-custom choices' "+(res.answer[i].selected == "true" ? "checked":"")+" id='s"+res.answer[i].id+"' name='answer[]' value='"+res.answer[i].id+"'> <label class='radio-custom-label' for='s"+res.answer[i].id+"'>"+res.answer[i].data+"</label><br>";
			}

			// answers += "<br><button  data-id='"+id+"' class='pull-left btn btn-primary btn-prev'>Sebelumnya</button>";
			// answers += "<button class='pull-right btn btn-primary'>Selanjutnya</button>";

			$("#answer").html(answers);

		}

	});
}

$(document).on('click','.choices',function(){
	var id = $(this).attr('value');	
	var question = $(this).attr('data-value');
	$.ajax({
		url: "{{ url('dashboard/question/answer/insert') }}",
		type: "POST",
		data: {
			question: question,
			id: id
		},
		dataType: "json",
		success:function(res){
			console.log(res);

		}

	})
				load();
});






$(document).on('click','.map',function(){
	var id = $(this).attr('data-id');
	var max = $(this).attr('data-max');
	var min = $(this).attr('data-min');
	var num = $(this).attr('data-num');
	var value = $(this).attr('data-value');
	parse(id,max,min,num,value);

});


$(document).on('click','.btn-next',function(){ 
	var id = $(this).attr('data-id');
	var max = $(this).attr('data-max');
	var min = $(this).attr('data-min');
	var num = $(this).attr('data-num');

	$(this).attr('data-num',parseInt(num)+1);
	$(".btn-prev").attr('data-num',parseInt($(".btn-prev").attr('data-num'))+1);
	var prevNum = $(".btn-prev").attr('data-num');
	if(prevNum <0){
	$(".btn-prev").attr('disabled','disabled');
	}
	else{
		$(".btn-prev").removeAttr('disabled');
	}
	var nextNum = $(this).attr('data-num');
	var last = $(".map:last-child").attr('data-num');
	if(nextNum > last){
	$(this).attr('disabled','disabled');
	}
	else{
		$(this).removeAttr('disabled');
	}
	

	$.ajax({
	url: "{{ url($current."/json") }}",
	type: "GET",
	dataType: "json",
	success:function(res){
		var html  = "";
		var id = res[num].id;
		var iduser = res[num].iduser;
		 $(this).attr('data-value',iduser);
		var value = $(this).attr('data-value');

	$.ajax({
		url: "{{ url('api/question/') }}/"+id,
		dataType: "json",
		method:"GET",
		success: function(res){
			var subj = "";
			var answers = "";

			subj = res.subject;
			$("#question").html(subj);
			for (var i = 0; i < res.answer.length; i++) {
				answers += "<input "+(res.answer[i].selected == "true" ? "checked":"")+" data-value='"+value+"' data-question="+id+" type='radio' class='radio-custom choices' id='s"+res.answer[i].id+"' name='answer[]' value='"+res.answer[i].id+"'> <label class='radio-custom-label' for='s"+res.answer[i].id+"'>"+res.answer[i].data+"</label><br>";
			}

			// answers += "<br><button  data-id='"+id+"' class='pull-left btn btn-primary btn-prev'>Sebelumnya</button>";
			// answers += "<button class='pull-right btn btn-primary'>Selanjutnya</button>";

			$("#answer").html(answers);

		}

	});

	}
	});


});

$(document).on('click','.btn-prev',function(){ 
	var id = $(this).attr('data-id');
	var max = $(this).attr('data-max');
	var min = $(this).attr('data-min');
	var num = $(this).attr('data-num');


	$(this).attr('data-num',parseInt(num)-1);
	var prevNum = $(this).attr('data-num');
	if(prevNum <0){
	$(this).attr('disabled','disabled');
	}
	else{
		$(this).removeAttr('disabled');
	}
	$(".btn-next").attr('data-num',parseInt($(".btn-next").attr('data-num'))-1);
	var nextNum = $(".btn-next").attr('data-num');
	var last = $(".map:last-child").attr('data-num');
	if(nextNum > last){

	$(".btn-next").attr('disabled','disabled');
	}
	else{
		$(".btn-next").removeAttr('disabled');
	}

	$.ajax({
	url: "{{ url($current."/json") }}",
	type: "GET",
	dataType: "json",
	success:function(res){
		var html  = "";
		var id = res[num].id;


		var iduser = res[num].iduser;
		$(this).attr('data-value',iduser);
		var value = $(this).attr('data-value');
	$.ajax({
		url: "{{ url('api/question/') }}/"+id,
		dataType: "json",
		method:"GET",
		success: function(res){
			var subj = "";
			var answers = "";

			subj = res.subject;
			$("#question").html(subj);
			for (var i = 0; i < res.answer.length; i++) {
				answers += "<input "+(res.answer[i].selected == "true" ? "checked":"")+" data-value="+value+" data-question="+id+" type='radio' class='radio-custom choices' id='s"+res.answer[i].id+"' name='answer[]' value='"+res.answer[i].id+"'> <label class='radio-custom-label' for='s"+res.answer[i].id+"'>"+res.answer[i].data+"</label><br>";
			}

			// answers += "<br><button  data-id='"+id+"' class='pull-left btn btn-primary btn-prev'>Sebelumnya</button>";
			// answers += "<button class='pull-right btn btn-primary'>Selanjutnya</button>";

			$("#answer").html(answers);

		}

	});

	}
	});
});

		$.ajax({
	url: "{{ url($current."/json") }}",
	method: "GET",
	dataType: "json",
	success:function(res){
		var html = '';
		var no =1;

			parse(res[0].id,res[0].max,res[0].min,res[0].num,res[0].value);
			// html += "<button  data-value="+res[i].iduser+" data-num="+res[i].num+" data-max="+res[i].max+" data-min="+res[i].min+" data-id="+res[i].id+" class='"+(res[i].answered == "true" ? "btn btn-success" : "btn btn-outline-success"   )+" map num"+n+"'>"+n+"</button> ";


		// tes

	}
});

// $(document).on('ready',function(e){
// 	e.preventDefault();
// 	alert($("#subject").text());
// });
</script>
@endpush

<style type="text/css">/* only demo styles */


.checkbox-custom, .radio-custom {
    opacity: 0;
    position: absolute;   
}

.checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
    display: inline-block;
    vertical-align: middle;
    margin: 5px;
    cursor: pointer;
}

.checkbox-custom-label, .radio-custom-label {
    position: relative;
}

.checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
    content: '';
    background: #fff;
    border: 2px solid #ddd;
    display: inline-block;
    vertical-align: middle;
    width: 20px;
    height: 20px;
    padding: 2px;
    margin-right: 10px;
    text-align: center;
}

.checkbox-custom:checked + .checkbox-custom-label:before {
    background: rebeccapurple;
}

.radio-custom + .radio-custom-label:before {
    border-radius: 50%;
}

.radio-custom:checked + .radio-custom-label:before {
    background: #333;
}


.checkbox-custom:focus + .checkbox-custom-label, .radio-custom:focus + .radio-custom-label {
  outline: 1px solid #ddd; /* focus style */
}
</style>
@endsection

