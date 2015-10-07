<?php


class TimeController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_time')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}
	
	public function getIndex(){
		return parent::gotoView('rechnr.time')
			->with('result',$this->domain_result())
			->with('link_url',Url::getUrl(parent::tld(), 'TimeController', 'getIndex'));
	}

	public function postIndex()
	{
		
	}

	

	public function admin(){
		if(Auth::check()){
			$result=DB::table('rechnr_domain')
	        ->join('text_rechnr_time', function($join){
	            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_time.domain_id');
	        })->get();

			return parent::gotoView('rechnr/editing_forms/time_admin')
			->with('results',$result)
			->with('link_url',Url::getUrl(parent::tld(), 'TimeController', 'update'));
		}
		
	}

	
	public function update(){
		$domain_id = Input::get('domain_id');
		$from = Input::get('from');
		$to = Input::get('to');
		$now = Input::get('now');
		$date = Input::get('date');
		$time = Input::get('time');
		$year = Input::get('year');
		$month = Input::get('month');
		$day = Input::get('day');
		$hour = Input::get('hour');
		$minutes = Input::get('minutes');
		$seconds = Input::get('seconds');
		$description_title = Input::get('description_title');
		$description_body = Input::get('description_body');

		try{
			if(DB::table('text_rechnr_time')
				->where('domain_id',$domain_id)
				->update(array(
						'from'				=>	$from,
						'to'				=>	$to,
						'now'				=>	$now,
						'date'				=>	$date,
						'time'				=>	$time,
						'year'				=>	$year,
						'month'				=>	$month,
						'day'				=>	$day,
						'hour'				=>	$hour,
						'minute'			=>	$minutes,
						'second'			=>	$seconds,
						'description_title'	=>	$description_title,
						'description_body'	=>	$description_body

					))){
						return Redirect::to(parent::getUrlForRoute('admin_time'))
						->with('link_url',Url::getUrl(parent::tld(), 'TimeController', 'update'))
						->with('updation','Updated Successfully');
					}
		}catch(Exception $e){
			return Redirect::route('admin_time')
				->with('updation',$e);
		}

	}
}
