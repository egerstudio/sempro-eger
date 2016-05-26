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
				<p class="lead">Sorry, we couldn't find anything based on your search term.</p>
			</div>
		</div>
	</div>
	@endif

	<div class="row">
		@include('partials.videoitem-list-row')
	</div>
	
	<!-- paginate -->
	<div class="well well-sm text-center">
		{!! $videos->appends(['query' => $query])->render() !!}
		<p>
			Showing {{ $videos->count() }} out of a total of {{ $videos->total() }} videos
		</p>
	</div>	
@endsection

@section('scripts')
<!-- sweet alert confirm dialog -->
	@include('partials.js.delete')
@endsection