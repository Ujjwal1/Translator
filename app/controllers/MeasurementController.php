<?php

	class MeasurementController extends RechnrController {

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_measurement')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

		public function getIndex(){
			    $result = $this->domain_result();
				$message = '';
				if(isset($_POST['from']) && isset($_POST['to']) && ($_POST['to'] != "") && ($_POST['from'] != ""))
				{
					$solution = "";
					$x = $_POST['from'];
					$y = $_POST['to'];
					switch($_POST['metric']){
						case "Length":
									$value = $_POST['length_from'];
									//the base unit is meter
									$length_conversions = array(
										"mm"				=>  0.001,
										"cm"				=>	0.01,
										"dm"				=>	0.1,
										"m"					=>	1.0,
										"km"				=>	1000.0,
										"inch"				=> 	0.0254,
										"foot"				=>	0.3048,
										"yard"				=>	0.9144,
										"fathom"			=>	1.8288,
										"link"				=>	0.2032,
										"rod"				=>	5.08,
										"chain"				=>	20.1168,
										"statute_miles"		=>	1609.34,
										"nautical_miles"	=>	1852.0
										);
									$length_to = $length_conversions[$x]*$value/$length_conversions[$y];
									$solution=$length_to." ".$y;			
							break;
						case "Weight":
									$value	= $_POST['weight_from'];
									//the base unit is gram
									$weight_conversions = array(
										"mg"			=>	0.001,
										"ounce"			=>	28.3495,
										"gram"			=>	1.0,
										"decagram"		=>	10.0,
										"pound"			=>	453.592,
										"kilogram"		=>	1000.0,
										"short_ton"		=>	907185.0,
										"metric_ton"	=>	1000000.0,
										"carat"			=>	0.2
										);				
									$weight_to = $weight_conversions[$x]*$value/$weight_conversions[$y];
									$solution=$weight_to." ".$y;
							break;
						case "Area":
								$value	= $_POST['area_from'];
								// the base unit is mm2
								$area_conversions = array(
									"mm2"			=>	0.000001,
									"cm2"			=>	0.0001,
									"dm2"			=>	0.01,
									"m2"			=>	1.0,
									"square_inch"	=>	0.00064516,
									"square_foot"	=>	0.092903,
									"are"			=>	100.0,
									"acre"			=>	4046.86,
									"hectare"		=>	10000.0
									);
								$area_to = $area_conversions[$x]*$value/$area_conversions[$y];
								$solution=$area_to." ".$y;
							break;
						case "Speed":
								$value	= $_POST['speed_from'];
								//the base unit is mps
								$speed_conversions	=	array(
									"kmph"	=>	0.27777777777778,
									"mps"	=>	1.0,
									"ftph"	=>	0.000084667,
									"mph"	=>	0.44704,
									"knots"	=>	0.51444444444,
									"mach"	=>	340.0,
									);
								$speed_to= $speed_conversions[$x]*$value/$speed_conversions[$y];
								$solution=$speed_to." ".$y;
							break;
						case "Temperature":
								$value	= $_POST['temperature_from'];
								//the base unit is kelvin
								$temperature_conversions =	array(
									"kelvin"		=>	1,
									"fahrenheit"	=>	274.15,
									"celcius"		=>	255.928,
									);
								$temperature_to=$temperature_conversions[$x]*$value/$temperature_conversions[$y];
								$solution=$temperature_to." ".$y;
							break;
						case "Data":
								$value	= $_POST['data_from'];
								//the base unit is byte
								$data_conversions	= array(
									"bit"		=>	0.125,
									"byte"		=> 	1.0,
									"kilobyte"	=>	1000.0,
									"megabyte"	=>	1e+6,
									"gigabyte"	=>	1e+9,
									"terabyte"	=>	1e+12,
									"petabyte"	=>	1e+15,
									"exabyte"	=>	1e+18,
									"zettabyte"	=>	1e+21,
									"yottabyte"	=>	1e+24,
									);
								$data_to=$data_conversions[$x]*$value/$data_conversions[$y];
								$solution=$data_to." ".$y;
							break;
						case "Performance":
								$value = $_POST['perf_from'];
								//the base unit is kW 
								$perf_conversions = array(
									"kW"	=>	1.0,
									"PS"	=>	0.73549875
									);
								$perf_to = $perf_conversions[$x]*$value/$perf_conversions[$y];
								$solution=$perf_to." ".$y;
							break;
						case "Volume":
								$value = $_POST['vol_from'];
								//the base unit is m3
								$vol_conversions = array(
									"ml"			=>	1.0e-6,
									"cl"			=>	1.0e-5,
									"dl"			=>	0.0001,
									"l"				=>	0.001,
									"mm3"			=>	1.0e-9,
									"cm3"			=>	1.0e-6,
									"dm3"			=>	0.001,
									"m3"			=>	1.0,
									"cubic_inch"	=>	1.63871e-5,
									);
								$vol_to = $vol_conversions[$x]*$value/$vol_conversions[$y];
								$solution=$vol_to." ".$y;
							break;
						case "Quantity Conversion":
							$value	=	$_POST['quant_from'];
							//the base unit is dozen
							$quant_conversions = 	array(
								"brace" 		=> 	0.16667 ,
								"dozen" 		=> 	1.0,
								"baker_dozen"	=>	1.08333333,
								"score"			=>	1.66666667,
								"gross"			=>	12.0,
								);
							$quant_to = $quant_conversions[$x]*$value/$quant_conversions[$y];
							$solution = $quant_to." ".$y;
						break;
					}
					$message = $result->result." ".$solution;
				}
				return parent::gotoView('rechnr/measurement')
						->with('message',$message)
						->with('link_url',Url::getUrl(parent::tld(), 'MeasurementController', 'getIndex'))
						->with('result',$result);
		}


		public function admin(){
		if(Auth::check()){
						$result=DB::table('rechnr_domain')
				        ->join('text_rechnr_measurement', function($join){
				            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_measurement.domain_id');
				        })->get();
		
						return parent::gotoView('rechnr/editing_forms/measurement_admin')
						->with('results',$result)
						->with('link_url',Url::getUrl(parent::tld(), 'MeasurementController', 'update'));
					}
	}

	
	public function update(){
		if(Auth::check()){
			$domain_id 			= Input::get('id');
			$calc_name 			= Input::get('calculator_name');
            $metric 			= Input::get('metric');
            $weight 			= Input::get('weight');
            $mg 			= Input::get('mg');
            $ounce 			= Input::get('ounce');
            $gram 			= Input::get('gram');
            $decagram 			= Input::get('decagram');
            $pound 			= Input::get('pound');
            $kilogram 			= Input::get('kilogram');
            $short_ton           = Input::get('short_ton');
            $metric_ton 			= Input::get('metric_ton');
            $carat 			= Input::get('carat');
            $length 			= Input::get('length');
            $mm 			= Input::get('mm');
            $cm 			= Input::get('cm');
            $dm 			= Input::get('dm');
            $m 			= Input::get('m');
            $inch 			= Input::get('inch');
            $foot 			= Input::get('foot');
            $yard 			= Input::get('yard');
            $fathom 			= Input::get('fathom');
            $link 			= Input::get('link');
            $rod 			= Input::get('rod');
            $chain 			= Input::get('chain');
            $statute_miles        = Input::get('statute_miles');
            $nautical_miles 			= Input::get('nautical_miles');
            $select 			= Input::get('select');
            $km 			= Input::get('km');
            $area 			= Input::get('area');
            $mm2 			= Input::get('mm2');
            $cm2 			= Input::get('cm2');
            $dm2 			= Input::get('dm2');
            $m2 			= Input::get('m2');
            $square_inch 			= Input::get('square_inch');
            $square_foot 			= Input::get('square_foot');
            $are 			= Input::get('are');
            $hectare 			= Input::get('hectare');
            $acre 			= Input::get('acre');
            $speed 			= Input::get('speed');
            $mps 			= Input::get('mps');
            $ftph 			= Input::get('ftph');
            $mph 			= Input::get('mph');
            $knots 			= Input::get('knots');
            $mach 			= Input::get('mach');
            $temperature 			= Input::get('temperature');
            $kelvin 			= Input::get('kelvin');
            $fahrenheit 			= Input::get('fahrenheit');
            $data 			= Input::get('data');
            $bit 			= Input::get('bit');
            $byte 			= Input::get('byte');
            $kilobyte 			= Input::get('kilobyte');
            $megabyte 			= Input::get('megabyte');
            $gigabyte 			= Input::get('gigabyte');
            $terabyte 			= Input::get('terabyte');
            $petabyte 			= Input::get('petabyte');
            $exabyte 			= Input::get('exabyte');
            $zettabyte 			= Input::get('zettabyte');
            $yottabyte 			= Input::get('yottabyte');
            $perf 			= Input::get('perf');
            $PS 			= Input::get('PS');
            $kW 			= Input::get('kW');
            $vol 			= Input::get('vol');
            $ml 			= Input::get('ml');
            $cl 			= Input::get('cl');
            $dl 			= Input::get('dl');
            $l 			= Input::get('l');
            $mm3 			= Input::get('mm3');
            $cm3 			= Input::get('cm3');
            $dm3 			= Input::get('dm3');
            $m3 			= Input::get('m3');
            $cubic_inch 			= Input::get('cubic_inch');
            $quant 			= Input::get('quant');
            $brace 			= Input::get('brace');
            $dozen 			= Input::get('dozen');
            $baker_dozen 			= Input::get('baker_dozen');
            $score 			= Input::get('score');
            $gross 			= Input::get('gross');
            $from         = Input::get('from');
            $to           = Input::get('to');
            $calculate 			= Input::get('calculate');
            $result 			= Input::get('result');
            $description_title = Input::get('description_title');
            $description_body  = Input::get('description_body');
		
					try{			
						if(DB::table('text_rechnr_measurement')
							->where('domain_id',$domain_id)
							->update(array(
										'calculator_name' 			=> $calc_name,
							            'metric' 			=> $metric,
							            'weight' 			=> $weight,
							            'mg' 			=> $mg,
							            'ounce' 			=> $ounce,
							            'gram' 			=> $gram,
							            'decagram' 			=> $decagram,
							            'pound' 			=> $pound,
							            'kilogram' 			=> $kilogram,
							            'short_ton'           => $short_ton,
							            'metric_ton' 			=> $metric_ton,
							            'carat' 			=> $carat,
							            'length' 			=> $length,
							            'mm' 			=> $mm,
							            'cm' 			=> $cm,
							            'dm' 			=> $dm,
							            'm' 			=> $m,
							            'inch' 			=> $inch,
							            'foot' 			=> $foot,
							            'yard' 			=> $yard,
							            'fathom' 			=> $fathom,
							            'link' 			=> $link,
							            'rod' 			=> $rod,
							            'chain' 			=> $chain,
							            'statute_miles'        => $statute_miles,
							            'nautical_miles' 			=> $nautical_miles,
							            'select' 			=> $select,
							            'km' 			=> $km,
							            'area' 			=> $area,
							            'mm2' 			=> $mm2,
							            'cm2' 			=> $cm2,
							            'dm2' 			=> $dm2,
							            'm2' 			=> $m2,
							            'square_inch' 			=> $square_inch,
							            'square_foot' 			=> $square_foot,
							            'are' 			=> $are,
							            'hectare' 			=> $hectare,
							            'acre' 			=> $acre,
							            'speed' 			=> $speed,
							            'mps' 			=> $mps,
							            'ftph' 			=> $ftph,
							            'mph' 			=> $mph,
							            'knots' 			=> $knots,
							            'mach' 			=> $mach,
							            'temperature' 			=> $temperature,
							            'kelvin' 			=> $kelvin,
							            'fahrenheit' 			=> $fahrenheit,
							            'data' 			=> $data,
							            'bit' 			=> $bit,
							            'byte' 			=> $byte,
							            'kilobyte' 			=> $kilobyte,
							            'megabyte'			=> $megabyte,
							            'gigabyte' 			=> $gigabyte,
							            'terabyte' 			=> $terabyte,
							            'petabyte' 			=> $petabyte,
							            'exabyte' 			=> $exabyte,
							            'zettabyte' 			=> $zettabyte,
							            'yottabyte' 			=> $yottabyte,
							            'perf' 			=> $perf,
							            'PS'			=> $PS,
							            'kW' 			=> $kW,
							            'vol' 			=> $vol,
							            'ml' 			=> $ml,
							            'cl' 			=> $cl,
							            'dl' 			=> $dl,
							            'l' 			=> $l,
							            'mm3' 			=> $mm3,
							            'cm3' 			=> $cm3,
							            'dm3' 			=> $dm3,
							            'm3' 			=> $m3,
							            'cubic_inch' 			=> $cubic_inch,
							            'quant' 			=> $quant,
							            'brace' 			=> $brace,
							            'dozen' 			=> $dozen,
							            'baker_dozen' 			=> $baker_dozen,
							            'score' 			=> $score,
							            'gross' 			=> $gross,
							            'measure_from'         => $measure_from,
							            'measure_to'           => $measure_to,
							            'calculate' 			=> $calculate,
							            'result' 			=> $result,
							            'description_title'	=>	$description_title,
							            'description_body'	=>	$description_body
		
								))){
		
								return Redirect::to(parent::getUrlForRoute('admin_measurement'))
								->with('link_url',Url::getUrl(parent::tld(), 'MeasurementController', 'update'))
								->with('updation','Updated Successfully');
							}
					}catch(Exception $e){
						return Redirect::to(parent::getUrlForRoute('admin_measurement'))
							->with('updation',$e);
					}
				}

	}
}