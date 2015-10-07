@extends('rechnr.admin.main')

@if(Auth::check())
	<pre>Welcome {{ Auth::user()->user_name }}</pre> 
@endif

@if(Session::has('global'))
	<p>{{Session::get('global')}}</p>
@endif