<?php

class PetrolController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_petrol')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

	public function petrol(){
			return parent::gotoView('rechnr/petrol')
				->with('message', "")
				->with('result',$this->domain_result())
				->with('link_url',Url::getUrl(parent::tld(), 'PetrolController', 'petrol_calc'));
		}

	public function petrol_calc(){
				$validator = Validator::make(Input::all(),
				array(
						'currency'			=>	'required',
						'distance' 			=>	'required|numeric',
						'consumed' 			=>	'required|numeric',
						'fuel_cost' 		=>	'required|numeric',
					));

					if($validator->fails()){
						return Redirect::to(parent::getUrlForRoute('petrol'))
						->withErrors($validator)
						->withInput();
					}else{
							$domain_id = parent::tld();
							$Currency = Input::get('currency');
							$distance = Input::get('distance');
							$consumed = Input::get('consumed');
							$fuel_cost = Input::get('fuel_cost');
							$fuel_per_hundred = $consumed*(100/$distance);
							$fuel_per_hundred = number_format($fuel_per_hundred,2,".",",");

							$total_fuel_cost = $consumed*$fuel_cost;
							$total_fuel_cost= number_format($total_fuel_cost,2,".",",");
							
							$this_ride=DB::table('text_rechnr_petrol')
				        		->where('domain_id',$domain_id)
				        		->pluck('this_ride');
			        		
			        		$per_hundred=DB::table('text_rechnr_petrol')
				        		->where('domain_id',$domain_id)
				        		->pluck('per_hundred');
			        		
			        		$ride_cost=DB::table('text_rechnr_petrol')
				        		->where('domain_id',$domain_id)
				        		->pluck('ride_cost');

			        		return parent::gotoView('rechnr/petrol')
			        				->with('message' , "$this_ride $fuel_per_hundred $per_hundred<br/>$ride_cost $total_fuel_cost $Currency")
			        				->with('result',$this->domain_result())
			        				->with('link_url',Url::getUrl(parent::tld(), 'PetrolController', 'petrol_calc'));
			        	}
	
		}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_petrol', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_petrol.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/petrol_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'PetrolController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id 			= Input::get('domain_id');
		$calc_name 			= Input::get('calc_name');
		$currency 			= Input::get('currency');
		$driven_kilometer 	= Input::get('driven_kilometer');
		$consumed_litres 	= Input::get('consumed_litres');
		$fuel_cost_today 	= Input::get('fuel_cost_today');
		$calculate 			= Input::get('calculate');
		$this_ride			= Input::get('this_ride');
		$per_hundred 		= Input::get('per_hundred');
		$ride_cost			= Input::get('ride_cost');
		$description_title 	= Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{			DB::table('text_rechnr_petrol')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'currency'			=>	$currency,
						'driven_kilometer'	=>	$driven_kilometer,
						'consumed_litres'	=>	$consumed_litres,
						'fuel_cost_today'	=>	$fuel_cost_today,
						'calculate'			=>	$calculate,
						'this_ride'			=>  $this_ride,
						'per_hundred'		=>	$per_hundred,
						'ride_cost'			=>  $ride_cost,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_petrol'))
					->with('link_url',Url::getUrl(parent::tld(), 'PetrolController', 'update'))
					->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_petrol'))
				->with('link_url',Url::getUrl(parent::tld(), 'PetrolController', 'update'))
				->with('updation',$e);
		}

	}
}