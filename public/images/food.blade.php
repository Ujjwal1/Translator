<!DOCTYPE html>
<html>
	<head>
	<title>
		{{ $result->calculator_name }}
	</title>
	</head>
	<body>
	@extends('rechnr.master')
	
	@section('content')
	{{	Form::open(array('url'	=>	$link_url))}}
	
		<div class="field">
			{{ $result->type }} <select name="type">
				<option value="celebration">{{ $result->celebration}}</option>
				<option value="smooth">{{$result->smooth}}</option>
				</select>
		</div>

		<div class="field">
			{{$result->sugar}} (per 100 g) <input type="text" name="sugar" {{ (Input::old('sugar')) ? 'value='.'"'.Input::old("sugar").'"' : "" }}/>
			@if($errors->has('sugar'))
				{{ $errors->first('sugar') }}
			@endif
		</div>

		<div class="field">
			{{$result->fat}} (per 100 g): <input type="text" name="fat" {{ (Input::old('fat')) ? 'value='.'"'.Input::old("fat").'"' : "" }}/>
			@if($errors->has('fat'))
				{{ $errors->first('fat') }}
			@endif
		</div>

		<div class="field">
			{{ $result->saturated_fat}}(per 100 g): <input type="text" name="sat_fat" {{ (Input::old('sat_fat')) ? 'value='.'"'.Input::old("sat_fat").'"' : "" }}/>
			@if($errors->has('sat_fat'))
				{{ $errors->first('sat_fat') }}
			@endif
		</div>

		<div class="field">
			{{$result->salt}} per 100 g: <input type="text" name="salt" {{ (Input::old('salt')) ? 'value='.'"'.Input::old("salt").'"' : "" }}/>
			@if($errors->has('salt'))
				{{ $errors->first('salt') }}
			@endif
		</div>

			<input type="submit" value="Calculate">

			@if($sugar_result!=null && $salt_result!=null && $fat_result != null && $sat_fat_result !=null )
	<table border="1">
		<tr><th>{{$result->sugar}}</th><th>{{$result->salt}}</th><th>{{$result->fat}}</th><th>{{$result->saturated_fat}}</th></tr>
		<tr><td>
			
			@if($sugar_result === "red")
				
				{{ HTML::image('images/red.jpg') }}
			
			@endif
			@if($sugar_result=== "yellow")
				{{ HTML::image('images/yellow.jpg') }}
			@endif
			@if($sugar_result === "green")
				{{ HTML::image('images/green.jpg') }}
			@endif
			
		</td>
		<td>
			@if($salt_result=== "red")
				{{ HTML::image('images/red.jpg') }}
			
			@endif
			@if($salt_result === "yellow")
				{{ HTML::image('images/yellow.jpg') }}
			@endif
			@if($salt_result == "green")
				{{ HTML::image('images/green.jpg') }}
			@endif
		</td>
		<td>
			@if($fat_result == "red")
				{{ HTML::image('images/red.jpg') }}
			
			@endif
			@if($fat_result == "yellow")
				{{ HTML::image('images/yellow.jpg') }}
			@endif
			@if($fat_result == "green")
				{{ HTML::image('images/green.jpg') }}
			@endif
		</td>
		<td>
			@if($sat_fat_result == "red")
				{{ HTML::image('images/red.jpg') }}
			
			@endif
			@if($sat_fat_result == "yellow")
				{{ HTML::image('images/yellow.jpg') }}
			@endif
			@if($sat_fat_result == "green")
				{{ HTML::image('images/green.jpg') }}
			@endif

		</td>
	</tr>
</table>

	@if($choice=="celebration")
		 <table border="1">
        	<tr>
            	<td colspan="4" ><strong>{{$result->celebration}}</strong></td>
            </tr>
            <tr>
            	<td ></td>
                <td  width="70">{{$result->low}} <br>{{ HTML::image('images/green.jpg') }} </td>
                <td  width="70">{{$result->medium}} <br> {{ HTML::image('images/yellow.jpg') }}</td>
                <td  width="70">{{$result->high}} <br> {{ HTML::image('images/red.jpg') }}</td>
            </tr>
            <tr>
            	<td >{{$result->fat}}</td>
                <td > 3 g</td>
                <td >3  &ndash; 20 g</td>
                <td > 20 g</td>
            </tr>
            <tr>
            	<td>  {{$result->saturated_fat}} </td>
                <td > 1.5 g</td>
                <td >1.5 &ndash; 5 g</td>
                <td > 5 g</td>
            </tr>
            <tr>
            	<td >{{$result->sugar}}</td>
                <td > 5 g</td>
                <td >5 &ndash; 12.5 g</td>
                <td > 12.5 g</td>
            </tr>
            <tr>
            	<td>{{$result->salt}}</td>
                <td > 0.3 g</td>
                <td >0.3 &ndash; 1.5 g</td>
                <td > 1.5 g</td>
            </tr>
        </table>
	@else
		<table border="1">
        	<tr>
           	  <td colspan="4"><strong>{{$result->smooth}}</strong></td>
            </tr>
            <tr>
           	  <td></td>
                <td >Low <br>{{ HTML::image('images/green.jpg') }}</td>
                <td >Medium<br>{{ HTML::image('images/yellow.jpg') }}</td>
                <td >High <br>{{ HTML::image('images/red.jpg') }}</td>
            </tr>
            <tr>
           	  <td >{{$result->fat}}</td>
                <td > 1.5 g</td>
              <td >1.5 &ndash; 10 g</td>
              <td > 10 g</td>
            </tr>
            <tr>
           	  <td >{{$result->saturated_fat}}</td>
                <td > 0.75 g</td>
              <td >0.75 &ndash; 2.5 g</td>
              <td >2.5 g</td>
            </tr>
            <tr>
           	  <td >{{$result->sugar}}</td>
                <td > 2.5 g</td>
              <td >2.5 &ndash; 6.3 g</td>
              <td> 6.3 g</td>
            </tr>
            <tr>
           	  <td >{{$result->salt}}</td>
                <td > 0.3 g</td>
              <td >0.3 &ndash; 1.5 g</td>
              <td >1.5 g</td>
            </tr>
        </table>
	@endif
@endif

		{{ Form::token() }}
	{{ Form::close() }}
	<p>
	
	
	</p>
	<p>
	<strong> </strong>
	</p>
	<p>
	
	</p>
	@stop
	</body>
</html>
