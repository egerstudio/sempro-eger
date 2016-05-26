@foreach ($videos as $video)
	<div class="col-sm-6 col-md-4">
			<a class="video-listing-item" href="/video/{{$video->slug}}" style="background-image: url('{{$video->youtube_image}}');">
			<span class="caption">{{ $video->title }}</span>
		</a>
		@include('backend.partials._adminOptionsOnVideo')
	</div>
@endforeach