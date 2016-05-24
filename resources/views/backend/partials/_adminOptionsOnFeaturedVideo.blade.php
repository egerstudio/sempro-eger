@if (Auth::user())
<div class="well well-sm well-edit">
	<div class="btn-group btn-group-xs edit-video -featured" role="group" aria-label="Administrator options for video: {{$featuredVideo->title}}">
		<a class="btn btn-default" href="/backend/videos/{{$featuredVideo->id}}/edit"><i class="fa fa-btn fa-cog"></i> Edit video</a>
		<a href="{{ action('BackendVideosController@destroy',['video' => $featuredVideo->id]) }}"
					class="btn btn-default"
					data-delete="" 
				    data-title="Deleting video" 
				    data-message="Do you really want to delete this video?"
				    data-button-text="Yes, delete it!"><i class="fa fa-trash"></i> Delete video</a>
	</div>
</div>
@endif