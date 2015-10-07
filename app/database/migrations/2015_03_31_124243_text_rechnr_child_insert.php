<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrChildInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_child')->insert(array(
			"domain_id" 		=>  '1',
			"calculator_name"	=>	'Child Benefit Calculator',
			"no_of_children" 	=> 	'Enter the number of Children',
			"criteria" 			=> 	'Under 18 years of age',
			"calculate"			=> 	'Calculate total amount',
			"result" 			=> 	'Total amount is',
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
		DB::table('text_rechnr_child')->where('domain_id','=','1')->delete();
	}

}
