@extends('layouts.default')
@section('content')
<h1>Categories</h1>
<hr>
<div class="row">
	<div class="col-md-3 col-sm-4">
		@include('backend.partials.categorySidebar')
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Edit category</h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p>Update the following fields to edit this category.</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						@include ('errors.list')
					</div>
				</div>

				<!-- Form open -->
				{!! Form::model($category, ['method' => 'PATCH', 'action' => ['BackendCategoriesController@update', $category->id], 'class' => 'form-horizontal']) !!}

					@include ('backend.categories._form', ['submitButtonText' => 'Update category', 'showDeleteButton' => true])

				<!-- Form close -->
				{!! Form::close() !!}


			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	
	<!-- slugging it -->
	<script type="text/javascript">
	$(document).ready( function() {
	    $("#inputTitle").stringToSlug({
	    	getPut: '#slug'
	    });
	});
	</script>

	<!-- sweet alert confirm dialog -->
	@include('partials.js.delete')

@endsection