@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

	<table>
		<th>Language</th><th>Calculator Name</th> <th>Heating Oil</th><th>Natural Gas</th><th>Pit Coal</th><th>Brown Coal</th><th>Long Distance Heating</th>
        <th>Power</th><th>Car Benzene</th><th>Car Diesel</th><th>Car Natural gas</th><th>Bus/Train</th><th>Flight</th><th>Kilometer</th><th>Litre</th>
        <th>Kilogram</th><th>Each</th><th>Day</th><th>Month</th><th>Week</th><th>Year</th><th>With</th><th>Person</th><th>Calculate</th>
        <th>Makes</th><th>of CO2</th><th>each person</th><th>Description Title</th><th>Description Body</th>
	 
	 @foreach($results as $result)
     <tr>
     {{ Form::open(array('url'  =>  $link_url))}}
        
        	<input type="hidden" name='domain_id' value= '{{$result->domain_id}}' >
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name' value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='heating_oil' value= '{{$result->heating_oil}}'></td>
            <td><input type="text" name='natural_gas' value= '{{$result->natural_gas}}'></td>
            <td><input type="text" name='pit_coal' value= '{{$result->pit_coal}}'></td>
            <td><input type="text" name='brown_coal' value= '{{$result->brown_coal}}'></td>
            <td><input type="text" name='long_distance_heating' value= '{{$result->long_distance_heating}}'></td>
            <td><input type="text" name='power' value= '{{$result->power}}'></td>
            <td><input type="text" name='car_benzene' value= '{{$result->car_benzene}}'></td>
            <td><input type="text" name='car_diesel' value= '{{$result->car_diesel}}'></td>
            <td><input type="text" name='car_natural_gas' value= '{{$result->car_natural_gas}}'></td>
            <td><input type="text" name='bus_train' value= '{{$result->bus_train}}'></td>
            <td><input type="text" name='flight' value= '{{$result->flight}}'></td>
            <td><input type="text" name='kilometer' value= '{{$result->kilometer}}'></td>
            <td><input type="text" name='litre' value= '{{$result->litre}}'></td>
            <td><input type="text" name='kilogram' value= '{{$result->kilogram}}'></td>
            <td><input type="text" name='each' value= '{{$result->_each}}'></td>
            <td><input type="text" name='day' value= '{{$result->day}}'></td>
            <td><input type="text" name='month' value= '{{$result->month}}'></td>
            <td><input type="text" name='week' value= '{{$result->week}}'></td>
            <td><input type="text" name='year' value= '{{$result->year}}'></td>
            <td><input type="text" name='with' value= '{{$result->_with}}'></td>
            <td><input type="text" name='person' value= '{{$result->person}}'></td>
            <td><input type="text" name='calculate' value= '{{$result->calculate}}'></td>
            <td><input type="text" name='result_make' value= '{{$result->result_make}}'></td>
            <td><input type="text" name='result_of_co2' value= '{{$result->result_of_co2}}'></td>
            <td><input type="text" name='result_person_each' value= '{{$result->result_person_each}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body' value= '{{$result->description_body}}'></td>
            <td><input type="submit" Value="Update"></td>
        
        {{ Form::token() }}
        {{ Form::close() }}
    </tr>
    @endforeach
</table>

@stop