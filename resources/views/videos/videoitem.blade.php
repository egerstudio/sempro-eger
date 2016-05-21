@extends('layouts.default')
@section('content')
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/{{ $video->youtube_id }}?showinfo=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
  
</div>
<div class="row">
	<div class="col-md-12">
		<h3><small>CATEGORY: </small><span class="label label-default">{{ $video->category->title }}</span></h3>
		<h2>{{ $video->youtubeDetails()->snippet->localized->title }}</h2>
		<!-- tags -->
		<p>
			@foreach ($video->youtubeDetails()->snippet->tags as $tag)
			<span class="label label-default">{{ $tag }}</span>
			@endforeach
		</p>
		<!-- description -->
		<div class="well">
			<p>
				<small>Viewed {{$video->youtubeDetails()->statistics->viewCount }} times, published {{ $video->publishedDateforHumans() }}.</small>
			</p>
			<p class="description">
				{!! nl2br($video->youtubeDetails()->snippet->localized->description) !!}
				<!-- nl2br to keep <br> in text -->
			</p>
		</div>
	</div>
</div>

<!-- related videos go here -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				More from the category {{$video->category->title}}
			</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				@foreach ($relatedVideos as $relatedVideo)
					<div class="col-md-4">
						<a class="video-listing-item" href="/video/{{$relatedVideo->slug}}" style="background-image: url('{{ $relatedVideo->youtubeDetails()->snippet->thumbnails->maxres->url }}');">
							<span class="caption">{{ $relatedVideo->title }}</span>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

