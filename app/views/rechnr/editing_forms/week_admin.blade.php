@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

	<table>
		<th>Language</th><th>Calculator Name</th> <th>Date</th><th>Calculate</th>
            <th>Result</th><th>Description Title</th><th>Description Body</th>
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='date' value= '{{$result->date}}'></td>
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