<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrWeekInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_week')->insert(array(
			"domain_id" 				=>	 '1',
			"calculator_name" 			=>	 'Week Calculator',
			"current_week" 				=>	 'Current Calender Week',
			"date" 						=>	 'Date',
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
		DB::table('text_rechnr_week')
			->where('domain_id','=','1')
			->delete();
	}

}
