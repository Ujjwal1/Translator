<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrPerpetuityInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		DB::table('text_rechnr_perpetuity')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Perpetuity Calculator',
			"currency" 					=>	 'Choose Your Currency',
			"funds" 					=>	 'Funds',
			"interest" 					=>	 'Interest Rate',
			"calculate" 				=>	 'Calculate',
			"result" 					=>   'Result is',
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
		DB::table('text_rechnr_perpetuity')
			->where('domain_id','=','1')
			->delete();
	}

}
