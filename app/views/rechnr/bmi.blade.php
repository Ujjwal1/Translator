<!DOCTYPE html>
<html>
	<head>
	<title>
		{{ $result->calculator_name }}
	</title>
            <style>
                .main_bmi input,#select
                {
                    color:black;
                    width:100px;
                }
            </style>
	</head>
	<body>
	@extends('rechnr.master')
	
	@section('content')
	<div class="main_bmi">
        {{	Form::open(array('url'	=>	$link_url))}}
		<div class="field">
                    <label>{{$result->sex}}</label><span> <select name="sex" id="select">
				<option value="female">{{$result->female}}</option>
				<option value="male">{{$result->male}}</option>
                        </select></span>
		</div>

		<div class="field">
                    <label>{{$result->height}}</label><span> <input type="text" name="height" {{ (Input::old('height')) ? 'value='.'"'.Input::old("height").'"' : "" }}> {{ $result->cm}}</span>
			@if($errors->has('height'))
				{{ $errors->first('height') }}
			@endif
		</div>

		<div class="field">
                    <label>{{$result->weight}}</label><span> <input type="text" name="weight" {{ (Input::old('weight')) ? 'value='.'"'.Input::old("weight").'"' : "" }}> {{ $result->kg}}</span>
			@if($errors->has('weight'))
				{{ $errors->first('weight') }}
			@endif
		</div>


        <div class="field"><label</label><span><input id="submit" type="submit" value="{{$result->calculate}}"></span>
		{{ Form::token() }}
	{{ Form::close() }}
	
            <div id="answer" style="height:200px">
                {{ $message }}</div>
	
        <p>
	<strong> {{ $result->description_title }}</strong>
	</p>
	<p>
	{{ $result->description_body }}
	</p>
        </div>
	@stop
	</body>
</html>
