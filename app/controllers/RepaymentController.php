<?php

	class RepaymentController extends RechnrController{

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_redemption')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

			public function repayment(){
				return parent::gotoView('rechnr/repayment')
					->with('message','')
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'RepaymentController', 'Calculate_Repayment'));
			}

			public function Calculate_Repayment(){
				$validator = Validator::make(Input::all(),
				array(
						'currency'			=>	'required',
						'amount' 			=>	'required|numeric',
						'interest' 			=>	'required|numeric',
						'period' 			=>	'required|numeric',
						'installments' 		=>	'required|numeric'						
						
					)
			);

		if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('repayment'))
			->withErrors($validator)
			->withInput();
		}else{
				$domain_id = parent::tld();
				
				$result1=DB::table('text_rechnr_redemption')
        		->where('domain_id',$domain_id)
        		->pluck('result1');

        		$result2=DB::table('text_rechnr_redemption')
        		->where('domain_id',$domain_id)
        		->pluck('result2');

				$Currency = Input::get('currency');
				$amount = Input::get('amount');
				$interest = Input::get('interest');
				$period = Input::get('period');
				$installments = Input::get('installments');
				
				//$result = ($interest*$amount)/(1-pow((1+$interest),(-1*$period)));
				
				//Annuity Rental
				$annuity = $amount/($installments*$period);
				$annuity = number_format($annuity,2,".",",");

				$total_interest = $amount*($interest/100)*((($period+1)/2)-(($installments-1)/(2*$installments)));
				$total_interest = number_format($total_interest,2,".",",");
				 
        		return parent::gotoView('rechnr/repayment')
        			->with('message' , "$result1 : $annuity <br /> $result2 : $total_interest $Currency")
        			->with('result',$this->domain_result())
        			->with('link_url',Url::getUrl(parent::tld(), 'RepaymentController', 'Calculate_Repayment'));

		}
	
			}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_redemption', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_redemption.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/repayment_admin')
			->with('link_url',Url::getUrl(parent::tld(), 'RepaymentController', 'update'))
			->with('results',$result);
	}

	
	public function update(){


		$domain_id 			= Input::get('domain_id');
		$calc_name 			= Input::get('calc_name');
		$currency 			= Input::get('currency');
		$credits 			= Input::get('credits');
		$interest 			= Input::get('interest');
		$period 			= Input::get('period');
		$installment 		= Input::get('installment');
		$calculate 			= Input::get('calculate');
		$result1 			= Input::get('result1');
		$result2 			= Input::get('result2');
		$description_title 	= Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{			DB::table('text_rechnr_redemption')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'currency'			=>	$currency,
						'credits'			=>	$credits,
						'interest'			=>	$interest,
						'period'			=>	$period,
						'installment'		=>	$installment,
						'calculate'			=>	$calculate,
						'result1'			=>	$result1,
						'result2'			=>  $result2,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_repayment'))
					->with('link_url',Url::getUrl(parent::tld(), 'RepaymentController', 'update'))
					->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::route(parent::getUrlForRoute('admin_repayment'))
				->with('link_url',Url::getUrl(parent::tld(), 'RepaymentController', 'update'))
				->with('updation',$e);
		}

	}
		
}