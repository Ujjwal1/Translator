<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrWeek extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_week',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',65)->nullable();
			$table->string('current_week',65)->nullable();
			$table->string('date',30)->nullable();
			$table->string('calculate',30)->nullable();
			$table->string('result',60)->nullable();
			$table->text('description_title')->nullable();
			$table->text('description_body')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('text_rechnr_week');
	}

}
