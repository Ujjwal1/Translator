@extends('rechnr.master')

@section('admin_content')

@if(Session::has('updation'))
	{{Session::get('updation')}}
@endif

<table>
		<th>Language</th><th>Calculator Name</th> <th>Metric</th><th>Weight</th>
            <th>Miligram</th><th>Ounce</th><th>Gram</th><th>Decagram</th>
            <th>Pound</th><th>Kilogram</th><th>Ton</th><th>Metric Ton</th>

            <th>Carat</th><th>Length</th> <th>Milimeter</th><th>Centimeter</th>
            <th>Decameter</th><th>Meter</th><th>Inch</th><th>Foot</th>
            <th>Yard</th><th>Fathom</th><th>Link</th><th>Rod</th>

            <th>Chain</th><th>Statute Miles</th> <th>Nautical Miles</th><th>Select</th>
            <th>Kilometer</th><th>Area</th><th>MM2</th><th>cm2</th>
            <th>dm2</th><th>m2</th><th>Square inch</th><th>Square foot</th>

            <th>are</th><th>Hectare</th> <th>speed</th><th>mps</th>
            <th>ftph</th>
            <th>mph</th>
           <th>knots</th>
           <th>mach</th>
           <th>temperature</th>
           <th>kelvin</th>
           <th>fahrenheit</th>
           <th>data</th>
           <th>bit</th>
           <th>byte</th>
           <th>kilobyte</th>
           <th>megabyte</th>
           <th>gigabyte</th>
           <th>terabyte</th>
           <th>petabyte</th>
           <th>exabyte</th>
           <th>zettabyte</th>
           <th>yottabyte</th>
           <th>perf</th>
           <th>PS</th>
           <th>kW</th>
           <th>vol</th>
           <th>ml</th>
           <th>cl</th>
           <th>dl</th>
           <th>l</th>
           <th>mm3</th>
           <th>cm3</th>
           <th>dm3</th>
           <th>m3</th>
           <th>cubic_inch</th>
           <th>quant</th>
           <th>brace</th>
           <th>dozen</th>
           <th>baker_dozen</th>
           <th>score</th>
           <th>gross</th>
           <th>from</th>
           <th>to</th>
           <th>calculate</th>
           <th>result</th>
           <th>description_title</th>
           <th>description_body</th>
	 
	 @foreach($results as $result)
{{  Form::open(array('url'  =>  $link_url))}}
            <tr>
        	<td>{{$result->language}}</td>
        	<td><input type="text" name='calc_name'         value= '{{$result->calculator_name}}'></td>
            <td><input type="text" name='metric'            value= '{{$result->metric}}'></td>
            <td><input type="text" name='weight'            value= '{{$result->weight}}'></td>
            <td><input type="text" name='mg'         value= '{{$result->mg}}'></td>
            <td><input type="text" name='ounce'         value= '{{$result->ounce}}'></td>
            <td><input type="text" name='gram'         value= '{{$result->gram}}'></td>
            <td><input type="text" name='decagram'         value= '{{$result->decagram}}'></td>
            <td><input type="text" name='pound'         value= '{{$result->pound}}'></td>
            <td><input type="text" name='kilogram'          value= '{{$result->kilogram}}'></td>
            <td><input type="text" name='short_ton'             value= '{{$result->short_ton}}'></td>
            <td><input type="text" name='metric_ton'         value= '{{$result->metric_ton}}'></td>
            <td><input type="text" name='carat'         value= '{{$result->carat}}'></td>
            <td><input type="text" name='length'            value= '{{$result->length}}'></td>
            <td><input type="text" name='mm'         value= '{{$result->mm}}'></td>
            <td><input type="text" name='cm'         value= '{{$result->cm}}'></td>
            <td><input type="text" name='dm'         value= '{{$result->dm}}'></td>
            <td><input type="text" name='m'         value= '{{$result->m}}'></td>
            <td><input type="text" name='inch'         value= '{{$result->inch}}'></td>
            <td><input type="text" name='foot'         value= '{{$result->foot}}'></td>
            <td><input type="text" name='yard'         value= '{{$result->yard}}'></td>
            <td><input type="text" name='fathom'         value= '{{$result->fathom}}'></td>
            <td><input type="text" name='link'         value= '{{$result->link}}'></td>
            <td><input type="text" name='rod'         value= '{{$result->rod}}'></td>
            <td><input type="text" name='chain'         value= '{{$result->chain}}'></td>
            <td><input type="text" name='statute_miles'             value= '{{$result->statute_miles}}'></td>
            <td><input type="text" name='nautical_miles'         value= '{{$result->nautical_miles}}'></td>
            <td><input type="text" name='select'            value= '{{$result->select}}'></td>
            <td><input type="text" name='km'         value= '{{$result->km}}'></td>
            <td><input type="text" name='area'         value= '{{$result->area}}'></td>
            <td><input type="text" name='mm2'         value= '{{$result->mm2}}'></td>
            <td><input type="text" name='cm2'         value= '{{$result->cm2}}'></td>
            <td><input type="text" name='dm2'         value= '{{$result->dm2}}'></td>
            <td><input type="text" name='m2'         value= '{{$result->m2}}'></td>
            <td><input type="text" name='square_inch'         value= '{{$result->square_inch}}'></td>
            <td><input type="text" name='square_foot'         value= '{{$result->square_foot}}'></td>
            <td><input type="text" name='are'         value= '{{$result->are}}'></td>
            <td><input type="text" name='hectare'         value= '{{$result->hectare}}'></td>
            <td><input type="text" name='acre'         value= '{{$result->acre}}'></td>
            <td><input type="text" name='speed'         value= '{{$result->speed}}'></td>
            <td><input type="text" name='mps'         value= '{{$result->mps}}'></td>
            <td><input type="text" name='ftph'         value= '{{$result->ftph}}'></td>
            <td><input type="text" name='mph'         value= '{{$result->mph}}'></td>
            <td><input type="text" name='knots'         value= '{{$result->knots}}'></td>
            <td><input type="text" name='mach'         value= '{{$result->mach}}'></td>
            <td><input type="text" name='temperature'         value= '{{$result->temperature}}'></td>
            <td><input type="text" name='kelvin'         value= '{{$result->kelvin}}'></td>
            <td><input type="text" name='fahrenheit'         value= '{{$result->fahrenheit}}'></td>
            <td><input type="text" name='data'         value= '{{$result->data}}'></td>
            <td><input type="text" name='bit'         value= '{{$result->bit}}'></td>
            <td><input type="text" name='byte'         value= '{{$result->byte}}'></td>
            <td><input type="text" name='kilobyte'         value= '{{$result->kilobyte}}'></td>
            <td><input type="text" name='megabyte'         value= '{{$result->megabyte}}'></td>
            <td><input type="text" name='gigabyte'         value= '{{$result->gigabyte}}'></td>
            <td><input type="text" name='terabyte'         value= '{{$result->terabyte}}'></td>
            <td><input type="text" name='petabyte'         value= '{{$result->petabyte}}'></td>
            <td><input type="text" name='exabyte'         value= '{{$result->exabyte}}'></td>
            <td><input type="text" name='zettabyte'         value= '{{$result->zettabyte}}'></td>
            <td><input type="text" name='yottabyte'         value= '{{$result->yottabyte}}'></td>
            <td><input type="text" name='perf'         value= '{{$result->perf}}'></td>
            <td><input type="text" name='PS'         value= '{{$result->PS}}'></td>
            <td><input type="text" name='kW'         value= '{{$result->kW}}'></td>
            <td><input type="text" name='vol'         value= '{{$result->vol}}'></td>
            <td><input type="text" name='ml'         value= '{{$result->ml}}'></td>
            <td><input type="text" name='cl'         value= '{{$result->cl}}'></td>
            <td><input type="text" name='dl'         value= '{{$result->dl}}'></td>
            <td><input type="text" name='l'         value= '{{$result->l}}'></td>
            <td><input type="text" name='mm3'         value= '{{$result->mm3}}'></td>
            <td><input type="text" name='cm3'         value= '{{$result->cm3}}'></td>
            <td><input type="text" name='dm3'         value= '{{$result->dm3}}'></td>
            <td><input type="text" name='m3'         value= '{{$result->m3}}'></td>
            <td><input type="text" name='cubic_inch'         value= '{{$result->cubic_inch}}'></td>
            <td><input type="text" name='quant'         value= '{{$result->quant}}'></td>
            <td><input type="text" name='brace'         value= '{{$result->brace}}'></td>
            <td><input type="text" name='dozen'         value= '{{$result->dozen}}'></td>
            <td><input type="text" name='baker_dozen'         value= '{{$result->baker_dozen}}'></td>
            <td><input type="text" name='score'         value= '{{$result->score}}'></td>
            <td><input type="text" name='gross'         value= '{{$result->gross}}'></td>
            <td><input type="text" name='from'              value= '{{$result->measure_from}}'></td>
            <td><input type="text" name='to'                value= '{{$result->measure_to}}'></td>
            <td><input type="text" name='calculate'         value= '{{$result->calculate}}'></td>
            <td><input type="text" name='result'            value= '{{$result->result}}'></td>
            <td><input type="text" name='description_title' value= '{{$result->description_title}}'></td>
            <td><input type="text" name='description_body'  value= '{{$result->description_body}}'></td>
            <td><input type="text" name='id'                value= '{{$result->domain_id}}' hidden></td>
            <td><input type="submit"                        value= "Update"></td>
        </tr>
    </b>
    
        {{ Form::token() }}
    {{ Form::close() }}
    @endforeach
</table>

@stop