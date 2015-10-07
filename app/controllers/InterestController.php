<?php


class InterestController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_interest')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}
	
	public function getIndex(){
		return parent::gotoView('rechnr.interest')
			->with('message' , " ")
			->with('result',$this->domain_result())
			->with('link_url',Url::getUrl(parent::tld(), 'InterestController', 'postIndex'));
	}

	public function postIndex(){
		$validator = Validator::make(Input::all(), array(
				'term'		=> 'required | numeric',
				'amount'	=> 'required | numeric',
				'savings' 	=> 'required | numeric',
				'rate'		=> 'required | numeric'

			));

		if($validator->fails())
		{
			return Redirect::to(parent::getUrlForRoute('interest'))
			->withErrors($validator)
			->withInput();
		}else{

			$domain_id = parent::tld();
			
			$result1=DB::table('text_rechnr_interest')
        		->where('domain_id',$domain_id)
        		->pluck('result1');
        	$result2=DB::table('text_rechnr_interest')
        		->where('domain_id',$domain_id)
        		->pluck('result2');

			$currency = Input::get('currency');
			$term = Input::get('term');
			$term_timee=Input::get('term_timee');
			$amount=Input::get('amount');
			$savings=Input::get('savings');
			$rate=Input::get('rate');
			$interest_on_interest=Input::get('interest_on_interest');
			if($term_timee=="month"){
				//$time=$term/12;
				$time = 12;
			}
			elseif ($term_timee=="days") {
				//$time=$term/365;
				$time = 365;
			}
			else{
				//$time=$term;
				$time = 1;
			}
				$interest=0;
				$new_principal = $amount;
				$final_interest = 0;
			if($interest_on_interest=="notconsidering")
				{
					$last = ($new_principal * $rate)/(100 * $time);
					$final_interest += $last;
					$new_principal += $last;
					for($i = 0; $i < $term; $i++){
						$temp = (($last + (($savings * 12)/$time)) * $rate)/(100 * $time);
						$new_principal += $temp + (($savings * 12)/$time);
						$last = $new_principal;
						$final_interest += $temp;
					}
				}
			else
			{
				$temp = 0;
				for($i = 0; $i < $term; $i++){
					$temp += (($savings * 12)/$time);
					$final_interest += (((($amount + $temp) + ((($savings * 12)/$time) * $i))) * $rate)/(100 * $time);
				}
				$new_principal += $final_interest + $temp;
			}
			
			$new_principal = number_format($new_principal,2,".",",");
			$final_interest = number_format($final_interest,2,".",",");
			
			return parent::gotoView('rechnr.interest')
					->with('message', "$result1 : $new_principal <br /> $result2 : $final_interest")
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'InterestController', 'postIndex'));
		}
	}


	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_interest', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_interest.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/interest_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'InterestController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id 				= Input::get('domain_id');
		$calc_name 				= Input::get('calc_name');
		$agreed_term 			= Input::get('agreed_term');
		$day 					= Input::get('day');
		$month 					= Input::get('month');
		$year 					= Input::get('year');
		$initial_amount 		= Input::get('initial_amount');
		$savings 				= Input::get('savings');
		$rate 					= Input::get('rate');
		$compound_interest 		= Input::get('compound_interest');
		$considering 			= Input::get('considering');
		$not_considering 		= Input::get('not_considering');
		$calculate 				= Input::get('calculate');
		$result1 				= Input::get('result1');
		$result2 				= Input::get('result2');
		$description_title 		= Input::get('description_title');
		$description_body 		= Input::get('description_body');

		try{	if(DB::table('text_rechnr_interest')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'		=>	$calc_name,
						'agreed_term'			=>	$agreed_term,
						'day'					=>	$day,
						'month'					=>	$month,
						'year'					=>	$year,
						'initial_amount'		=>	$initial_amount,
						'savings'				=>	$savings,
						'rate'					=>	$rate,
						'compound_interest'		=>	$compound_interest,
						'considering'			=>	$considering,
						'not_considering'		=>	$not_considering,
						'calculate'				=>	$calculate,
						'result1'				=>	$result1,
						'result2'				=>	$result2,
						'description_title'		=>	$description_title,
						'description_body'		=>	$description_body

					))){
				return Redirect::to(parent::getUrlForRoute('admin_interest'))
				->with('link_url',Url::getUrl(parent::tld(), 'InterestController', 'update'))
				->with('updation','Updated Successfully');
			}
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_interest'))
				->with('link_url',Url::getUrl(parent::tld(), 'InterestController', 'update'))
				->with('updation',$e);
		}

	}
}