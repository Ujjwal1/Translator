<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrTime extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_time',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',30)->nullable();
			$table->string('from',15)->nullable();
			$table->string('to',15)->nullable();
			$table->string('now',15)->nullable();
			$table->string('date',15)->nullable();
			$table->string('time',15)->nullable();
			$table->string('year',15)->nullable();
			$table->string('month',15)->nullable();
			$table->string('day',15)->nullable();
			$table->string('hour',15)->nullable();
			$table->string('minute',15)->nullable();
			$table->string('second',15)->nullable();
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
		Schema::drop('text_rechnr_time');
	}

}
