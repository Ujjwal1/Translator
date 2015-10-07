<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrInterestInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_interest')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Interest Converter',
			"currency"					=> 	 'Choose Your Currency',
			"agreed_term" 				=>	 'Agreed Term',
			"day" 						=>	 'Day',
			"month"					    =>	 'Month',
			"year" 						=> 	 'Year',
			"initial_amount" 			=>	 'Initial Amount',
			"savings" 					=>	 'Monthly Saving',
			"rate" 						=> 	 'Interest Rate',
			"compound_interest" 		=>	 'Compound Interest',
			"considering" 				=>	 'Considering',
			"not_considering" 			=>	 'Not Considering',
			"calculate" 				=>	 'Calculate',
			"result1" 					=>	 'New Principal',
			"result2" 					=>	 'Final Interest',
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
		DB::table('text_rechnr_interest')
			->where('domain_id','=','1')
			->delete();
	}

}
