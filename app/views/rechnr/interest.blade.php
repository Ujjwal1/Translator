<!DOCTYPE html>
<html>
<head>
	<title> {{$result->calculator_name}} </title>
        <style>
             .main_interest input,#select
                {
                    color:black;
                    width:100px;
                }
        </style>
</head>
<body>
	@extends('rechnr.master')
	@section('content')
        <div class="main_interest">
	{{	Form::open(array('url'	=>	$link_url))}}
		<div class="field">
                    <label>{{$result->currency}}</label>
			<span><select id="select" name="currency"> 
				<option value="₹"> ₹ 	</option>
				<option value="€"> €	</option>
				<option value="$"> $ 	</option>
				<option value="£"> £	</option>
				<option value="¥"> ¥ 	</option>
                            </select></span>
		</div>

		<div class="field">
                    <label>"{{$result->agreed_term}}</label>
                    <span>	<input type="text" name="term">
			<select id="select" name="term_type"> 
				<option value="year"> {{$result->year}}  	</option>
				<option value="month"> {{$result->month}}	</option>
				<option value="days"> {{$result->day}} 	</option>
                        </select></span>
			@if($errors->has('term'))
				{{ $errors->first('term') }}
			@endif
		</div>

		<div class="field" >
                    <label>{{$result->initial_amount}}</label> 
                    <span><input name="amount"></span>
			@if($errors->has('savings'))
				{{ $errors->first('savings') }}
			@endif
		</div>

		<div class="field" >
                    <label>{{$result->savings}}</label>
                    <span><input name="savings"></span>
			@if($errors->has('savings'))
				{{ $errors->first('savings') }}
			@endif
		</div>

		<div class="field" >
                    <label>{{$result->rate}}</label>
                    <span>	<input id="select" name="rate"></span>
			@if($errors->has('rate'))
				{{ $errors->first('rate') }}
			@endif
		</div>
		<div class="field" >
                    <label>{{$result->compound_interest}}</label>
			<span><select id="select" name="interest_on_interest"> 
				<option value="considering"> {{$result->considering}}</option>
				<option value="notconsidering" selected="selected">{{$result->not_considering}}</option>
                            </select></span>
		</div>

        <div class="field"><label></label><span><input id="submit" type="submit" value="{{$result->calculate}}"></span></div>
		
		{{ Form::token() }}
	{{ Form::close() }}
	<div id="answer">
	{{ $message }}
        </div>
        <h1>{{ $result->description_title }}</h1>
        <h2>
	{{ $result->description_body }}
        </h2>
        </div>
	@stop

</body>
</html>