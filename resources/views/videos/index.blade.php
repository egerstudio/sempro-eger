@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="pageTitle">{{$page_title or ''}} <small>{{$page_subtitle or ''}}</small></h1>
			<hr>
		</div>
	</div>

	@if(empty($videos->first()))
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<div class="well well-lg">
				<h2>Nothing here</h2>
				<p class="lead">Sorry, we have no videos to show you</p>
			</div>
		</div>
	</div>
	@endif

	<div class="row">
	@if (isset($featuredVideo) && $videos->currentPage() == 1)
	<div class="col-md-12 featured-wrapper">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<a class="video-listing-item -featured" href="/video/{{$featuredVideo->slug}}" style="background-image: url('{{$featuredVideo->youtube_image}}');">
					<span class="caption">{{ $featuredVideo->title }}</span>
				</a>
				@include('backend.partials._adminOptionsOnFeaturedVideo')
			</div>
		</div>
	</div>
	@endif
	@include('partials.videoitem-list-row')
	</div> <!-- end row listing -->
	
	<!-- paginate -->
	<div class="well well-sm text-center">
		{!! $videos->render() !!}
		<p>
			Showing {{ $videos->count() }} out of a total of {{ $videos->total() }} videos
		</p>
	</div>	
@endsection

@section('scripts')
<!-- sweet alert confirm dialog -->
	@include('partials.js.delete')
@endsection