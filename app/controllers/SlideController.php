<?php

	class SlideController extends RechnrController{

	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_slider', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_slider.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/slider')
			->with('link_url',Url::getUrl(parent::tld(), 'SlideController', 'update'))
			->with('results',$result);
	}

	
	public function update(){


		$domain_id 			= Input::get('domain_id');
		$slider1 			= Input::get('slider1');
		$slider2 			= Input::get('slider2');
		$slider3 			= Input::get('slider3');
		$slider4 			= Input::get('slider4');
		$slider5 			= Input::get('slider5');
		$slider6 			= Input::get('slider6');
		$popular1 			= Input::get('popular1');
		$popular2 			= Input::get('popular2');
		$popular3 			= Input::get('popular3');
		$popular4			= Input::get('popular4');
		

		try{			DB::table('text_slider')
				->where('domain_id',$domain_id)
				->update(array(
						'slider1'	=>	$slider1,
						'slider2'			=>	$slider2,
						'slider3'			=>	$slider3,
						'slider4'			=>	$slider4,
						'slider5'			=>	$slider5,
						'slider6'			=>	$slider6,
						'popular1'			=>	$popular1,
						'popular2'			=>	$popular2,
						'popular3'			=>  $popular3,
						'popular4'			=>	$popular4

					));
				return Redirect::to(parent::getUrlForRoute('admin_slider'))
					->with('link_url',Url::getUrl(parent::tld(), 'SlideController', 'update'))
					->with('updation','Updated Successfully');
		}catch(Exception $e){
			return Redirect::route(parent::getUrlForRoute('admin_slider'))
				->with('link_url',Url::getUrl(parent::tld(), 'SlideController', 'update'))
				->with('updation',$e);
		}

	}
		
}