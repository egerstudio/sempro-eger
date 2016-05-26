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
						<a class="video-listing-item" href="/video/{{$relatedVideo->slug}}" style="background-image: url('{{ $relatedVideo->youtube_image }}');">
							<span class="caption">{{ $relatedVideo->title }}</span>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end related videos -->