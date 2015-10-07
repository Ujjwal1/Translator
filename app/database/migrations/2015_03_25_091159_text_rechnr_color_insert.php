<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrColorInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_color')->insert(array(
			"domain_id" 		=>  '1',
			"calculator_name"	=>	'Color Converter',
			"color"				=>	'Color',
			"choose_color"		=>  'Choose color',
			"red"				=>  'Red',
			"green"				=>  'Green',
			"blue"				=>  'Blue',
			"black"				=>  'Black',
			"white"				=>	'White',
			"pink"				=>	'Pink',
			"yellow"			=>	'Yellow',
			"hexadecimal"		=>	'Hexadecimal',
			"rgb"				=> 	'RGB',
			"rgb_perc" 			=>  'RGB in percentage',
			"cmyk_perc"		=>	'CMYK Percentage',
			"websafe"		    =>	'Web Safe',
			"result" 			=> 	'Result',
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
		DB::table('text_rechnr_color')->where('domain_id','=','1')->delete();
	}

}

