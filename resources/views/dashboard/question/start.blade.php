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
				answers += "<input type='radio' id='s"+res.answer[i].id+"' name='answer[]' value='"+res.answer[i].id+"'> <label for='s"+res.answer[i].id+"'>"+res.answer[i].data+"</label><br>";
			}
			answers += "<br><button class='pull-left btn btn-primary'>Sebelumnya</button>";
			answers += "<button class='pull-right btn btn-primary'>Selanjutnya</button>";

			$("#answer").html(answers);

		}

	})
})

</script>
@endpush

<style type="text/css">
	[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #F87DA9;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
</style>
@endsection

