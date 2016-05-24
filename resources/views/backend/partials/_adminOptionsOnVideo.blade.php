@if (Auth::user())
<div class="well well-sm well-edit">
	<div class="btn-group btn-group-xs" role="group" aria-label="Administrator options for video: {{$video->title}}">
		<a class="btn btn-default" href="/backend/videos/{{$video->id}}/edit"><i class="fa fa-btn fa-cog"></i> Edit video</a>
		<a href="{{ action('BackendVideosController@destroy',['video' => $video->id]) }}"
					class="btn btn-default pull-right"
					data-delete="" 
				    data-title="Deleting video" 
				    data-message="Do you really want to delete this video?"
				    data-button-text="Yes, delete it!"><i class="fa fa-trash"></i> Delete video</a>
	</div>
</div>
@endif