<?php

	class FoodController extends RechnrController {

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_food')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

		

		public function getIndex(){
			 
			 	$result = $this->domain_result();
				//$message = "";
				//$level = array();
				/*
				$level = array(
						"sugar"		=>	"green",
						"fat"		=>	"green",
						"sat_fat"	=>	"green",
						"salt"		=>	"green",
						);
						*/
			$sugar_result=null;
			$salt_result=null;
			$fat_result=null;
			$sat_fat_result=null;
				return parent::gotoView('rechnr.food')
						->with('salt_result',$salt_result)
						->with('sugar_result',$sugar_result)
						->with('fat_result',$fat_result)
						->with('sat_fat_result',$sat_fat_result)
						->with('link_url',Url::getUrl(parent::tld(), 'FoodController', 'postIndex'))
						->with('result',$result);
		}

		public function postIndex(){	

			$validator = Validator::make(Input::all(),array(
						//'age'				=>	'required',
						//'weight' 			=>	'required|numeric',
						'fat' 				=>	'required|numeric',
						'sugar' 			=>	'required|numeric',
						'sat_fat' 			=>	'required|numeric',
						'salt' 				=>	'required|numeric',

					));

			if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('food_indicator'))
			->withErrors($validator)
			->withInput();
			}else{
				
				$domain_id = parent::tld();
				
				//$age = Input::get('age');
				//$sex = Input::get('sex');
				$type = Input::get('type');
				//$weight = Input::get('weight');
				$fat = Input::get('fat');
				$sat_fat = Input::get('sat_fat');
				$salt = Input::get('salt');
				$sugar = Input::get('sugar');

				$inputs = array(
					$fat,$sat_fat,$salt,$sugar
					);
				//$salt_type = Input::get('salt_type');

			//	$array = array_add($array, 'key', 'value');
				$level = array(
						//"sugar"		=>	"green",
						//"fat"		=>	"green",
						//"sat_fat"	=>	"green",
						//"salt"		=>	"green",
						);
				$choice="celebration";
				switch($type){
					
					case "celebration":
						if($fat<=3){
							//$level['fat']="green";
							$fat_result="green";
						}else if($fat>3 && $fat<=20){
							//$level['fat']="yellow";
							$fat_result="yellow";
						}else{
							//$level = array_add($level, 'fat', 'red');
							$fat_result="red";
						}

						if($sat_fat<=1.5)
						{
							//$level = array_add($level, 'sat_fat', 'green');
							$sat_fat_result="green";
						}else if($sat_fat>1.5 && $sat_fat<=5){
							//$level = array_add($level, 'sat_fat', 'yellow');
							$sat_fat_result="yellow";
						}else{
							//$level = array_add($level, 'sat_fat', 'red');
							$sat_fat_result="red";
						}

						if($sugar<=5.0){
							//$level = array_add($level, 'sugar', 'green');
							$sugar_result="green";
						}else if($sugar>5.0 && $sugar<=12.5){
							//$level = array_add($level, 'sugar', 'yellow');
							$sugar_result="yellow";
						}else{
							//$level = array_add($level, 'sugar', 'red');
							$sugar_result="red";
						}

						if($salt<=0.3){
							//$level = array_add($level, 'salt', 'green');
							$salt_result="green";
						}else if($salt>0.3 && $salt<=1.5){
							//$level = array_add($level, 'salt', 'yellow');
							$salt_result="yellow";
						}else{
							//$level = array_add($level, 'salt', 'red');
							$salt_result="red";
						}

					break;
					case "smooth":
						$choice="smooth";
						if($fat<=1.5){
							//$level = array_add($level, 'fat', 'green');
							$fat_result="green";
						}else if($fat>1.5 && $fat<=10){
							//$level = array_add($level, 'fat', 'yellow');
							$fat_result="yellow";
						}else{
							//$level = array_add($level, 'fat', 'red');
							$fat_result="red";
						}

						if($sat_fat<=0.75)
						{
							//$level = array_add($level, 'sat_fat', 'green');
							$sat_fat_result="green";
						}else if($sat_fat>0.75 && $sat_fat<=2.5){
							//$level = array_add($level, 'sat_fat', 'yellow');
							$sat_fat_result="yellow";
						}else{
							//$level = array_add($level, 'sat_fat', 'red;');
							$sat_fat_result="red";
						}

						if($sugar<=2.5){
							//$level = array_add($level, 'sugar', 'green');
							$sugar_result="green";
						}else if($sugar>2.5 && $sugar<=6.3){
							//$level = array_add($level, 'sugar', 'yellow');
							$sugar_result="yellow";
						}else{
							//$level = array_add($level, 'sugar', 'red');
							$sugar_result="red";
						}

						if($salt<=0.3){
							//$level = array_add($level, 'salt', 'green');
							$salt_result="green";
						}else if($salt>0.3 && $salt<=1.5){
							//$level = array_add($level, 'salt', 'yellow');
							$salt_result="yellow";
						}else{
							//$level = array_add($level, 'salt', 'red');
							$salt_result="red";
						}

					break;
				}	
				

				return parent::gotoView('rechnr.food')
					->with('salt_result',$salt_result)
					->with('sugar_result',$sugar_result)
					->with('fat_result',$fat_result)
					->with('sat_fat_result',$sat_fat_result)
					->with('choice',$choice)
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'FoodController', 'postIndex'));
			
			}
		}

		public function admin(){
		if(Auth::check()){
						$result=DB::table('rechnr_domain')
				        ->join('text_rechnr_food', function($join){
				            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_food.domain_id');
				        })->get();
		
						return parent::gotoView('rechnr/editing_forms/food_admin')
						->with('results',$result)
						->with('link_url',Url::getUrl(parent::tld(), 'MeasurementController', 'update'));
					}
	}

	
	public function update(){
		if(Auth::check()){
					$domain_id 			= Input::get('id');
					$calc_name 			= Input::get('calc_name');
					$type 				= Input::get('type');
					$celebration 		= Input::get('celebration');
					$smooth 			= Input::get('smooth');
					$sugar 				= Input::get('sugar');
					$fat 				= Input::get('fat');
					$sat_fat 			= Input::get('sat_fat');
					$salt 				= Input::get('salt');
					$calculate 			= Input::get('calculate');
					$select				= Input::get('select');
					$from 				= Input::get('from');
					$to 				= Input::get('to');
					$result 			= Input::get('result');
					$description_title 	= Input::get('description_title');
					$description_body 	= Input::get('description_body');
		
					try{			
						if(DB::table('text_rechnr_measurement')
							->where('domain_id',$domain_id)
							->update(array(
									'calculator_name'	=>	$calc_name,
									'metric'			=>	$metric,
									'weight'			=>	$weight,
									'kilogram'			=>	$kilogram,
									'pound'				=>	$pound,
									'length'			=>	$length,
									'kilometer'			=>	$kilometer,
									'miles'				=>	$miles,
									'select'			=>  $select,
									'measure_from'		=>  $from,
									'measure_to'		=>  $to,
									'calculate'			=>	$calculate,
									'result'			=>	$result,
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