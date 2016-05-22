@extends('layouts.default')
@section('content')
<h1>Categories</h1>
<hr>
<div class="row">
	<div class="col-md-3 col-sm-4">
		@include('backend.parts.categorySidebar')
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Add a new Category</h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p>Please fill in the following fields to create a new category.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						@include ('errors.list')
					</div>
				</div>

				<!-- Form open -->
				{!! Form::open(array('url' => 'backend/categories', 'class' => 'form-horizontal')) !!}

					@include ('backend.categories._form', ['submitButtonText' => 'Add category'])

				<!-- Form close -->
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@endsection