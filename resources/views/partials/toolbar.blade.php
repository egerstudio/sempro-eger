{{-- toolbar visible for everyone --}}
<!-- archive and categories -->
<div class="btn-group categories-list" role="group" aria-label="Archive and Categories">
	<a class="btn btn-default" href="/">Show all videos</a>
	<!-- archive -->
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Video archive
		  <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
		@foreach ($years->distinctYears() as $year)
			<li><a href="{{ action('VideosController@archive',['year' => $year->year]) }}">{{$year->year}}</a></li>
		@endforeach
		</ul>
	</div>
	<!-- categories -->
	@if(isset($categories))
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Browse by category
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
			@foreach ($categories as $category)
				<li><a href="{{ action('VideosController@category',['category' => $category->slug]) }}">{{$category->title}}</a></li>
			@endforeach
			</ul>
		</div>
	@endif
</div>

{{-- toolbar visible for admins --}}
@if (Auth::user())
<!-- archive and categories -->
<div class="btn-group space-toolbar" role="group" aria-label="Administrator toolbar">
	<button class="btn btn-primary" disabled><small><strong>ADMINISTRATOR</strong></small></button>
	<!-- videos -->
	<a href="{{ action('BackendVideosController@create') }}" class="btn btn-default">Add a video</a>
	<!-- categories -->
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Categories
		  <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="{{ action('BackendCategoriesController@index') }}">Show categories</a></li>
			<li><a href="{{ action('BackendCategoriesController@create') }}">Add category</a></li>
		</ul>
	</div>
</div>
@endif