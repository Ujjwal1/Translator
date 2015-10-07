@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif


	<table>
		<th>Language</th><th>Calculator Name</th> <th>Currency</th><th>Driven Kilometer</th><th>Consumed Litres</th>
        <th>Fuel Cost Today</th><th>Calculate</th><th>This Ride</th><th>Per Hundered</th>
        <th>Ride Cost</th><th>Description Title</th><th>Description Body</th>
     
	 
	 @foreach($results as $result)
     {{ Form::open(array('url'  =>  $link_url))}}
        <tr>
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name'         value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='currency'          value= '{{$result->currency}}'></td>
            <td><input type="text" name='driven_kilometer'  value= '{{$result->driven_kilometer}}'></td>
            <td><input type="text" name='consumed_litres'   value= '{{$result->consumed_litres}}'></td>
            <td><input type="text" name='fuel_cost_today'   value= '{{$result->fuel_cost_today}}'></td>
            <td><input type="text" name='calculate'         value= '{{$result->calculate}}'></td>
            <td><input type="text" name='this_ride'         value= '{{$result->this_ride}}'></td>
            <td><input type="text" name='per_hundred'       value= '{{$result->per_hundred}}'></td>
            <td><input type="text" name='ride_cost'         value= '{{$result->ride_cost}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body'  value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        </tr>
        {{ Form::token() }}
        {{ Form::close() }}
    @endforeach
</table>


@stop