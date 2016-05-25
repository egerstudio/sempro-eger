<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Categories</h3>
	</div>
	<div class="panel-body">
		<small><strong>Select a category to edit.</strong></small>
	</div>
	<ul class="list-group">
		@foreach ($categories as $category)
		<li class="list-group-item"><a href="/backend/categories/{{$category->id}}/edit">{{$category->title}} <span class="badge pull-right">{{ $category->videos()->count() }}</span></a></li>
		@endforeach
		@if(empty($categories))
		<li class="list-group-item alert-danger"><small>No categories here yet</small></li>
		@endif 
	</ul>
</div>