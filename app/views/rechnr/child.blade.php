<!DOCTYPE html>
<html>
<head>
	<title> {{$result->calculator_name}}   </title>
        <style>
                 .main_child input,#select
                {
                    color:black;
                    width:100px;
                }
            </style>
</head>
<body>
	@extends('rechnr.master')
	@section('content')
         <div class="main_child">
	{{	Form::open(array('url'	=>	$link_url))}}
		<div class="field">
                    <label>{{$result->no_of_children}} ({{$result->criteria}})</label>
                    <span><input type="number" name="children"></span>
		</div>
	
        <div class="field"><label></label><span>	<input type="submit" value="{{$result->calculate}}"></span></div>
		
		{{ Form::token() }}
	{{ Form::close() }}
	<div id="answer">
	{{ $message }}
        </div>
	
	
        <h1> {{ $result->description_title }}</h1>
	
        <h2>
            {{ $result->description_body }}</h2>
         </div>
	@stop

</body>
</html>