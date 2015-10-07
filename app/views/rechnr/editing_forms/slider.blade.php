@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
		<th>Language</th><th>Slider 1</th> <th>Slider 2</th><th>Slider 3</th><th>Slider 4</th>
        <th>Slider 5</th><th>Slider 6</th><th>Popular 1</th><th>Popular 2</th>
        <th>Popular 2</th><th>Popular 3</th><th>Popular 4</th>
     
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='slider1'  value= '{{$result->slider1}}'></td>
            <td><input type="text" name='slider2'  value= '{{$result->slider2}}'></td>
            <td><input type="text" name='slider3'  value= '{{$result->slider3}}'></td>
            <td><input type="text" name='slider4'  value= '{{$result->slider4}}'></td>
            <td><input type="text" name='slider5'  value= '{{$result->slider5}}'></td>
            <td><input type="text" name='slider6'  value= '{{$result->slider6}}'></td>
            <td><input type="text" name='popular1' value= '{{$result->popular1}}'></td>
            <td><input type="text" name='popular2' value= '{{$result->popular2}}'></td>
            <td><input type="text" name='popular3' value= '{{$result->popular3}}'></td>
            <td><input type="text" name='popular4' value= '{{$result->popular4}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
        {{ Form::close() }}
    @endforeach
</table>


@stop