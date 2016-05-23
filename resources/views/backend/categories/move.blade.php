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
				<h2 class="panel-title">Deleting category: {{ $category->title }}</h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<p class="lead">
							To delete this category, you need to move the following videos into a new category.
						</p>
						<p>
							Select a new category for the videos listed below, and then click "Move videos &amp; delete category".
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						@include ('errors.list')
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{!! Form::open(['method' => 'POST', 'action' => ['BackendCategoriesController@moveAll', 'category_id' => $category->id], 'class' => 'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('category','New category: ', ['class' => 'col-sm-2 control-label']) !!}
							<div class="col-sm-6">
								{!! Form::select('newcategory_id',$categoriesList, null, ['class' => 'form-control']) !!}
							</div>
							<div class="col-sm-4">
							{!! Form::submit('Movie videos &amp; delete category', ['class' => 'btn btn-primary']) !!}
						</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>

				

				<!-- Form open -->
				{!! Form::open(['method' => 'PATCH', 'action' => ['BackendCategoriesController@update', $category->id], 'class' => 'form-horizontal']) !!}
					@foreach ($category->videos as $video)
					<div class="row">	
						<div class="col-xs-4 col-md-2">
							<img src="{{ $video->youtubeDetails()->snippet->thumbnails->high->url }}" class="thumbnail img-responsive">
						</div>
						<div class="col-xs-8 col-md-10">
							<h4>{{ $video->title }}</h4>
							
						</div>
					</div>
					@endforeach
						
					

				<!-- Form close -->
				{!! Form::close() !!}
				

			</div>
		</div>
	</div>
</div>



@endsection

@section('scripts')

@endsection