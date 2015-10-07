<?php

	class CapitalController extends RechnrController{

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_capital')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

			public function getIndex(){
				return parent::gotoView('rechnr/capital')
					->with('message','')
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'CapitalController', 'postIndex'));
			}

			public function postIndex(){
				$validator = Validator::make(Input::all(),
				array(
						'currency'			=>	'required',
						'amount' 			=>	'required|numeric',
						'interest' 			=>	'required|numeric',
						'period' 			=>	'required|numeric'						
					)
			);

		if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('capital'))
			->withErrors($validator)
			->withInput();
		}else{
				$domain_id = parent::tld();
				
				$result=DB::table('text_rechnr_capital')
        		->where('domain_id',$domain_id)
        		->pluck('result');

        		

				$Currency = Input::get('currency');
				$amount = Input::get('amount');
				$interest = Input::get('interest');
				$period = Input::get('period');
				
				
        		return parent::gotoView('rechnr/capital')
        			->with('message' , $result)
        			->with('result',$this->domain_result())
        			->with('link_url',Url::getUrl(parent::tld(), 'CapitalController', 'postIndex'));
		}
	
			}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_capital', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_capital.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/capital_admin')
			->with('link_url',Url::getUrl(parent::tld(), 'CapitalController', 'update'))
			->with('results',$result);
	}

	
	public function update(){


		$domain_id 			= Input::get('domain_id');
		$calc_name 			= Input::get('calc_name');
		$currency 			= Input::get('currency');
		$fund 				= Input::get('fund');
		$interest 			= Input::get('interest');
		$consumption 		= Input::get('consumption');
		$calculate 			= Input::get('calculate');
		$result 			= Input::get('result');
		$description_title 	= Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{			DB::table('text_rechnr_capital')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'currency'			=>	$currency,
						'fund'				=>	$fund,
						'interest'			=>	$interest,
						'consumption'		=>	$consumption,
						'calculate'			=>	$calculate,
						'result'			=>	$result,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_capital'))
					->with('link_url',Url::getUrl(parent::tld(), 'CapitalController', 'update'))
					->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::route(parent::getUrlForRoute('admin_capital'))
				->with('link_url',Url::getUrl(parent::tld(), 'CapitaltController', 'update'))
				->with('updation',$e);
		}

	}
		
}