<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrPetrolInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_petrol')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Petrol Consumption Calculator',
			"currency" 					=>	 'Choose Your Currency',
			"driven_kilometer"			=>	 'Driven Kilometer',
			"consumed_litres" 			=>	 'Petrol Consumption',
			"fuel_cost_today" 			=>	 'Fuel Cost Today',
			"calculate" 				=>	 'Calculate',
			"this_ride"					=>	 'These are',
			"per_hundred" 				=>	 'litres of petrol per 100 kilometer',
			"ride_cost" 				=>	 'Ride will cost you',
			"description_title" 		=>	 'Description Title',
			"description_body" 			=>	 'Description Body'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('text_rechnr_petrol')
			->where('domain_id','=','1')
			->delete();
	}

}
