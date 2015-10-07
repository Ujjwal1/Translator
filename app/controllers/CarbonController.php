<?php
class CarbonController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_carbon')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

	public function form(){

				return parent::gotoView('rechnr/carbon')
						->with('message', '')
						->with('link_url',Url::getUrl(parent::tld(), 'CarbonController', 'calculate'))
						->with('result',$this->domain_result());
	}

	public function calculate(){
				$validator = Validator::make(Input::all(),
				array(
						'fuel'				=>	'required',
						'duration' 			=>	'required|numeric',
						'amount' 			=>	'required|numeric',
						'person' 			=>	'required|numeric'
				));

		if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('carbon_footprint'))
			->withErrors($validator)
			->withInput();
		}else{

			$domain_id = parent::tld();
			
			$result_make=DB::table('text_rechnr_carbon')
        		->where('domain_id',$domain_id)
        		->pluck('result_make');

        	$result_of_co2=DB::table('text_rechnr_carbon')
        		->where('domain_id',$domain_id)
        		->pluck('result_of_co2');

        	$result_person_each=DB::table('text_rechnr_carbon')
        		->where('domain_id',$domain_id)
        		->pluck('result_person_each');

				$fuel 		= Input::get('fuel');
				$amount 	= Input::get('amount');
				$duration 	= Input::get('duration');
				$person 	= Input::get('person');

				switch ($duration) {
					case 365:
						$time = DB::table('text_rechnr_carbon')
			        		->where('domain_id',$domain_id)
			        		->pluck('day');
						break;
						
					case 52:
						$time = DB::table('text_rechnr_carbon')
				        		->where('domain_id',$domain_id)
				        		->pluck('week');
						break;

					case 12:
						$time = DB::table('text_rechnr_carbon')
				        		->where('domain_id',$domain_id)
				        		->pluck('month');
						break;

					default:
						$time = DB::table('text_rechnr_carbon')
			        		->where('domain_id',$domain_id)
			        		->pluck('year');
						break;
				}
				
				$fuel_consumed = number_format($amount*$fuel*$person,2,".",",");
				 
        		return parent::gotoView('rechnr/carbon')
        				->with('message', "$result_make $fuel_consumed $result_of_co2 $person $result_person_each $time")
        				->with('link_url',Url::getUrl(parent::tld(), 'CarbonController', 'calculate'))
        				->with('result',$this->domain_result());

		}
	
		
	}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_carbon', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_carbon.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/carbon_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'CarbonController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id				 = Input::get('domain_id');
		$calc_name 				 = Input::get('calc_name');
		$heating_oil			 = Input::get('heating_oil');
		$natural_gas 			 = Input::get('natural_gas');
		$pit_coal 				 = Input::get('pit_coal');
		$brown_coal 			 = Input::get('brown_coal');
		$long_distance_heating	 = Input::get('long_distance_heating');
		$power					 = Input::get('power');
		$car_benzene			 = Input::get('car_benzene');
		$car_diesel				 = Input::get('car_diesel');
		$car_natural_gas		 = Input::get('car_natural_gas');
		$bus_train				 = Input::get('bus_train');
		$flight					 = Input::get('flight');
		$kilometer				 = Input::get('kilometer');
		$litre					 = Input::get('litre');
		$kilogram				 = Input::get('kilogram');
		$each 					 = Input::get('each');
		$day					 = Input::get('day');
		$month 					 = Input::get('month');
		$week 					 = Input::get('week');
		$year					 = Input::get('year');
		$with 					 = Input::get('with');
		$person					 = Input::get('person');
		$calculate 				 = Input::get('calculate');
		$result_make 			 = Input::get('result_make');
		$result_of_co2			 = Input::get('result_of_co2');
		$result_person_each		 = Input::get('result_person_each');
		$description_title		 = Input::get('description_title');
		$description_body		 = Input::get('description_body');

		try{			DB::table('text_rechnr_carbon')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'		=>	$calc_name,
						'heating_oil'			=>	$heating_oil,
						'natural_gas'			=>	$natural_gas,
						'pit_coal'				=>	$pit_coal,
						'brown_coal'			=>	$brown_coal,
						'long_distance_heating'	=>	$long_distance_heating,
						'power'					=>	$power,
						'car_benzene'			=>	$car_benzene,
						'car_diesel'			=>	$car_diesel,
						'car_natural_gas'		=>	$car_natural_gas,
						'bus_train'				=>	$bus_train,
						'flight'				=>	$flight,
						'kilometer'				=>	$kilometer,
						'litre'					=>	$litre,
						'kilogram'				=>	$kilogram,
						'_each'					=>	$each,
						'day'					=>	$day,
						'month'					=>	$month,
						'week'					=>	$week,
						'year'					=>	$year,
						'_with'					=>	$with,
						'person'				=>	$person,
						'calculate'				=>	$calculate,
						'result_make'			=>	$result_make,
						'result_of_co2'			=> 	$result_of_co2,
						'result_person_each'	=>  $result_person_each,
						'description_title'		=>	$description_title,
						'description_body'		=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_carbon'))
				->with('link_url',Url::getUrl(parent::tld(), 'CarbonController', 'update'))
				->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_carbon'))
				->with('link_url',Url::getUrl(parent::tld(), 'CarbonController', 'update'))
				->with('updation',$e);
		}

	}
}