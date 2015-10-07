<html>
<head>
	<title>{{ $result->calculator_name }}</title>
	{{	HTML::script('js/calc.js')	}}
        <style>
            .buttons
            {
                padding: 0px;
                height:25px;
            }
            
            #main_calc
            {
                margin: auto;
            }
            #input_box
            {
                color:black;
            }
            #main_calc
            {
                width:290px;
            }
            #main_calc_table
            {
                width:290px;
                height:100px;
                
            }
            #main_calc_table td 
            {
                width:36.25px;
                height:25px;
                padding: 0px;
            }
           
            #main_calc_table .deep_blue 
            {
               margin: 0px;
               background:#0d669f;
                border-bottom:1px solid #157fc6;
                border-right: 1px solid #157fc6;
             
               
                
             
            }
            #main_calc_table .light_blue
            {    margin: 0px;
                background:#157fc6;
                border-bottom:1px solid #0d669f;
                border-right:1px solid #0d669f;
            
            }
             #screen
            {
                height:66px;
            }
           
            
            
            
            
        </style>
</head>
<body>
	@extends('rechnr.master')
	@section('content')
        <div id="main_calc">

<div id="input_box"><input type="text"  id="screen"/></div>

  
<table class="table" id="main_calc_table">
	
		<tr>
		<td>
			<table border="0" cellpadding="0" cellspacing="0">
				
				<tr>
					<td>
					<input class="buttons deep_blue" type="button"  value="7"   onclick="value_to_clipboard('7');"/>
					</td>	
					<td>
					<input type="button"  class="buttons  deep_blue" value="8"   onclick="value_to_clipboard('8');" />
					</td>
					<td>
					<input type="button"  class="buttons  deep_blue" value="9"   onclick="value_to_clipboard('9');"/>
					
					</td>
					<td>
						<input type="button"  class="buttons  deep_blue" value="/"   onclick="value_to_clipboard('/');"/>
					</td>
					<td>
						<input type="button"   class="buttons deep_blue" value="x"   onclick="value_to_clipboard('*');"/>
					</td>
				</tr>
				<tr>
					<td>
					<input type="button"  class="buttons  deep_blue" value="4"   onclick="value_to_clipboard('4');"/>
					</td>	
					<td>
					<input type="button"  class="buttons light_blue" value="5"   onclick="value_to_clipboard('5');"/>
					</td>
					<td>
					<input type="button"  class="buttons light_blue" value="6"   onclick="value_to_clipboard('6');"/>
					</td>
					<td>
						<input type="button" class="buttons light_blue"value="-"   onclick="value_to_clipboard('-');"/>
					</td>
					<td>
						<input type="button" class="buttons light_blue"value="+"    onclick="value_to_clipboard('+');"/>
					</td>
				</tr>
				<tr>
					<td>
					<input type="button"  class="buttons  deep_blue" value="1"   onclick="value_to_clipboard('1');"/>
					</td>	
					<td>
					<input type="button"  class="buttons light_blue" value="2"   onclick="value_to_clipboard('2');"/>
					</td>
					<td>
					<input type="button"  class="buttons light_blue" value="3"   onclick="value_to_clipboard('3');"/>
					</td>
                                        <td rowspan="2">
                                            <input type="button"  class="buttons light_blue" value="."   onclick="value_to_clipboard('.');" style="height:50px;"/>
					</td>
					<td>
						<input type="button"  class="buttons light_blue" value="%"   onclick="percentage_function();"/>	
					</td>
				</tr>
				<tr>
				<td>
						<input type="button"  class="buttons deep_blue" value="+/-"   onclick="minus_one();"/>
					</td>	
                                    <td colspan="2">
						<input type="button" class="buttons light_blue" value="0" onclick="value_to_clipboard('0');"/>
					</td>
					
					
					<td>
						<input type="button"  class="buttons light_blue" value="="   onclick="evaluate_result();"/>
					</td>
					
					
				</tr>
			</table>
		</td>
		<td>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<input class="buttons deep_blue" type="button" value="sin"  onclick="sin();"/>
					</td>
					<td>
					<input class="buttons deep_blue" type="button" value="cos"  onclick="cos();"/>
					</td>
					<td>
					<input class="buttons deep_blue" type="button" value="tan"  onclick="tan();"/>
					</td>
					<td>
						<input class="buttons  deep_blue" type="button" value="mod"  onclick="value_to_clipboard('%');"/>
					</td>
				</tr>
				<tr>
					
					<td>
						<input type="button" class="buttons  deep_blue" value="x²"  onclick="pow();"/>
					</td>
					<td>
						<input type="button" class="buttons deep_blue" value="&radic;"  onclick="sqrt();"/>
					</td>
					<td>
						<input type="button" class="buttons deep_blue" value="!"   onclick="factorial();"/>
					</td>
					<td>
						<input type="button"  class="buttons deep_blue" value="ln"   onclick="ln();"/>
					</td>
				</tr>
				<tr>
					
					<td>
						<input type="button"  class="buttons deep_blue" value="log10"  onclick="log10();"/>
					</td>
					<td>
						<input type="button"  class="buttons deep_blue" value="x^y"  onclick="value_to_clipboard('pow');"/>
					</td>
					<td>
						<input type="button"  class="buttons deep_blue" value="x&radic;y"   onclick="value_to_clipboard('&radic;');"/>
					</td>
					<td>
						<input type="button"  class="buttons deep_blue" value="abs"  onclick="abs();"/>
					</td>
				</tr>
				<tr>
					
					<td>
						<input type="button"   class="buttons deep_blue" value="and" onclick="value_to_clipboard('&amp;');"/>
					</td>
					<td>
						<input type="button"   class="buttons deep_blue" value="or"  onclick="value_to_clipboard('|');"/>
					</td>
					<td>
						<input type="button"  class="buttons  deep_blue" value="xor"  onclick="value_to_clipboard('^');"/>
					</td>
					<td>
						<input type="button"  class="buttons  deep_blue" value="C" onclick="copy_clipboard('');" style="background: #ffbd2f"/>
					</td>
				</tr>
			</table>	
		</td>
	</tr>
</table>
        </div>
        <h1>{{ $result->description_title }}</h1>	
        <h2>
            {{ $result->description_body }}</h2>
	
	@stop
</body>

</html>
