@if (Auth::user())
	<div class="btn-group btn-group-xs edit-video -featured" role="group" aria-label="Administrator options for video: {{$featuredVideo->title}}">
		<a class="btn btn-default edit-btn" href="/backend/videos/{{$featuredVideo->id}}/edit"><i class="fa fa-btn fa-cog"></i> Edit video</a>
		<a class="btn btn-default edit-btn"><i class="fa fa-btn fa-trash"></i> Delete video</a>
	</div>
@endif