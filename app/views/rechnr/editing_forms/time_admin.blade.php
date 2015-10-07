@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
		<th>Language</th><th>Calculator Name</th> <th>Sex</th><th>Male</th><th>Female</th>
        <th>Height</th><th>Weight</th><th>Calculate</th><th>Result</th>
        <th>Description Title</th><th>Description Body</th>
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='from' value= '{{$result->from}}'></td>
            <td><input type="text" name='to' value= '{{$result->to}}'></td>
            <td><input type="text" name='now' value= '{{$result->now}}'></td>
            <td><input type="text" name='date' value= '{{$result->date}}'></td>
            <td><input type="text" name='time' value= '{{$result->time}}'></td>
            <td><input type="text" name='year' value= '{{$result->year}}'></td>
            <td><input type="text" name='month' value= '{{$result->month}}'></td>
            <td><input type="text" name='day' value= '{{$result->day}}'></td>
            <td><input type="text" name='hour' value= '{{$result->hour}}'></td>
            <td><input type="text" name='minute' value= '{{$result->minute}}'></td>
            <td><input type="text" name='second' value= '{{$result->second}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body' value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
        {{ Form::close() }}
    @endforeach
</table>

@stop