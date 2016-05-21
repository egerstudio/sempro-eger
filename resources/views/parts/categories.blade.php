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
			<li><a href="{{ url('/archive/'.$year->year)}}">{{$year->year}}</a></li>
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
				<li><a href="{{ url($category->slug) }}">{{$category->title}}</a></li>
			@endforeach
			</ul>
		</div>
	@endif
</div>