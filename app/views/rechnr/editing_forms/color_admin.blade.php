@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
		<th>Language</th><th>Calculator Name</th> <th>Color</th><th>Choose Color</th><th>Red</th>
        <th>Green</th><th>Blue</th><th> Black</th><th>White</th><th>Pink </th>
        <th>Yellow </th><th>Hexadecimal </th><th>RGB </th><th>RGB in percentage </th><th>CMYK in percentage </th>
        <th>WebSafe </th><th>Result </th><th>Description Title</th><th>Description Body</th>
     
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name'         value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='color'             value= '{{$result->color}}'></td>
            <td><input type="text" name='choose_color'      value= '{{$result->choose_color}}'></td>
            <td><input type="text" name='red'               value= '{{$result->red}}'></td>
            <td><input type="text" name='green'             value= '{{$result->green}}'></td>
            <td><input type="text" name='blue'              value= '{{$result->blue}}'></td>
            <td><input type="text" name='black'              value= '{{$result->black}}'></td>
            <td><input type="text" name='white'             value= '{{$result->white}}'></td>
            <td><input type="text" name='pink'              value= '{{$result->pink}}'></td>
            <td><input type="text" name='yellow'            value= '{{$result->yellow}}'></td>
            <td><input type="text" name='hexadecimal'       value= '{{$result->hexadecimal}}'></td>
            <td><input type="text" name='rgb'               value= '{{$result->rgb}}'></td>
            <td><input type="text" name='rgb_perc'          value= '{{$result->rgb_perc}}'></td>
            <td><input type="text" name='cmyk_perc'          value= '{{$result->cmyk_perc}}'></td>
            <td><input type="text" name='websafe'           value= '{{$result->websafe}}'></td>
            <td><input type="text" name='result'            value= '{{$result->result}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body'  value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
        {{ Form::close() }}
    @endforeach
</table>


@stop