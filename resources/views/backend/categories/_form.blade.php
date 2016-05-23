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
			The 'slug' is automatically suggested when you type into the category field. A slug <strong>must be unique</strong>, and can only consist of lowercase characters that are allowed in a regular URL. That means no special characters, but numbers and dashes and underscores are allowed. Special characters will be replaced by a dash, or removed automatically for you.
		</span>
	</div>
</div>

<!-- Sumit form input -->
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}

	@if (isset($showDeleteButton))
		<a href="/backend/categories/{{$category->id}}"
					class="btn btn-danger"
					data-delete="" 
				    data-title="Deleting category" 
				    data-message="Do you really want to delete this category?"
				    data-button-text="Yes, delete it!">Delete category</a>
	@endif 

	</div>
</div>