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
				@if(empty($categoriesList->first()))
					
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							@include ('errors.list')
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-warning">You can't delete the last category, you have to create a new category and then delete this one if you want it removed.</div>
						</div>
					</div>

				@else
					
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
				@endif

				

				<div class="row">
				@if(empty($category->videos))
					<p class="lead">No videos in this category. What brought you here?</p>
				@endif
				@foreach ($category->videos as $video)
					<div class="col-xs-6 col-sm-4 text-center">
						<img src="{{ $video->youtube_image }}" class="img-responsive">
						<h5>{{ $video->title }}</h5>
						<hr>
					</div>
				@endforeach
				</div>

			</div>
		</div>
	</div>
</div>



@endsection

@section('scripts')

@endsection