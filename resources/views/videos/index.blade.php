@extends('layouts.default')
@section('content')
	
	@include('parts.categories')

	<div class="row">

	@foreach ($videos as $video)

		<div class="col-sm-6 col-md-4">
			<a class="video-listing-item" href="/videos/{{$video->slug}}" style="background-image: url('http://i2.ytimg.com/vi/{{$video->youtube_id}}/maxresdefault.jpg');">
				<span class="caption">{{ $video->title }}</span>
			</a>
		</div>

	@endforeach
	</div> <!-- end row listing -->
	
	{!! $videos->render() !!}
	

@endsection