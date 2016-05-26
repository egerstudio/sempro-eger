@extends('layouts.default')
@section('content')
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  @include('partials.youtubeplayer')
</div>
@if (Auth::user())
<div class="row">
	<div class="col-md-12">
		<div class="well">
			<a href="{{ action('BackendVideosController@edit',['video' => $video->id]) }}" class="btn btn-primary">Edit this video</a>
			
			<a href="{{ action('BackendVideosController@destroy',['video' => $video->id]) }}"
					class="btn btn-danger pull-right"
					data-delete="" 
				    data-title="Deleting video" 
				    data-message="Do you really want to delete this video?"
				    data-button-text="Yes, delete it!">Delete video</a>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-md-12">
		<h2>
			{{ $video->title }} 
			<small class="pull-right">Category: 
			<a href="{{ action('VideosController@category',['category' => $video->category->slug]) }}">
				{{ $video->category->title }}
			</a>
			</small>
		</h2>
		<!-- tags -->
		<p>
			@foreach ($video->youtubeDetails()->snippet->tags as $tag)
			<span class="label label-default">{{ $tag }}</span>
			@endforeach
		</p>
		
		<!-- description -->
		<div class="well">
			<p>
				<small>Viewed {{$video->youtubeDetails()->statistics->viewCount }} times on YouTube and elsewhere, published {{ $video->publishedDateforHumans() }}.</small>
			</p>
			<p class="description">
				{!! nl2br($video->description) !!}
				<!-- nl2br to keep <br> in text -->
			</p>
		</div>
	</div>
</div>

@include('partials.relatedVideos')

@endsection

@section('scripts')
<!-- sweet alert confirm dialog -->
	@include('partials.js.delete')
@endsection

