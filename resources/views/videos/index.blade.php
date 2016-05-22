@extends('layouts.default')
@section('content')
	<div class="row">
	@foreach ($videos as $video)
		<div class="col-sm-6 col-md-4">
			<a class="video-listing-item" href="/video/{{$video->slug}}" style="background-image: url('{{ $video->youtubeDetails()->snippet->thumbnails->maxres->url }}');">
				<span class="caption">{{ $video->title }}</span>
			</a>
			@include('backend.parts._adminOptionsOnVideo')
		</div>
	@endforeach
	</div> <!-- end row listing -->
	
	<!-- paginate -->
	<div class="well well-sm text-center">
		{!! $videos->render() !!}
		<p>
			Showing {{ $videos->count() }} out of a total of {{ $videos->total() }} videos
		</p>
	</div>	

@endsection