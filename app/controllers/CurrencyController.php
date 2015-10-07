<?php

	class CurrencyController extends RechnrController{

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_currency')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

		public function converter(){

			return parent::gotoView('rechnr/currency')
				->with('result',$this->domain_result());
		}
		


	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_currency', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_currency.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/currency_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'CurrencyController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id 			= Input::get('domain_id');
		$calc_name			= Input::get('calc_name');
		$result 			= Input::get('result');
		$description_title 	= Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{
			DB::table('text_rechnr_currency')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'result'			=>	$result,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_currency'))
				->with('link_url',Url::getUrl(parent::tld(), 'CurrencyController', 'update'))
				->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_currency'))
				->with('link_url',Url::getUrl(parent::tld(), 'CurrencyController', 'update'))
				->with('updation',$e);
		}

	}
}