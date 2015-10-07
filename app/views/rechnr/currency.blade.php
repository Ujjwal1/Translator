<html>
<head>
	<title>{{ $result->calculator_name }}</title>
         <style>
                 .main_currency input,#select
                {
                    color:black;
                    width:100px;
                }
            </style>
	{{	HTML::script('js/calc.js')	}}
</head>
<body>
		@extends('rechnr.master')
		<!--Begin Currency Converter Code-->
		@section('content')
                
                <div class="main_currency">
		<div id="FEXRdiv"></div>
		<script type="text/javascript">
		var FEXR_c = "EUR", FEXR_a = "USD", FEXR_amt = 1, FEXR_size = 728, FEXR_panel = 1, FEXR_button = 2;
		</script>
		<script type="text/javascript" src="//www.foreignexchangeresource.com/converterB.js"></script>
		<!--End Currency Converter Code-->

                <h1>
                    {{ $result->description_title }}</h1>
                <h2>
                    {{ $result->description_body }}</h2>
                </div>
		@stop
</body>
</html>