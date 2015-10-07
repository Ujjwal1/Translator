<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrPageInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '1',
			"name"				=>	'BMI Page',
			"comment"			=>	'',
			"controller_name"	=>  'BMIController',
			"action_name"		=>  'getValue',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '2',
			"name"				=>	'BMI Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'BMIController',
			"action_name"		=>  'bmiCalculate',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '3',
			"name"				=>	'Petrol Page',
			"comment"			=>	'',
			"controller_name"	=>  'PetrolController',
			"action_name"		=>  'petrol',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '4',
			"name"				=>	'Petrol Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'PetrolController',
			"action_name"		=>  'petrol_calc',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '5',
			"name"				=>	'Currency Page',
			"comment"			=>	'',
			"controller_name"	=>  'CurrencyController',
			"action_name"		=>  'converter',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '6',
			"name"				=>	'Carbon Page',
			"comment"			=>	'',
			"controller_name"	=>  'CarbonController',
			"action_name"		=>  'form',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '7',
			"name"				=>	'Carbon Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'CarbonController',
			"action_name"		=>  'calculate',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '8',
			"name"				=>	'Interest Page',
			"comment"			=>	'',
			"controller_name"	=>  'InterestController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '9',
			"name"				=>	'Interest Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'InterestController',
			"action_name"		=>  'postIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '10',
			"name"				=>	'Week Page',
			"comment"			=>	'',
			"controller_name"	=>  'WeekController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '11',
			"name"				=>	'Week Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'WeekController',
			"action_name"		=>  'postIndex',
			));

		
		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '12',
			"name"				=>	'Perpetuity Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'PerpetuityController',
			"action_name"		=>  'Perpetuity',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '13',
			"name"				=>	'Perpetuity Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'PerpetuityController',
			"action_name"		=>  'Calculate_Perpetuity',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '14',
			"name"				=>	'Repayment Page',
			"comment"			=>	'',
			"controller_name"	=>  'RepaymentController',
			"action_name"		=>  'repayment',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '15',
			"name"				=>	'Repayment Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'RepaymentController',
			"action_name"		=>  'Calculate_Repayment',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '16',
			"name"				=>	'Calculator Page',
			"comment"			=>	'',
			"controller_name"	=>  'CalculatorController',
			"action_name"		=>  'calculate',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '17',
			"name"				=>	'Time Page',
			"comment"			=>	'',
			"controller_name"	=>  'TimeController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '18',
			"name"				=>	'Home Page',
			"comment"			=>	'',
			"controller_name"	=>  'RechnrController',
			"action_name"		=>  'Home',
			));

		

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '19',
			"name"				=>	'Petrol Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'PetrolController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '20',
			"name"				=>	'Petrol Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'PetrolController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '21',
			"name"				=>	'BMI Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'BMIController',
			"action_name"		=>  'admin',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '22',
			"name"				=>	'BMI Admin Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'BMIController',
			"action_name"		=>  'update',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '23',
			"name"				=>	'Currency Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'CurrencyController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '24',
			"name"				=>	'Currency Admin update Page',
			"comment"			=>	'',
			"controller_name"	=>  'CurrencyController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '25',
			"name"				=>	'Carbon Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'CarbonController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '26',
			"name"				=>	'Carbon Admin update Page',
			"comment"			=>	'',
			"controller_name"	=>  'CarbonController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '27',
			"name"				=>	'Interest Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'InterestController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '28',
			"name"				=>	'Interest Admin update Page',
			"comment"			=>	'',
			"controller_name"	=>  'InterestController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '29',
			"name"				=>	'Week Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'WeekController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '30',
			"name"				=>	'Week Admin Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'WeekController',
			"action_name"		=>  'update',
			));

		
		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '31',
			"name"				=>	'Perpetuity Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'PerpetuityController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '32',
			"name"				=>	'Perpetuity Admin update Page',
			"comment"			=>	'',
			"controller_name"	=>  'PerpetuityController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '33',
			"name"				=>	'Repayment Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'RepaymentController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '34',
			"name"				=>	'Repayment Admin Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'RepaymentController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '35',
			"name"				=>	'Calculator Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'CalculatorController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '36',
			"name"				=>	'Calculator Admin update Page',
			"comment"			=>	'',
			"controller_name"	=>  'CalculatorController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '37',
			"name"				=>	'Time Admin Page',
			"comment"			=>	'',
			"controller_name"	=>  'TimeController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '38',
			"name"				=>	'Time Admin Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'TimeController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '39',
			"name"				=>	'Add Language Page',
			"comment"			=>	'',
			"controller_name"	=>  'LanguageController',
			"action_name"		=>  'add_lang',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '40',
			"name"				=>	'Add Language update Page',
			"comment"			=>	'',
			"controller_name"	=>  'LanguageController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '41',
			"name"				=>	'Delete Language Page',
			"comment"			=>	'',
			"controller_name"	=>  'LanguageController',
			"action_name"		=>  'del_lang',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '42',
			"name"				=>	'Delete Language update Page',
			"comment"			=>	'',
			"controller_name"	=>  'LanguageController',
			"action_name"		=>  'update_del',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '43',
			"name"				=>	'Admin Login Page',
			"comment"			=>	'',
			"controller_name"	=>  'LoginController',
			"action_name"		=>  'getLogin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '44',
			"name"				=>	'Admin Login Page',
			"comment"			=>	'',
			"controller_name"	=>  'LoginController',
			"action_name"		=>  'postLogin',
			));
		

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '45',
			"name"				=>	'Admin Signout Page',
			"comment"			=>	'',
			"controller_name"	=>  'LoginController',
			"action_name"		=>  'getSignout',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '46',
			"name"				=>	'Admin Change Password Page',
			"comment"			=>	'',
			"controller_name"	=>  'LoginController',
			"action_name"		=>  'change_password',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '47',
			"name"				=>	'Admin Change Password Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'LoginController',
			"action_name"		=>  'change_password_post',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '48',
			"name"				=>	'Edit URL Page',
			"comment"			=>	'',
			"controller_name"	=>  'URIController',
			"action_name"		=>  'edit_url',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '49',
			"name"				=>	'Edit Url Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'URIController',
			"action_name"		=>  'update',
			));


		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '50',
			"name"				=>	'Select Language for URL Page',
			"comment"			=>	'',
			"controller_name"	=>  'URIController',
			"action_name"		=>  'select_lang',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '51',
			"name"				=>	'Measurement Converter',
			"comment"			=>	'',
			"controller_name"	=>  'MeasurementController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '52',
			"name"				=>	'Admin Measurement Page',
			"comment"			=>	'',
			"controller_name"	=>  'MeasurementController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '53',
			"name"				=>	'Admin Measurement Page',
			"comment"			=>	'',
			"controller_name"	=>  'MeasurementController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '54',
			"name"				=>	'Color Converter Page',
			"comment"			=>	'',
			"controller_name"	=>  'ColorController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '55',
			"name"				=>	'Admin Color Page',
			"comment"			=>	'',
			"controller_name"	=>  'ColorController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '56',
			"name"				=>	'Admin Color Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'ColorController',
			"action_name"		=>  'update',
			));
		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '57',
			"name"				=>	'Food Indicator Page',
			"comment"			=>	'',
			"controller_name"	=>  'FoodController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '58',
			"name"				=>	'Food Indicator Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'FoodController',
			"action_name"		=>  'postIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '59',
			"name"				=>	'Admin Food Indicator Page',
			"comment"			=>	'',
			"controller_name"	=>  'FoodController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '60',
			"name"				=>	'Admin Food Indicator Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'FoodController',
			"action_name"		=>  'update',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '61',
			"name"				=>	'Child Benefit Page',
			"comment"			=>	'',
			"controller_name"	=>  'ChildController',
			"action_name"		=>  'getIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '62',
			"name"				=>	'Child Benefit Result Page',
			"comment"			=>	'',
			"controller_name"	=>  'ChildController',
			"action_name"		=>  'postIndex',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '63',
			"name"				=>	'Admin Child Benefit Page',
			"comment"			=>	'',
			"controller_name"	=>  'ChildController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '64',
			"name"				=>	'Admin Child Benefit Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'ChildController',
			"action_name"		=>  'update',
			));
                DB::table('rechnr_page')->insert(array(
                        "id"                            =>  '65',
                        "name"                          =>      'Capital Page',
                        "comment"                       =>      '',
                        "controller_name"       =>  'CapitalController',
                        "action_name"           =>  'getIndex',
                        ));

                DB::table('rechnr_page')->insert(array(
                        "id"                            =>  '66',
                        "name"                          =>   'Capital Update Page',
                        "comment"                       =>      '',
                        "controller_name"       =>  'CapitalController',
                        "action_name"           =>  'postIndex',
                        ));
                DB::table('rechnr_page')->insert(array(
                        "id"                            =>  '67',
                        "name"                          =>      'Admin Capital Page',
                        "comment"                       =>      '',
                        "controller_name"       =>  'CapitalController',
                        "action_name"           =>  'admin',
                        ));

                DB::table('rechnr_page')->insert(array(
                        "id"                            =>  '68',
                        "name"                          =>      'Admin Capital Update Page',
                        "comment"                       =>      '',
                        "controller_name"       =>  'CapitalController',
                        "action_name"           =>  'update',
                        ));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '69',
			"name"				=>	'Admin Slider Page',
			"comment"			=>	'',
			"controller_name"	=>  'SlideController',
			"action_name"		=>  'admin',
			));

		DB::table('rechnr_page')->insert(array(
			"id" 				=>  '70',
			"name"				=>	'Admin Slider Update Page',
			"comment"			=>	'',
			"controller_name"	=>  'SlideController',
			"action_name"		=>  'update',
			));




	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('rechnr_page')
			->delete();
	}

}
