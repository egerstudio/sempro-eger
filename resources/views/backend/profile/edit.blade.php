@extends('layouts.default')
@section('content')
<h1>User profile</h1>
<hr>
{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id], 'class' => 'form-horizontal']) !!}
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">

				<div class="row">

					<div class="col-md-6 buffer-40-bottom">
						<h4>Change your details</h4>
						<hr>
						<!-- Email form input -->
						<div class="form-group">
							{!! Form::label('email','E-mail: ', ['class' => 'col-sm-3 control-label']) !!}
							<div class="col-sm-8">
								{!! Form::text('email', null, ['class' => 'form-control']) !!}
							</div>
						</div>

						<!-- Name form input -->
						<div class="form-group">
							{!! Form::label('name','Name: ', ['class' => 'col-sm-3 control-label']) !!}
							<div class="col-sm-8">
								{!! Form::text('name', null, ['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
					<!-- col end -->

					<div class="col-md-6">
						<h4>Change your password</h4>
						<hr>
						<!-- Password 1 form input -->
						<div class="form-group">
							{!! Form::label('password','Old password: ', ['class' => 'col-sm-3 control-label']) !!}
							<div class="col-sm-8">
								<input type="password" placeholder="Old password" class="form-control" name="password">
							</div>
						</div>
						<hr>
						<!-- Password 1 form input -->
						<div class="form-group">
							{!! Form::label('newpassword','New password: ', ['class' => 'col-sm-3 control-label']) !!}
							<div class="col-sm-8">
								<input type="password" placeholder="New password" class="form-control" name="newpassword">
							</div>
						</div>
						<!-- Password 2 form input -->
						<div class="form-group">
							{!! Form::label('newpasswordrepeat','Repeat password: ', ['class' => 'col-sm-3 control-label']) !!}
							<div class="col-sm-8">
								<input type="password" placeholder="Repeat new password" class="form-control" name="newpasswordrepeat">
							</div>
						</div>
						<p>To change your password, type in your old password, followed by an identical new password in the next two fields.</p>

					</div>
					<!-- col end -->

					<div class="col-md-12">
					<hr>
					@include ('errors.list')
					<!-- Submit form input -->
						<div class="form-group">
							<div class="col-sm-12">
							{!! Form::submit('Save changes', ['class' => 'btn btn-primary pull-right']) !!}
							</div>
						</div>
					</div>

				</div>
				<!-- row end -->

			</div>
			<!-- panel body end -->

		</div>
		<!-- panel end -->

	</div>
	<!-- row end -->

</div>
{!! Form::close()  !!}
@endsection