<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCapitalInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_capital')->insert(array(
			"domain_id"=>'1',
			"calculator_name"=>'Capital Consumption Calcultor',
			"currency" => 'Choose Your Currency',
			"fund" => 'Fund',
			"interest" => 'Interest rate',
			"consumption" => 'Monthly Consumption',
			"calculate" => 'Calculate',
			"result" => 'Result',
			"description_title" => 'Description Title',
			"description_body" => 'Description Body'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('text_rechnr_capital')->where('domain_id','=','1')->delete();
	}

}
