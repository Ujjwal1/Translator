<!DOCTYPE html>
<html>
	<head>
	<title>
		{{$result->calculator_name}}
	</title>
            <style>
                #main_measurement input,#select
                {
                    color:black;
                    width: 100px;
                }
              
          
            </style>
	</head>
	
	@extends('rechnr.master')
	
	@section('content')
        <div id="main_measurement">
	{{	Form::open(array('url'	=>	$link_url))}}
		<div class="field">
                    <label>{{$result->metric}}</label><span><select name="metric" onchange="this.form.submit()">
				<option value={{ (isset($_POST['metric'])) ?'"'.$_POST['metric'].'"' : "" }}>{{ isset($_POST['metric']) ? $_POST['metric'] :"--".$result->select."--" }}</option>
				@if(isset($_POST['metric']))
					@if($_POST['metric'] != 'Weight')
						<option value="Weight">{{$result->weight}}</option>
					@endif
				@else
					<option value="Weight">{{$result->weight}}</option>
				@endif
				@if(isset($_POST['metric']))
					@if($_POST['metric'] != 'Length')
						<option value="Length">{{$result->length}}</option>
					@endif
				@else
					<option value="Length">{{$result->length}}</option>
				@endif
                        </select></span>
		</div>

<div class="field">
	@if(isset($_POST['metric']))
		@if($_POST['metric']==='Length')
			
					
                            <label>	<select id="select" name="from">
					<option value="">--{{$result->measure_from}}--</option>
					<option value="Kilometer">{{$result->kilometer}}</option>
					<option value="Miles">{{$result->miles}}</option>
                                </select>

                                <span>	<input class="to_num" type="number" step="any" name="length_from" style="width:60px;padding-left: 2px;"></span></label>

                            <span><select id="select" name="to">
					<option value="">--{{$result->measure_to}}--</option>
					<option value="Kilometer">{{$result->kilometer}}</option>
					<option value="Miles">{{$result->miles}}</option>
                                </select></span>
			

			@else

			
						
                                    <label>	<select id="select" name="from">
						<option value="">--{{$result->measure_from}}--</option>
						<option value="Kilogram">{{$result->kilogram}}</option>
						<option value="Pound">{{$result->pound}}</option>
                                        </select>
						
                                    <span>	<input class="to_num" type="number" step="any" name="weight_from"style="width:60px;padding-left: 2px;"></span></label>
                                    
                        <span>	<select id="select" name="to">
						<option value="">--{{$result->measure_to}}--</option>
						<option value="Kilogram">{{$result->kilogram}}</option>
						<option value="Pound">{{$result->pound}}</option>
                            </select></span>
				</div>
			@endif
                        <div class="field"><label></label><span><input id="submit" type="submit" value="Calculate" id="calculate"></span></div>
	@endif
		
		{{ Form::token() }}
	{{ Form::close() }}
	<p>
        <div id="answer">{{ $message }}</div>
	</p>
	<p>
	<strong></strong>
	</p>
	<p>
	
	</p>
        </div>
        @stop
        
</html>