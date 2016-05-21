@extends('layouts.default')
@section('content')
	
	@include('parts.categories')

	<div class="row">

	@foreach ($videos as $video)

		<div class="col-sm-6 col-md-4">
			<a class="video-listing-item" href="/videos/{{$video->slug}}" style="background-image: url('{{ $video->youtubeDetails()->snippet->thumbnails->maxres->url }}');">
				<span class="caption">{{ $video->title }}</span>
			</a>
		</div>

	@endforeach
	</div> <!-- end row listing -->
	
	{!! $videos->render() !!}
	

@endsection