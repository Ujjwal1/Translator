<!DOCTYPE html>
<html>
	<head>
	<title>
		{{$result->calculator_name}}
	</title>
            <style>
                 .main_petrol input,#select
                {
                    color:black;
                    width:100px;
                }
            </style>
	</head>
	<body>
	@extends('rechnr.master')
	@section('content')
        <div class="main_petrol">
	{{	Form::open(array('url'	=>	$link_url)) }}

		<div class="field">
                    <label>{{$result->currency}}</label><span> <select id="select" name="currency">
									<option value="₹">₹</option>
									<option value="€">€</option>
									<option value="$">$</option>
									<option value="£">£</option>
									<option value="¥">¥</option>
                        </select></span>
		</div>

		<div class="field">
                    <label>{{$result->driven_kilometer}}</label><span> <input type="text" name="distance" {{ (Input::old('distance')) ? 'value='.'"'.Input::old("distance").'"' : "" }}></span>
			@if($errors->has('distance'))
				{{ $errors->first('distance') }}
			@endif
		</div>

		<div class="field">
                    <label>{{$result->consumed_litres}}</label><span> <input type="text" name="consumed" {{ (Input::old('consumed')) ? 'value='.'"'.Input::old("consumed").'"' : "" }}></span>
			@if($errors->has('consumed'))
				{{ $errors->first('consumed') }}
			@endif
		</div>

		<div class="field">
                    <label>{{$result->fuel_cost_today}}</label><span> <input type="text" name="fuel_cost" {{ (Input::old('fuel_cost')) ? 'value='.'"'.Input::old("fuel_cost").'"' : "" }}></span>
			@if($errors->has('fuel_cost'))
				{{ $errors->first('fuel_cost') }}
			@endif
		</div>

        <div class="field"><label></label><span><input id="submit" type="submit" value="{{$result->calculate}}"></span></div>
		{{ Form::token() }}
	{{ Form::close() }}
	
	<div id="answer">
	{{ $message }}
        </div>
	    <h1>{{ $result->description_title }}</h1>
        <h2>{{ $result->description_body }}</h2>
	@stop
	
	</body>
</html>