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
	<div class="col-lg-4">
			<div class="card">
			<div class="card-body">
			<h5>Jawaban</h5>
			<hr>
			<div id="answer">
				
			</div>
			</div>
		</div>
	</div>

</div>

@push('scripts')
<script>

$(document).ready(function(){
	$.ajax({
	url: "{{ url($current."/json") }}",
	method: "GET",
	dataType: "json",
	success:function(res){
		var html = '';
		var no =1;
		for (var i = 0; i < res.length; i++) {
			var n = no++;
			html += "<button data-id="+res[i].id+" class='btn btn-primary map'>"+n+"</button> ";
		}
		$("#subject").html(html);

	}
});
});

$(document).on('click','.map',function(){
	var id = $(this).data('id');
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
				answers += "<input type='radio' class='radio-custom' id='s"+res.answer[i].id+"' name='answer[]' value='"+res.answer[i].id+"'> <label class='radio-custom-label' for='s"+res.answer[i].id+"'>"+res.answer[i].data+"</label><br>";
			}
			answers += "<br><button class='pull-left btn btn-primary'>Sebelumnya</button>";
			answers += "<button class='pull-right btn btn-primary'>Selanjutnya</button>";

			$("#answer").html(answers);

		}

	})
})

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

