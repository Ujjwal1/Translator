@extends('rechnr.master')

@section('admin_content')
@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

<table>
		<tr><th>Language</th><th>Calculator Name</th> <th>Number Of Children</th><th>Criteria of Age</th>
		<th>Calculate</th><th>Result</th>
		<th>Description Title</th><th>Description Body</th></tr>
	 
	 @foreach($results as $result)
{{  Form::open(array('url'  =>  $link_url))}}
            <tr>
            <input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name'          value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='no_of_children'     value= '{{$result->no_of_children}}'></td>
            <td><input type="text" name='criteria'           value= '{{$result->criteria}}'></td>
            <td><input type="text" name='calculate'          value= '{{$result->calculate}}'></td>
            <td><input type="text" name='result2'            value= '{{$result->result}}'></td>
            <td><input type="text" name='description_title'  value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body'   value= '{{$result->description_body}}'></td>
            <td><input type="text" name='id'                 value= '{{$result->domain_id}}' hidden></td>
            <td><input type="submit"                         value= "Update"></td>
        </tr>
   
    
        {{ Form::token() }}
    {{ Form::close() }}
    @endforeach
</table>

@stop