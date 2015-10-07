<!DOCTYPE html>
<html>
<head>
	<title> {{$result->calculator_name}} </title>
 <style>
                 .main_week input,#select
                {
                    color:black;
                    width:100px;
                }
            </style>
</head>
<body>
	@extends('rechnr.master')
	@section('content')
        <div id="main_week">
	{{$result->current_week}} : {{ date("W"); }}

	{{	Form::open(array('url'	=>	$link_url))}}
		
        <div class="field">
            <label>	{{$result->date}}: </label>
			<select id="select" name="day">
				<option value="1">1 </option>
				<option value="2">2 </option>
				<option value="3">3</option>
				<option value="4"> 4</option>
				<option value="5">5</option>
				<option value="6">6 </option>
				<option value="7">7 </option>
				<option value="8"> 8</option>
				<option value="9"> 9</option>
				<option value="10">10 </option>
				<option value="11"> 11</option>
				<option value="12"> 12</option>
				<option value="13"> 13</option>
				<option value="14">14 </option>
				<option value="15">15 </option>
				<option value="16">16 </option>
				<option value="17">17 </option>
				<option value="18">18 </option>
				<option value="19"> 19</option>
				<option value="20">20 </option>
				<option value="21">21 </option>
				<option value="22"> 22</option>
				<option value="23"> 23</option>
				<option value="24">24 </option>
				<option value="25">25 </option>
				<option value="26">26 </option>
				<option value="27"> 27</option>
				<option value="28"> 28</option>
				<option value="29"> 29</option>
				<option value="30">30 </option>
				<option value="31">31 </option>
			</select>
		
			<select id="select" name="month">
				<option value="1">1 </option>
				<option value="2"> 2</option>
				<option value="3"> 3</option>
				<option value="4"> 4</option>
				<option value="5"> 5 </option>
				<option value="6"> 6 </option>
				<option value="7"> 7 </option>
				<option value="8"> 8 </option>
				<option value="9"> 9 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
			</select>
	
			<input id="ans" type="text" name="year" value="2015">
        </div>
        
                        <!--error message if the date is wrong -->
        <div class="field">        
        <label></label>
        <span>	<input id="submit" type="submit" value="{{$result->calculate}}"></span>
	{{ Form::token() }}
	{{ Form::close() }}
               
            </div>
	
        <div id="answer">{{ $message }}</div>
	
        <h1>{{ $result->description_title }}</h1>	<h2>{{ $result->description_body }}
        </h2>
    
	@stop
</body>
</html>