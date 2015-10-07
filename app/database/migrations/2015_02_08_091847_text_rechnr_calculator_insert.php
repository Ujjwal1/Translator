<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCalculatorInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_calculator')->insert(array(
			"domain_id"=>'1',
			"calculator_name"=>'Online Calculator',
			"result" => 'Result is',
			"description_title" => 'Description Title',
			"description_body" => 'Description body'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
