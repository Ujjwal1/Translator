<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('{all}',array(
    	'uses' => 'URIController@main'
	))->where('all', '.*');


//Route::get('/','HomeController@showWelcome');

/*
Route::get('mail',array(
		'as' => 'send-mail',
		'uses' => 'MailController@sendIt'
	));

*/


/* ****************** WORK FOR rechnr ********************* */
/*

	Route::get('/', array(
		'as'	=>	'rechnr',
		'uses'	=>	'RechnrController@Home'
		));
	
	//Petrol
	Route::get('petrol',array(
		'as'	=>	'petrol',
		'uses'	=> 'PetrolController@petrol'
		));

	Route::post('petrol/consumption',array(
		'as' => 'petrol-calculation',
		'uses' => 'PetrolController@petrol_calc'
		));

	Route::get('bmi',array(
		'as'	=>	'bmi',
		'uses'	=>	'BMIController@getValue'
		));

	Route::post('bmi/calculation',array(
		'as'	=>	'bmi-calculation',
		'uses'	=>	'BMIController@bmiCalculate'
		));

	Route::get('currency', array(
		'as'	=>	'currency',
		'uses'	=>	'CurrencyController@converter'
		));

	Route::get('carbon_footprint',array(
		'as'	=> 'carbon_footprint',
		'uses'	=> 'CarbonController@form'
		));

	Route::post('carbon_calculate',array(
		'as'	=>	'carbon_footprint_calculate',
		'uses'	=>	'CarbonController@calculate'));
		
	Route::get('interest',array(
			'as' => 'interest',
			'uses' => 'InterestController@getIndex'
		));
	Route::post('interest/calculate',array(
			'as'	=>	'interest_calculate',
			'uses'	=>	'InterestController@postIndex'));

	Route::get('week',array(
		'as' => 'week',
		'uses'	=> 'WeekController@getIndex'
		));

	Route::post('week/calculate',array(
		'as'	=>	'week_calculate',
		'uses'	=>	'WeekController@postIndex')); 

	Route::get('perpetuity',array(
		'as' => 'perpetuity',
		'uses'	=> 'PerpetuityController@Perpetuity'
		));

	Route::post('perpetuity_calculate',array(
		'as' => 'perpetuity-calculation',
		'uses'	=> 'PerpetuityController@Calculate_Perpetuity'
		));

	Route::get('repayment',array(
		'as' => 'repayment',
		'uses'	=> 'RepaymentController@repayment'
		));

	Route::post('repayment_calculate',array(
		'as' => 'repayment-calculation',
		'uses'	=> 'RepaymentController@Calculate_Repayment'
		));

	Route::get('calculator',array(
		'as'	=>	'calculator',
		'uses'	=>	'CalculatorController@calculate'
		)); 
	
	Route::get('time',array(
		'as' => 'time',
		'uses'	=> 'TimeController@getIndex'
		));
	Route::controller('time','TimeController');

*/	
	//***** Account Login********//
		/*
			Authenticated group
		*/
//	Route::group(array('before' =>'auth'),function(){

		/*
			Change password
		*/
/*
			Route::get('account/change-password',array(
				'as'	=>	'change-password',
				'uses'	=>	'LoginController@change_password'
				));

			Route::post('account/change-password-post',array(
				'as'	=>	'change-password-post',
				'uses'	=>	'LoginController@change_password_post'
				));
*/

		/*
			Sign out
		*/
/*			Route::get('account/signout',array(
					'as'	=>	'account-signout',
					'uses'	=>	'LoginController@getSignout'
				));



		});	
*/
	
		/*
			Unauthenticated Group
		*/
	
//	Route::group(array('before' =>'guest'),function(){

		/*
			CSRF protection group 
		*/
//		Route::group(array('before' => 'csrf'), function(){
			/*
				Create account(POST)
			*/
/*
			Route::post('account/signup',array(
					'as' => 'account-signup-post',
					'uses' => 'SignupController@postCreate'
				));

*/
			/*
				Sign In (POST)
			*/
