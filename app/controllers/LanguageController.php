<?php

	class LanguageController extends RechnrController{

		public function add_lang(){
			return View::make('rechnr.editing_forms.language')
				->with('link_url',Url::getUrl(parent::tld(), 'LanguageController', 'update'));
		}
		
		public function del_lang(){
			$languages=DB::table('rechnr_domain')->get(); 
			
			return View::make('rechnr.editing_forms.del_language')
			->with('languages',$languages)
			->with('link_url',Url::getUrl(parent::tld(), 'LanguageController', 'update_del'));
		}

		public function update(){
			$language 	= Input::get('language');
			$tld 		= Input::get('tld');


		try{
			$langs = DB::table('rechnr_domain')
			->where('language',$language)
			->orWhere('domain_tld',$tld)->first();

			if($langs == null){
					DB::table('rechnr_domain')
					->insert(array(
							'language'				=>	$language,
							'domain_tld'			=>	$tld
						));

					$id = DB::table('rechnr_domain')->where('language',$language)->orWhere('domain_tld',$tld)->first();

					DB::table('text_rechnr_bmi')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_calculator')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_capital')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_carbon')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_currency')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_interest')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_perpetuity')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_petrol')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));


					DB::table('text_rechnr_redemption')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_week')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_time')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_measurement')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_rechnr_color')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					DB::table('text_slider')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));

					

					DB::table('text_rechnr_child')
						->insert(array(
						'domain_id'	=>	$id->domain_id
						));


					DB::table('rechnr_url')
						->insert(array(
							array('url'=> '/bmi', 							'memo' => 'BMI Page', 				'as'	=>	'bmi', 							'domain_id'	=>	$id->domain_id, 'page_id' => '1'),
							array('url'=> '/bmi-calculator', 				'memo' => 'BMI Result Page', 		'as'	=>	'bmi-calculaion', 				'domain_id'	=>	$id->domain_id, 'page_id' => '2'),
							array('url'=> '/petrol',						'memo' => 'Petrol Page',			'as'	=>	'petrol', 						'domain_id'	=>	$id->domain_id, 'page_id' => '3'),
							array('url'=> '/petrol-consumption', 			'memo' => 'Petrol Result Page', 	'as'	=>	'petrol-calculation', 			'domain_id'	=>	$id->domain_id, 'page_id' => '4'),
							array('url'=> '/currency', 						'memo' => 'Currency Page', 			'as'	=>	'currency', 					'domain_id'	=>	$id->domain_id, 'page_id' => '5'),
							array('url'=> '/carbon_footprint', 				'memo' => 'Carbon Page', 			'as'	=>	'carbon_footprint', 			'domain_id'	=>	$id->domain_id, 'page_id' => '6'),
							array('url'=> '/carbon/footprint-calculate', 	'memo' => 'Carbon Result Page', 	'as'	=>	'carbon_footprint_calculate', 	'domain_id'	=>	$id->domain_id, 'page_id' => '7'),
							array('url'=> '/interest', 						'memo' => 'Interest Page', 			'as'	=>	'interest', 					'domain_id'	=>	$id->domain_id, 'page_id' => '8'),
							array('url'=> '/interest-calculate', 			'memo' => 'Interest Result Page', 	'as'	=>	'interest_calculate', 			'domain_id'	=>	$id->domain_id, 'page_id' => '9'),
							array('url'=> '/week', 							'memo' => 'Week Page', 				'as'	=>	'week', 						'domain_id'	=>	$id->domain_id, 'page_id' => '10'),
							array('url'=> '/week-calculate', 				'memo' => 'Week Result Page', 		'as'	=>	'week_calculate', 				'domain_id'	=>	$id->domain_id, 'page_id' => '11'),
							array('url'=> '/perpetuity', 					'memo' => 'Perpetuity Page', 		'as'	=>	'perpetuity', 					'domain_id'	=>	$id->domain_id, 'page_id' => '12'),
							array('url'=> '/perpetuity-calculation', 		'memo' => 'Perpetuity Result Page', 'as'	=>	'perpetuity-calculation', 		'domain_id'	=>	$id->domain_id, 'page_id' => '13'),
							array('url'=> '/repayment', 					'memo' => 'Repayment Page', 		'as'	=>	'repayment', 					'domain_id'	=>	$id->domain_id, 'page_id' => '14'),
							array('url'=> '/repayment-calculation', 		'memo' => 'Repayment Result Page', 	'as'	=>	'repayment-calculation', 		'domain_id'	=>	$id->domain_id, 'page_id' => '15'),
							array('url'=> '/calculator', 					'memo' => 'Calculator Page', 		'as'	=>	'calculator', 					'domain_id'	=>	$id->domain_id, 'page_id' => '16'),
							array('url'=> '/time', 							'memo' => 'Time Page', 				'as'	=>	'time', 						'domain_id'	=>	$id->domain_id, 'page_id' => '17'),
							array('url'=> '/', 								'memo' => 'Home Page', 				'as'	=>	'home', 						'domain_id'	=>	$id->domain_id, 'page_id' => '18'),
							array('url'=> '/measurement-converter',			'memo' => 'Measurement Converter Page',		'as'	=>	'measurement-converter',	'domain_id'	=>	$id->domain_id, 'page_id' => '51'),
							array('url'=> '/color-converter', 				'memo' => 'Color Converter Page', 	'as'	=>	'color_converter', 		'domain_id'	=>	$id->domain_id, 'page_id' => '54'),
							array('url'=> '/food-indicator', 				'memo' => 'Food Indicator Page', 	'as'	=>	'food_indicator', 		'domain_id'	=>	$id->domain_id, 'page_id' => '57'),
							array('url'=> '/food-indicator-result', 		'memo' => 'Food Indicator Result Page', 	'as'	=>	'food_indicator_result', 		'domain_id'	=>	$id->domain_id, 'page_id' => '58'),
							array('url'=> '/child', 						'memo' => 'Child Benefit Page', 	'as'	=>	'child_benefit', 							'domain_id'	=>	$id->domain_id, 'page_id' => '61'),
							array('url'=> '/child-result', 					'memo' => 'Color Converter Page', 	'as'	=>	'child-benefit_result', 					'domain_id'	=>	$id->domain_id, 'page_id' => '62'),
						));

					return Redirect::to(parent::getUrlForRoute('add_lang'))
						->with('lang','Language added successfully');
				}else{
					return Redirect::to(parent::getUrlForRoute('add_lang'))
						->with('lang','It seems that the language already exists');
				}


		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('add_lang'))
			->with('lang',$e);
		}

		}

		public function update_del(){
			$language 	= Input::get('selected-language');
			try{

			DB::table('text_rechnr_bmi')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_calculator')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_capital')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_carbon')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_currency')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_interest')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_perpetuity')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_petrol')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_redemption')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_week')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_measurement')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_color')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('text_rechnr_time')
				->where('domain_id', '=', $language)
				->delete();


			DB::table('text_rechnr_child')
				->where('domain_id', '=', $language)
				->delete();

			DB::table('rechnr_url')
				->where('domain_id', '=', $language)
				->where('as','not like','admin%')
				->delete();

			DB::table('rechnr_domain')
				->where('domain_id', '=', $language)
				->delete();	

			DB::table('text_slider')
				->where('domain_id', '=', $language)
				->delete();			

			
			return Redirect::to(parent::getUrlForRoute('del_lang'))
			->with('lang','Language deleted successfully');

			}catch(Exception $e){
				return Redirect::to(parent::getUrlForRoute('del_lang'))
				->with('lang',$e);
			}
			
		}

	}