<?php

	class ColorController extends RechnrController {

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_color')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

		

		public function getIndex(){
			    $result = $this->domain_result();
				$hex = Input::get('hexadecimal');
				$hex = "#".$hex;
				$message = '';
				
				return parent::gotoView('rechnr/color')
						->with('message',$message)
						->with('link_url',Url::getUrl(parent::tld(), 'ColorController', 'getIndex'))
						->with('hexcolor',"$hex")
						->with('result',$result);
		}


		public function admin(){
		if(Auth::check()){
						$result=DB::table('rechnr_domain')
				        ->join('text_rechnr_color', function($join){
				            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_color.domain_id');
				        })->get();
		
						return parent::gotoView('rechnr/editing_forms/color_admin')
						->with('results',$result)
						->with('link_url',Url::getUrl(parent::tld(), 'ColorController', 'update'));
					}
	}

	
	public function update(){
		if(Auth::check()){
					$domain_id 			= Input::get('domain_id');
					$calc_name 			= Input::get('calc_name');
					$color 				= Input::get('color');
					$choose_color 		= Input::get('choose_color');
					$red				= Input::get('red');
					$green				= Input::get('green');
					$blue 				= Input::get('blue');
					$black 				= Input::get('black');
					$white				= Input::get('white');
					$pink 				= Input::get('pink');
					$yellow				= Input::get('yellow');
					$hexadecimal		= Input::get('hexadecimal');
					$rgb 				= Input::get('rgb');
					$rgb_perc 			= Input::get('rgb_perc');
					$cmyk_perc 			= Input::get('cmyk_perc');
					$websafe 			= Input::get('websafe');
					$result 			= Input::get('result');
					$description_title 	= Input::get('description_title');
					$description_body 	= Input::get('description_body');
		
					try{			
						if(DB::table('text_rechnr_color')
							->where('domain_id',$domain_id)
							->update(array(
									'calculator_name'	=>	$calc_name,
									'color'				=>	$color,
									'choose_color'		=>	$choose_color,
									'red'				=>	$red,
									'green'				=>	$green,
									'blue'				=>	$blue,
									'black'				=>	$black,
									'white'				=>	$white,
									'pink'				=>  $pink,
									'yellow'			=>  $yellow,
									'hexadecimal'		=>  $hexadecimal,
									'rgb'				=>	$rgb,
									'rgb_perc'			=>	$rgb_perc,
									'cmyk_perc'			=>	$cmyk_perc,
									'websafe'			=>	$websafe,
									'result'			=>	$result,
									'description_title'	=>	$description_title,
									'description_body'	=>	$description_body
		
								))){
		
								return Redirect::to(parent::getUrlForRoute('admin_color'))
								->with('link_url',Url::getUrl(parent::tld(), 'ColorController', 'update'))
								->with('updation','Updated Successfully');
							}
					}catch(Exception $e){
						return Redirect::to(parent::getUrlForRoute('color_converter'))
							->with('updation',$e);
					}
				}

	}
}