/*
			Route::post('authorize/user/login',array(
					'as' => 'account-log-in-post',
					'uses' => 'LoginController@postLogIn'
				));


		});
*/

		/*Sign In (GET)*/
/*
		Route::get('authorize/user/login',array(
				'as' => 'account-log-in',
				'uses' => 'LoginController@getLogIn'
			));

*/
		/* 
			Create account(GET) 
		*/
/*
		Route::get('account/signup',array(
				'as' => 'account-signup',
				'uses' => 'SignupController@getCreate'
			));
	
});

*/

	/*	
		Admin View
	*/


/*
	Route::get('admin/petrol',array(
		'as'	=>	'admin_petrol',
		'uses'	=> 'PetrolController@admin'
		));

	Route::post('petrol/update',array(
		'as'	=>	'petrol-update',
		'uses'	=>	'PetrolController@update'
		));

	Route::get('admin/bmi',array(
		'as'	=>	'admin_bmi',
		'uses'	=>	'BMIController@admin'
		));

	Route::post('bmi/update',array(
		'as'	=>	'bmi-update',
		'uses'	=>	'BMIController@update'
		));

	Route::get('admin/currency', array(
		'as'	=>	'admin_currency',
		'uses'	=>	'CurrencyController@admin'
		));

	Route::post('currency/update',array(
		'as'	=>	'currency-update',
		'uses'	=>	'CurrencyController@update'
		));

	Route::get('admin/carbonfootprint',array(
		'as'	=> 'admin_carbon_footprint',
		'uses'	=> 'CarbonController@admin'
		));

	Route::post('carbon/update',array(
		'as'	=>	'carbon-update',
		'uses'	=>	'CarbonController@update'
		));
		
	Route::get('admin/interest',array(
			'as' => 'admin_interest',
			'uses' => 'InterestController@admin'
		));

	Route::post('interest/update',array(
		'as'	=>	'interest_update',
		'uses'	=>	'InterestController@update'
		));

	

	Route::get('admin/week',array(
		'as' => 'admin_week',
		'uses'	=> 'WeekController@admin'
		));

	Route::post('week/update',array(
		'as'	=>	'week_update',
		'uses'	=>	'WeekController@update'
		));

	Route::get('admin/perpetuity',array(
		'as' => 'admin_perpetuity',
		'uses'	=> 'PerpetuityController@admin'
		));

	Route::post('perpetuity/update',array(
		'as'	=>	'perpetuity-update',
		'uses'	=>	'PerpetuityController@update'
		));

	Route::get('admin/repayment',array(
		'as' => 'admin_repayment',
		'uses'	=> 'RepaymentController@admin'
		));

	Route::post('repayment/update',array(
		'as'	=>	'repayment-update',
		'uses'	=>	'RepaymentController@update'
		));


	Route::get('admin/calculator',array(
		'as'	=>	'admin_calculator',
		'uses'	=>	'CalculatorController@admin'
		)); 

	Route::post('calculator/update',array(
		'as'	=>	'calculator-update',
		'uses'	=>	'CalculatorController@update'
		));
	
	Route::get('admin/time',array(
		'as' => 'admin_time',
		'uses'	=> 'TimeController@admin'
		));
	//Route::controller('time','TimeController');

	Route::get('add/lang',array(
		'as' => 'add_lang',
		'uses'	=> 'LanguageController@add_lang'
		));

	Route::post('lang/update',array(
		'as'	=>	'lang_update',
		'uses'	=>	'LanguageController@update'
		));

	
	Route::get('del/lang',array(
		'as' => 'del_lang',
		'uses'	=> 'LanguageController@del_lang'
		));

	Route::post('lang/update_del', array(
		'as'	=>	'lang_del_update',
		'uses'	=>	'LanguageController@update_del'
		));

*/

	/*

	Route::controller('capital','CapitalController');
	
	Route::get('calculator','CalculatorController@calculate');
*/