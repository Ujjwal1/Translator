@extends('rechnr.master')

@section('admin_content')


@if(Session::has('lang'))
	{{Session::get('lang')}}
@endif

	{{	Form::open(array('url'	=>	$link_url))}}
		<div>
		Language: <input type="text" name="language" placeholder="Eg. English/German/Hindi">
		 *Please be careful while adding up the language</div>

		 <div>
		 	Provied the TLD: <input type="text" name="tld" placeholder="Eg. com/de/in/org">
		 </div>
		<input type="submit" value="Add language">
		{{ Form::token() }}
	{{ Form::close() }}
@stop