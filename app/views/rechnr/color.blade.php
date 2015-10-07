<!DOCTYPE html>
<html>
	<head>
	<title>
		{{$result->calculator_name}}
	</title>
            <style>
                 .main_color input,#color_dropdown
                {
                    color:black;
                    width:100px;
                }
            </style>
	{{	HTML::script('js/color.js')	}}
	</head>
	<body>
	@extends('rechnr.master')
	
	@section('content')
        <div class="main_color">
	{{	Form::open(array('url'	=>	$link_url))}}
	<div class="field">
            <label>Color</label> <span><select name="color" id ="color_dropdown" onchange="dropdown(this.value);">
			<option value="">--{{ $result->choose_color }}--</option>
			<option value="#FF0000">{{ $result->red }}</option>
			<option value="#00FF00">{{ $result->green }}</option>
			<option value="#0000FF">{{ $result->blue }}</option>
			<option value="#FFFF00">{{ $result->yellow }}</option>
			<option value="#FFFFFF">{{ $result->white }}</option>
			<option value="#000000">{{ $result->black }}</option>
			<option value="#FF69B4">{{ $result->pink }}</option>
                </select></span>
	</div>

	<div class="field">
            <label>		{{ $result->hexadecimal }}</label><span> <input type="text" name="hexadecimal" id="color_hexadecimal" onkeyup="hexToRgb();"/>
            </span>
        </div>

	
	<div class="field">
            <label>
                {{ $result->rgb }}</label>
		<span><input type="text" id="red" style="background-color:#F00" value="00" onkeyup="rgb();"/>
		<input type="text" id="green" style="background-color:#0F0" value="00" onkeyup="rgb();"/>
                <input type="text" id="blue" style="background-color:#00F" value="00" onkeyup="rgb();"/></span>
	</div>

	
	<div class="field">
            <label>{{ $result->rgb_perc }}</label> 
		<span><input type="text" id="red_perc" style="background-color:#F00" value="00" onkeyup="rgb_perc();"/>
		<input type="text" id="green_perc" style="background-color:#0F0" value="00" onkeyup="rgb_perc();"/>
                <input type="text" id="blue_perc" style="background-color:#00F" value="00" onkeyup="rgb_perc();"/></span>
	</div>	

	<div class="field">
            <label>
                {{ $result->cmyk_perc }}</label>
		<span><input type="text" id="cyan_perc" style="background-color:#0FF" value="00" onkeyup="cymk_to_hex();"/>
		<input type="text" id="magenta_perc" style="background-color:#F0F" value="00" onkeyup="cymk_to_hex();"/>
		<input type="text" id="yellow_perc" style="background-color:#FF0" value="00" onkeyup="cymk_to_hex();"/>
		<input type="text" id="black_perc" style="background-color:#000; color:#FFF; " value="00" onkeyup="cymk_to_hex();"/>
                </span>
        </div>	
        <div id="answer">
	{{ $result->result }}: 
	<div id="result_color" style="width:80%;height: 30px;margin-top: 5px;border: 1px solid black; margin: auto; background-color: {{ $hexcolor }}"></div>
	<div id="web_safety" style="margin-top: 5px;"/>
	</div>
        </div>
        

	{{ Form::token() }}
	{{ Form::close() }}	
        
            {{ $message }}
	
            <h1>{{ $result->description_title }}</h1>
        <h2>{{ $result->description_body }}</h2>
	
	
        </div>
	@stop

</body>
</html>