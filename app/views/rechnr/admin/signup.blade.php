@extends('rechnr.admin.main')

@if(Auth::check())

@else

	<form action="{{ URL::route('account-signup-post') }}" method="post">
		<div>
			Username: <input type="text" name="username" {{ (Input::old('username'))?' value="'.e(Input::old('username')).'"':'' }}>
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
		</div>

		<div>
			Password: <input type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>

		<div>
			Password Again: <input type="password" name="password_again">
			@if($errors->has('password_again'))
				{{ $errors->first('password_again') }}
			@endif
		</div>

		<input type="submit" value="Create account">

		{{ Form::token() }}


	</form>

@endif