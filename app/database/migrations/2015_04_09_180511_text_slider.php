<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextSlider extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_slider',function($table){
			$table->increments('domain_id');
			$table->text('slider1')->nullable();
			$table->text('slider2')->nullable();
			$table->text('slider3')->nullable();
			$table->text('slider4')->nullable();
			$table->text('slider5')->nullable();
			$table->text('slider6')->nullable();
			$table->text('popular1')->nullable();
			$table->text('popular2')->nullable();
			$table->text('popular3')->nullable();
			$table->text('popular4')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('text_slider');
	}

}
