<!-- archive and categories -->
	<div class="btn-group categories-list" role="group" aria-label="Archive and Categories">
		<a class="btn btn-default" href="/">All</a>
		<!-- archive -->
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Archive
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">2016</a></li>
				<li><a href="#">2015</a></li>
				<li><a href="#">2014</a></li>
			</ul>
		</div>
		<!-- categories -->
		@foreach ($categories as $category)
		<a class="btn btn-default">{{$category->title}}</a>
		@endforeach
	</div>