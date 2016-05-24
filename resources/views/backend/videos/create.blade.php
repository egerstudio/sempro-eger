@extends('layouts.default')
@section('content')
<h1>Videos</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Add a new Video</h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p>Please fill in the following fields to add a new video.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						@include ('errors.list')
					</div>
				</div>

				<!-- Form open -->
				{!! Form::open(array('url' => 'backend/videos', 'class' => 'form-horizontal')) !!}

					@include ('backend.videos._form', ['submitButtonText' => 'Add video','readonly' => false])

				<!-- Form close -->
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">


$(document).ready(function(){
	$('#youtubeId').keyup(function(){
		if($('#youtubeId').val().length > 5) {
			getDetails();
		}
	});

	$("#inputTitle").stringToSlug({
    	getPut: '#slug'
    });

});

function getDetails(){
	//get id
	var id = $('#youtubeId').val();

	$.ajax({
      url: '../../api/youtubedetails',
      type: "get",
      dataType: 'json',
      data: {'id': id, '_token': $('input[name=_token]').val()},
      error: function(){
            $('#statusText').html('<i class="fa fa-spinner" aria-hidden="true"></i> Not found');
      },
      success: function(data){
      		$('#statusText').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Searching...');
        // insert values in fields
        console.log(data);
        
        $('#inputTitle').val(data[0].title);
        $('#slug').val(data[0].slug);
        $('#description').val(data[0].description);
        $('#youtube_date').val(data[0].youtube_date);
        $('#youtube_preview').html(data[0].youtube_preview);
	    
      }
    });  
}
</script>
@endsection