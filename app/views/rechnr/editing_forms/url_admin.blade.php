@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

<table style="width: 850px";>
	@if($results || $language)
    <t3><strong>URL for {{ $language }} language. </strong></t3>
	 <tr><th><h3>Description</h3></th><th><h3>URL</h3></th></tr>
     @endif
     
	 @foreach($results as $result)
     
{{  Form::open(array('url'  =>  $link_url))}}
            <tr>
        	<td style="color:black";><input type="text" name='memo'                value= '{{$result->memo}}'></td>
            <td style="color:black";><input type="text" name='url'                 value= '{{$result->url}}'></td>
            <td><input type="text" name='id'                  value= '{{$result->domain_id}}' hidden></td>
            <td><input type="text" name='as'                  value= '{{$result->as}}' hidden></td>
            <td style="color:black";><input type="submit"                          value= "Update"></td>
        </tr>    
        {{ Form::token() }}
    {{ Form::close() }}

    @endforeach
    
</table>

@stop