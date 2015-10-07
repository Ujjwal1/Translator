@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
        <tr>
		<th>Language</th><th>Calculator Name</th><th>Age</th> <th>Sex</th><th>Female</th>
            <th>Male</th><th>Food Type</th><th>Celebration</th><th>Smooth</th><th>Sugar</th>
            <th>Fat</th><th>saturated fat</th><th>Salt</th><th>Sodium</th><th>Salt</th>
            <th>Low</th><th>Medium</th><th>High</th><th>Calculate</th>
            <th>Result</th><th>Description Title</th><th>Description body</th>
    </tr>
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='age' value= '{{$result->age}}'></td>
            <td><input type="text" name='sex' value= '{{$result->sex}}'></td>
            <td><input type="text" name='female' value= '{{$result->female}}'></td>
            <td><input type="text" name='male' value= '{{$result->male}}'></td>
            <td><input type="text" name='type' value= '{{$result->type}}'></td>
            <td><input type="text" name='celebration' value= '{{$result->celebration}}'></td>
            <td><input type="text" name='smooth' value= '{{$result->smooth}}'></td>
            <td><input type="text" name='sugar' value= '{{$result->sugar}}'></td>
            <td><input type="text" name='fat' value= '{{$result->fat}}'></td>
            <td><input type="text" name='saturated_fat' value= '{{$result->saturated_fat}}'></td>
            <td><input type="text" name='salt_per_hundred' value= '{{$result->salt_per_hundred}}'></td>
            <td><input type="text" name='sodium' value= '{{$result->sodium}}'></td>
            <td><input type="text" name='salt' value= '{{$result->salt}}'></td>
            <td><input type="text" name='low' value= '{{$result->low}}'></td>
            <td><input type="text" name='medium' value= '{{$result->medium}}'></td>
            <td><input type="text" name='high' value= '{{$result->high}}'></td>
            <td><input type="text" name='calculate' value= '{{$result->calculate}}'></td>
            <td><input type="text" name='result' value= '{{$result->result}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body' value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
        {{ Form::close() }}
    @endforeach
</table>

@stop