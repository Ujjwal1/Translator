<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrRedemptionInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_redemption')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Redemption Calculator',
			"currency" 					=>	 'Choose Your Currency',
			"credits" 					=>	 'Credits',
			"interest" 					=>	 'Interest',
			"period" 					=>	 'Periods',
			"installment" 				=> 	 'No of Installments',
			"calculate" 				=>	 'Calculate',
			"result1" 					=>   'Annuity Rental:  ',
			"result2" 					=>   'Amount of Interest: ',
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
