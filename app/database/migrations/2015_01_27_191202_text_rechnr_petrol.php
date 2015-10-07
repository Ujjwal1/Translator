<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrPetrol extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_petrol',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',65)->nullable();
			$table->string('currency',30)->nullable();
			$table->string('driven_kilometer',60)->nullable();
			$table->string('consumed_litres',60)->nullable();
			$table->string('fuel_cost_today',60)->nullable();
			$table->string('calculate',30)->nullable();
			$table->string('this_ride',60)->nullable();
			$table->string('per_hundred',60)->nullable();
			$table->string('ride_cost',60)->nullable();
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
		Schema::drop('text_rechnr_petrol');
	}

}
