@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

<table>
		<th>Language</th><th>Calculator Name</th> <th>Sex</th><th>Male</th><th>Female</th>
		<th>Height</th><th>Centimeter</th><th>Weight</th><th>Kilogram</th><th>Calculate</th><th>Classification</th><th>Underweight</th><th>Normal</th><th>Overweight</th>
        <th>Strongly Overweight</th><th>Extremely Overweight</th><th>You are</th><th>Your BMI is </th>
		<th>Description Title</th><th>Description Body</th>
	 
	 @foreach($results as $result)
{{  Form::open(array('url'  =>  $link_url))}}
            <tr>
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name'          value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='sex'                value= '{{$result->sex}}'></td>
            <td><input type="text" name='male'               value= '{{$result->male}}'></td>
            <td><input type="text" name='female'             value= '{{$result->female}}'></td>
            <td><input type="text" name='height'             value= '{{$result->height}}'></td>
            <td><input type="text" name='cm'                 value= '{{$result->cm}}'></td>
            <td><input type="text" name='weight'             value= '{{$result->weight}}'></td>
            <td><input type="text" name='kg'                 value= '{{$result->kg}}'></td>
            <td><input type="text" name='calculate'          value= '{{$result->calculate}}'></td>
            <td><input type="text" name='classification'     value= '{{$result->classification}}'></td>
            <td><input type="text" name='underweight'        value= '{{$result->underweight}}'></td>
            <td><input type="text" name='normal'             value= '{{$result->normal}}'></td>
            <td><input type="text" name='overweight'         value= '{{$result->overweight}}'></td>
            <td><input type="text" name='strong_overweight'  value= '{{$result->strong_overweight}}'></td>
            <td><input type="text" name='extreme_overweight' value= '{{$result->extreme_overweight}}'></td>
            <td><input type="text" name='result1'            value= '{{$result->result1}}'></td>
            <td><input type="text" name='result2'            value= '{{$result->result2}}'></td>
            <td><input type="text" name='description_title'  value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body'   value= '{{$result->description_body}}'></td>
            <td><input type="text" name='id'                 value= '{{$result->domain_id}}' hidden></td>
            <td><input type="submit"                         value= "Update"></td>
        </tr>
    </b>
    
        {{ Form::token() }}
    {{ Form::close() }}
    @endforeach
</table>

@stop