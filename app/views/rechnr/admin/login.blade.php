@extends('rechnr.admin.main')

@if(Session::has('global'))
	<p>{{Session::get('global')}}</p>
@endif

@if(Auth::check())

@else
		
		{{	Form::open(array('url'	=>	$link_url))}}

		<div class="field">
			Username: <input type="text" name="username" {{ (Input::old('username')) ? 'value='.'"'.Input::old("username").'"' : "" }}>
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
		</div>

		<div class="field">
			Password: <input type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		<div>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Remember me
			</label>
		</div>

		<input type="submit" value="Login">
		{{ Form::token() }}

		{{ Form::close() }}
@endif