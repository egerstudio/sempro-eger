<!-- Youtube id form input -->
<div class="form-group">
	{!! Form::label('youtube_id','Youtube ID: ', ['class' => 'col-sm-2 control-label label-lg']) !!}
	<div class="col-sm-4">
		{!! Form::text('youtube_id', null, ['class' => 'form-control input-lg','aria-describedby' => 'youtubeidInfo', $readonly, 'id' => 'youtubeId']) !!}
		<span id="youtubeidInfo" class="help-block">
			Type in the Youtube ID of the video you want to add, and the fields below are automatically populated, you can then edit the fields to your liking.
		</span>
	</div>
	{{-- should we preview?? --}}
	@if ($readonly && isset($video))
	<div class="col-sm-4">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/{{ $video->youtube_id }}?showinfo=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	@endif
</div>

<!-- Title form input -->
<div class="form-group">
	{!! Form::label('title','Title: ', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-8">
		{!! Form::text('title', null, ['class' => 'form-control', 'id' => 'inputTitle']) !!}
	</div>
</div>

<!-- Slug form input  -->
<div class="form-group">
	{!! Form::label('slug','Slug: ', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-8">
		{!! Form::text('slug', null, ['class' => 'form-control','aria-describedby' => 'slugInfo', 'id' => 'slug']) !!}
		<span id="slugInfo" class="help-block">
			The 'slug' is automatically suggested when you type into the category field. A slug <strong>must be unique</strong>, and can only consist of lowercase characters that are allowed in a regular URL. That means no special characters, but numbers and dashes and underscores are allowed. Spaces will be replaced by a dash and unsupported characters will be ignored.
		</span>
	</div>
</div>

<!-- Description form input  -->
<div class="form-group">
	{!! Form::label('description','Description: ', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-8">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
	</div>
</div>

<!-- Category input  -->
<div class="form-group">
	{!! Form::label('category_id','Category: ', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-8">
	@if($readonly)
		{!! Form::select('category_id',$categories, $video->category_id, ['class' => 'form-control']) !!}
	@else
		{!! Form::select('category_id',$categories, null, ['class' => 'form-control', 'placeholder' => 'Select a category...']) !!}
	@endif
	</div>
</div>

<!-- Featured video form input  -->
<div class="form-group">	
	<div class="col-sm-8 col-sm-offset-2">
		<div class="checkbox">
		    <label>
		      {!! Form::checkbox('featured',1,$video->featured) !!} Make this a featured video (overrides current selection if it exists)
		    </label>
		</div>
	</div>
</div>

<!-- Youtube date form input  -->
<div class="form-group">
	{!! Form::label('youtube_date','Published date: ', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-8">
		{!! Form::text('youtube_date', null, ['class' => 'form-control','aria-describedby' => 'dateInfo', 'id' => 'youtube_date']) !!}
		<span id="dateInfo" class="help-block">
			This field shows the date used to sort the video by. You can manually edit this if you want to change the order in which the videos are sorted. Note that the format must be <strong>YYYY-MM-DD HH:MM:SS</strong>.
		</span>
	</div>
</div>



<!-- Submit form input -->
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}

	@if (isset($showDeleteButton))
		{!! Form::button('Delete video', ['class' => 'btn btn-danger pull-right']) !!}
	@endif 
	</div>
</div>

