<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Categories</h3>
	</div>
	<div class="panel-body">
		<small>Select a category to edit.</small>
	</div>
	<ul class="list-group">
		@foreach ($categories as $category)
		<li class="list-group-item"><a href="/backend/categories/{{$category->id}}/edit">{{$category->title}} <span class="badge pull-right">{{ $category->videos()->count() }}</span></a></li>
		@endforeach
	</ul>
</div>