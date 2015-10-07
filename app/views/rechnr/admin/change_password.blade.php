@extends('rechnr.admin.main')

@if(Session::has('global'))
	<p>{{Session::get('global')}}</p>
@endif

@if(Auth::check())
	
		{{	Form::open(array('url'	=>	$link_url))}}

		<div class="field">
			Old Password: <input type="password" name="old-password"  >
			@if($errors->has('old-password'))
				{{ $errors->first('old-password') }}
			@endif
		</div>

		<div class="field">
			New Password: <input type="password" name="new-password">
			@if($errors->has('new-password'))
				{{ $errors->first('new-password') }}
			@endif
		</div>
		
		<div>
			Confirm Password: <input type="password" name="confirm-password">
			@if($errors->has('confirm-password'))
				{{ $errors->first('confirm-password') }}
			@endif
		</div>

		<input type="submit" value="Change password">
		{{ Form::token() }}

	{{ Form::close() }}
@else
		
		
@endif