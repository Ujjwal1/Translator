<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrBmiInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_bmi')->insert(array(
			"domain_id" 		=>  '1',
			"calculator_name"	=>	'BMI Calculator',
			"sex"				=>	'Sex',
			"male"				=>  'Male',
			"female"			=>  'Female',
			"height"			=>  'Height',
			"cm"				=>  'centimeter(s)',
			"weight"			=>  'Weight',
			"kg"				=>	'kilogram(s)',
			"calculate"			=>	'Calculate',
			"classification"	=>	'Classification',
			"underweight"		=>	'Underweight',
			"normal"			=> 	'Normal',
			"overweight" 		=>  'Overweight',
			"strong_overweight" =>	'Strongly Overweight',
			"extreme_overweight"=> 	'Extremely Overweight',
			"result1" 			=> 	'You are',
			"result2" 			=> 	'Your BMI is',
			"description_title" => 	'This is the description title',
			"description_body" 	=> 	'Description body'
			));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('text_rechnr_bmi')->where('domain_id','=','1')->delete();
	}

}
