@extends('layouts.default')
@section('content')
@include('parts.categories')
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
  
</div>
<div class="row">
	<div class="col-md-12">
		<h4><small>CATEGORY: </small>{{ $video->category->title }}</h4>
		<h2>{{ $video->youtubeDetails()->snippet->localized->title }}</h2>
		<!-- tags -->
		<p>
			@foreach ($video->youtubeDetails()->snippet->tags as $tag)
			<span class="label label-default">{{ $tag }}</span>
			@endforeach
		</p>
		<!-- description -->
		<div class="well">
			<p class="description">
				{!! $video->youtubeDetails()->snippet->localized->description !!}
			</p>
		</div>
	</div>
</div>
{{ var_dump($video->youtubeDetails()) }}
@endsection

