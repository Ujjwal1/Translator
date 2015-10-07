@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
		<th>Language</th><th>Calculator Name</th> <th>Agreed Term</th><th>Day</th><th>Month</th><th>Year</th><th>Initial Amount</th><th>Savings</th><th>Rate</th>
        <th>Compound Interest</th><th>Considering</th><th>Not Considering</th><th>Calculate</th><th>New Principal</th><th>Final Interest</th><th>Description Title</th><th>Description Body</th>
     
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='agreed_term' value= '{{$result->agreed_term}}'></td>
            <td><input type="text" name='day' value= '{{$result->day}}'></td>
            <td><input type="text" name='month' value= '{{$result->month}}'></td>
            <td><input type="text" name='year' value= '{{$result->year}}'></td>
            <td><input type="text" name='initial_amount' value= '{{$result->initial_amount}}'></td>
            <td><input type="text" name='savings' value= '{{$result->savings}}'></td>
            <td><input type="text" name='rate' value= '{{$result->rate}}'></td>
            <td><input type="text" name='compound_interest' value= '{{$result->compound_interest}}'></td>
            <td><input type="text" name='considering' value= '{{$result->considering}}'></td>
            <td><input type="text" name='not_considering' value= '{{$result->not_considering}}'></td>
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