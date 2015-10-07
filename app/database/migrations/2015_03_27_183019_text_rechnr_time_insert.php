<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrTimeInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_time')->insert(array(
			"domain_id" 		=>  '1',
			"calculator_name"	=>	'Time Calculator',
			"from"				=>	'From',
			"to"				=>  'To',
			"now"				=>  'Now',
			"date"				=>  'Date',
			"time"				=>  'Time',
			"year"				=>  'Year',
			"month"				=>	'Month',
			"day"				=>	'Day',
			"hour"				=>	'Hour',
			"minute"			=>	'Minute',
			"second"			=> 	'Second',
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
		DB::table('text_rechnr_time')
		->where('domain_id','=','1')
		->delete();
	}

}
