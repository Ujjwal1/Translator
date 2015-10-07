@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

	<table>
		<th>Language</th><th>Calculator Name</th> <th>Currency</th><th>Credits</th><th>Interest</th><th>Period</th>
        <th>Installments</th><th>Calculate</th><th>Annuinity Rental</th><th>Amount of Interest</th><th>Description Title</th><th>Description Body</th>
     
	 
	 @foreach($results as $result)
    {{  Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='currency' value= '{{$result->currency}}'></td>
            <td><input type="text" name='credits' value= '{{$result->credits}}'></td>
            <td><input type="text" name='interest' value= '{{$result->interest}}'></td>
            <td><input type="text" name='period' value= '{{$result->period}}'></td>
            <td><input type="text" name='installment' value= '{{$result->installment}}'></td>
            <td><input type="text" name='calculate' value= '{{$result->calculate}}'></td>
            <td><input type="text" name='result1' value= '{{$result->result1}}'></td>
            <td><input type="text" name='result2' value= '{{$result->result2}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body' value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
      {{ Form::close() }}
    @endforeach
</table>

@stop