<html>
<head>
	<title>{{$result->calculator_name}}</title>
        <style>
            .main_carbon input,#select
           {
                    color:black;
                    width:100px;
                }
            
        </style>
            
</head>
<body>
	@extends('rechnr.master')
	@section('content')
<div class="main_carbon">
{{	Form::open(array('url'	=>	$link_url))}}

<div class="field">
    <label>{{$result->fuel}}:</label>
<span><select id="select" name="fuel">
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
    </select></span>
</div>

<div class="field">
    <label>{{$result->litre}}</label>
    <span><input name="amount" type="text"  {{ (Input::old('amount')) ? 'value='.'"'.Input::old("amount").'"' : "" }} /> <span></div>
@if($errors->has('amount'))
		{{ $errors->first('amount') }}
@endif
<div class="field">
    <label>{{$result->_each}}</label>
<span><select id="select" name="duration" onchange="calc();"  {{ (Input::old('duration')) ? 'value='.'"'.Input::old("duration").'"' : "" }} >
<option value="365" ><i>{{$result->day}}</i></option>
<option value="52" ><i>{{$result->week}}</i></option>
<option value="12" selected="selected"><i>{{$result->month}}</i></option>
<option value="1" ><i>{{$result->year}}</i></option>
    </select></span>
</div>

<div class="field">
<label>
    {{$result->_with}} </label>
    <span>  <input name="person" type="text" style="width:120px;"  {{ (Input::old('person')) ? 'value='.'"'.Input::old("person").'"' : "" }} /></span>
 @if($errors->has('person'))
		{{ $errors->first('person') }}
@endif
{{$result->person}}
</div>

<div class="field"><label></label>
    <span><input id="submit" type="submit" value="{{$result->calculate}}"></span>
</div>

  {{ Form::token() }} 
{{ Form::close() }}

<div id="answer">{{ $message }}</div>
<div>	
       <h1>{{ $result->description_title }}</h1>
        <h2>{{ $result->description_body }}</h2>
</div>
    @stop
</body>
</html>


