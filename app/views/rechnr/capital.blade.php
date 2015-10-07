<!DOCTYPE html>
<html>
	<head>
	<title>
		{{$result->calculator_name}}
	</title>
            <style>
             .main_capital input,#select
                {
                    color:black;
                    width:100px;
                }
                </style>
	</head>
	<body>
	@extends('rechnr.master')
	@section('content')
        <div class='main_capital'>
	{{	Form::open(array('url'	=>	$link_url))}}

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
                    <label>{{$result->fund}}</label><span ><input type="text" name="amount" {{ (Input::old('amount')) ? 'value='.'"'.Input::old("amount").'"' : "" }}></span>
			@if($errors->has('amount'))
				{{ $errors->first('amount') }}
			@endif
		</div>

		<div class="field">
			 <label>{{$result->interest}}</label><span ><input type="text" name="interest" {{ (Input::old('interest')) ? 'value='.'"'.Input::old("interest").'"' : "" }}></span>
			@if($errors->has('interest'))
				{{ $errors->first('interest') }}
			@endif
		</div>

		<div class="field">
			 <label>{{$result->consumption}}</label><span > <input type="text" name="period" {{ (Input::old('period')) ? 'value='.'"'.Input::old("period").'"' : "" }}></span>
			@if($errors->has('period'))
				{{ $errors->first('period') }}
			@endif
		</div>


        <div class="field"> <label></label><span><input type="submit" value="{{$result->calculate}}"></span></div>
		{{ Form::token() }}
	{{ Form::close() }}
	
        <div id="answer">{{ $message }}</answer>
<p>
<h1>{{ $result->description_title }}</h1>
<h2>{{ $result->description_body }}</h2>
        </div>
	@stop
	
	</body>
</html>
