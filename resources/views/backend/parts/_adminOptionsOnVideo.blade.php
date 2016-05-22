@if (Auth::user())
	<div class="btn-group btn-group-xs edit-video" role="group" aria-label="Administrator options for video: {{$video->title}}">
		<a class="btn btn-default edit-btn" href="/backend/videos/{{$video->id}}/edit"><i class="fa fa-btn fa-cog"></i> Edit video</a>
		<a class="btn btn-default edit-btn"><i class="fa fa-btn fa-trash"></i> Delete video</a>
	</div>
@endif