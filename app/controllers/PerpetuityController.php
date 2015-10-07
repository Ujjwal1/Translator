<?php

	class PerpetuityController extends RechnrController{

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_perpetuity')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

			public function Perpetuity(){
				return parent::gotoView('rechnr/perpetuity')
					->with('message','')
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'PerpetuityController', 'Calculate_Perpetuity'));
			}

			public function Calculate_Perpetuity(){
				$validator = Validator::make(Input::all(),
				array(
						'currency'			=>	'required',
						'funds' 			=>	'required|numeric',
						'interest' 			=>	'required|numeric',
						
						
				));

		if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('perpetuity'))
			->withErrors($validator)
			->withInput();
		}else{

				$domain_id = parent::tld();
			
			$statement=DB::table('text_rechnr_perpetuity')
        		->where('domain_id',$domain_id)
        		->pluck('result');

				$Currency = Input::get('currency');
				$funds = Input::get('funds');
				$interest = Input::get('interest');
				
				$result = $funds*$interest/1200;
				$result = number_format($result,2,".",",");
				 
        		return parent::gotoView('rechnr/perpetuity')
        				->with('message', "$statement : $result $Currency")
        				->with('result',$this->domain_result())
        				->with('link_url',Url::getUrl(parent::tld(), 'PerpetuityController', 'Calculate_Perpetuity'));

		}
	
			}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_perpetuity', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_perpetuity.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/perpetuity_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'PerpetuityController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id		 	= Input::get('domain_id');
		$calc_name 		 	= Input::get('calc_name');
		$currency 		 	= Input::get('currency');
		$funds 			 	= Input::get('funds');
		$interest 		 	= Input::get('interest');
		$calculate 		 	= Input::get('calculate');
		$result 		 	= Input::get('result');
		$description_title  = Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{			DB::table('text_rechnr_perpetuity')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'currency'			=>	$currency,
						'funds'				=>	$funds,
						'interest'			=>	$interest,
						'calculate'			=>	$calculate,
						'result'			=>	$result,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
			return Redirect::to(parent::getUrlForRoute('admin_perpetuity'))
				->with('link_url',Url::getUrl(parent::tld(), 'PerpetuityController', 'update'))
				->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_perpetuity'))
				->with('link_url',Url::getUrl(parent::tld(), 'PerpetuityController', 'update'))
				->with('updation',$e);
		}

	}
}