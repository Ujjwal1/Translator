<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCarbonInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_carbon')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Carbon Footprint Calculator',
			"fuel" 						=>	 'Fuel',
			"heating_oil"				=>	 'Heating Oil',
			"natural_gas"				=> 	 'Natural Gas',
			"pit_coal" 					=> 	 'Pit Coal',
			"brown_coal" 				=>	 'Brown Coal',
			"long_distance_heating" 	=>	 'Long Distance Heating',
			"power" 					=>	 'Power',
			"car_benzene" 				=>	 'Car Benzene',
			"car_diesel" 				=>	 'Car Diesel',
			"car_natural_gas" 			=>	 'Car Natural Gas',
			"bus_train" 				=> 	 'Bus/Train',
			"flight"					=>	 'Flight',
			"kilometer"					=>	 'Kilometer',
			"litre" 					=>   'Litre',
			"kilogram"					=>   'kilogram',
			"_each" 					=>   'Each',
			"day"						=>   'Day',
			"month"						=> 	 'Month',
			"week"						=>	 'Week',
			"year"						=>	 'Year',
			"_with"						=>   'With',
			"person" 					=>   'Person(s)',
			"calculate" 				=>   'Calculate',
			"result_make" 				=>   'Makes',
			"result_of_co2" 			=>	 'Kilogram of CO2 by',
			"result_person_each" 		=>	 'person(s) each',
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
		DB::table('text_rechnr_carbon')
			->where('domain_id','=','1')
			->delete();
	}

}
