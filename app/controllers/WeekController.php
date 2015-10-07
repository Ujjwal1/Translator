<?php


class WeekController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_week')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}
	
	public function getIndex(){
		return parent::gotoView('rechnr.week')
			->with('message', "")
			->with('result',$this->domain_result())
			->with('link_url',Url::getUrl(parent::tld(), 'WeekController', 'postIndex'));
	}

	public function postIndex()
	{
	   $domain_id = parent::tld();
		$day = Input::get('day');
		$month = Input::get('month');
		$year = Input::get('year');
		$date=$month.'/'.$day.'/'.$year;

		$dateStamp= strtotime($date);
		//validating correct date

		$week=date('W',$dateStamp);
		//$weekNumber = date('W', mktime(0,0,0,$month,$day,$year));

		$result=DB::table('text_rechnr_week')
        		->where('domain_id',$domain_id)
        		->pluck('result');
		return parent::gotoView('rechnr.week')
			->with('message' ,"$result : $week .")
			->with('result',$this->domain_result())
			->with('link_url',Url::getUrl(parent::tld(), 'WeekController', 'postIndex'));
		
	}

	

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_week', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_week.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/week_admin')
			->with('link_url',Url::getUrl(parent::tld(), 'WeekController', 'update'))
			->with('results',$result);
	}

	
	public function update(){
		$domain_id 			= Input::get('domain_id');
		$calc_name 			= Input::get('calc_name');
		$date 				= Input::get('date');
		$calculate 			= Input::get('calculate');
		$result 			= Input::get('result');
		$description_title 	= Input::get('description_title');
		$description_body 	= Input::get('description_body');

		try{
			DB::table('text_rechnr_week')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'	=>	$calc_name,
						'date'				=>	$date,
						'calculate'			=>	$calculate,
						'result'			=>	$result,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					));
				return Redirect::to(parent::getUrlForRoute('admin_week'))
					->with('link_url',Url::getUrl(parent::tld(), 'WeekController', 'update'))
					->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_week'))
				->with('link_url',Url::getUrl(parent::tld(), 'WeekController', 'update'))
				->with('updation',$e);
		}

	}
}