@extends('layouts.default')
@section('content')
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/{{ $video->youtube_id }}"></iframe>
</div>
@endsection

