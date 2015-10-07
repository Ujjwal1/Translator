<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextSliderInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_slider')->insert(array(
			"domain_id" =>	'1',
			"slider1"	=>	'Slider 1',
			"slider2"	=>	'Slider 2',
			"slider3"	=>	'Slider 3',
			"slider4"	=>	'Slider 4',
			"slider5"	=>	'Slider 5',
			"slider6"	=>	'Slider 6',
			"popular1"	=>	'Popular 1',
			"popular2"	=>	'Popular 2',
			"popular3"	=>	'Popular 3',
			"popular4"	=>	'Popular 4',
			));	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('text_slider')
			->delete();
	}

}
