@extends('layouts.default')
@section('content')
<h1>Categories</h1>
<hr>
<p class="lead">Click on a category to edit</p>
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Categories</h3>
			</div>
			<ul class="list-group">
				@foreach ($categories as $category)
				<li class="list-group-item"><a href="">{{$category->title}} <span class="badge pull-right">{{ $category->videos()->count() }}</span></a></li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Panel title</h2>
			</div>
			<div class="panel-body">
				<form>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection