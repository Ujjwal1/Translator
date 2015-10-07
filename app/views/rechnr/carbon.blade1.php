<html>
<head>
	<title>{{$result->calculator_name}}</title>
        <style>
            #main_carbon
            {
                color:black;
            }
            #main_carbon input
            {
                width:100px;
            }
            
        </style>
            
</head>
<body>
	@extends('rechnr.master')
	@section('content')
<div id="main_carbon">
{{	Form::open(array('url'	=>	$link_url))}}

<table class="table">
    <tr><td>
            {{$result->fuel}}</td>
<td>:<select name="fuel">
<option value="2.6"><i>{{$result->heating_oil}}</i></option>
<option value="2"><i>{{$result->natural_gas}}</i></option>
<option value="2.7"><i>{{$result->pit_coal}}</i></option>
<option value="2.15"><i>{{$result->brown_coal}}</i></option>
<option value="0.22"><i>{{$result->long_distance_heating}}</i></option>
<option value="0.6"><i>{{$result->power}}</i></option>
<option value="2.4"><i>{{$result->car_benzene}}</i></option>
<option value="2.6"><i>{{$result->car_diesel}}</i></option>
<option value="0.002"><i>{{$result->car_natural_gas}}</i></option>
<option value="0.05"><i>{{$result->bus_train}}</i></option>
<option value="0.22"><i>{{$result->flight}}</i></option>
</select>
</td>

    </tr>
    <tr>
    <td>
        {{$result->litre}}</td>
    <td>
<input name="amount" type="text"  {{ (Input::old('amount')) ? 'value='.'"'.Input::old("amount").'"' : "" }} /> 
@if($errors->has('amount'))
		{{ $errors->first('amount') }}
@endif
{{$result->_each}}
<select name="duration" onchange="calc();"  {{ (Input::old('duration')) ? 'value='.'"'.Input::old("duration").'"' : "" }} >
<option value="365" ><i>{{$result->day}}</i></option>
<option value="52" ><i>{{$result->week}}</i></option>
<option value="12" selected="selected"><i>{{$result->month}}</i></option>
<option value="1" ><i>{{$result->year}}</i></option>
</select></td>
</tr>

<tr><td>
        {{$result->_with}}</td> 
    <td> <input name="person" type="text" style="width:120px;"  {{ (Input::old('person')) ? 'value='.'"'.Input::old("person").'"' : "" }} />
 @if($errors->has('person'))
		{{ $errors->first('person') }}
@endif
{{$result->person}}

  <input type="submit" value="{{$result->calculate}}">
</div>

  {{ Form::token() }} 
{{ Form::close() }}

	{{ $message }}<p>
	<b>{{ $result->description_title }}</b>
<br />
    {{ $result->description_body }}
</div>
    @stop
</body>
</html>


