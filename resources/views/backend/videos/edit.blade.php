@extends('layouts.default')
@section('content')
<h1>Videos</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Edit video: {{$video->title}}<a href="{{ url('video/'.$video->slug) }}" class="pull-right">View video item page</a></h2>
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
				{!! Form::model($video, ['method' => 'PATCH', 'action' => ['BackendVideosController@update', $video->id], 'class' => 'form-horizontal']) !!}

					@include ('backend.videos._form', ['submitButtonText' => 'Save changes to video', 'readonly' => 'readonly'])

				<!-- Form close -->
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@endsection