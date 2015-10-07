<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCurrencyInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_currency')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Currency Converter',
			"result" 					=>	 'Result',
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
		DB::table('text_rechnr_currency')
			->where('domain_id','=','1')
			->delete();
	}

}
