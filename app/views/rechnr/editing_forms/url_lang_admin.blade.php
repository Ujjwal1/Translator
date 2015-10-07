@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

<table>
		
	 <tr><th><h3>Language</h3></th><th><h3>Select</h3></th></tr>
	 @foreach($results as $result)
{{  Form::open(array('url'  =>  $link_url))}}
            <tr>
        	<td><strong>{{$result->language}}</strong></td>
            <td><input type="text" name='domain_id'              value= '{{$result->domain_id}}' hidden></td>
            <td><input type="submit"                             value= "Select"></td>
        </tr>
    </b>
    
        {{ Form::token() }}
    {{ Form::close() }}
    @endforeach
</table>

@stop