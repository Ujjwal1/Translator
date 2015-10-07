<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCarbon extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_carbon',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',60)->nullable();
			$table->string('fuel',60)->nullable();
			$table->string('heating_oil',60)->nullable();
			$table->string('natural_gas',60)->nullable();
			$table->string('pit_coal',60)->nullable();
			$table->string('brown_coal',60)->nullable();
			$table->string('long_distance_heating',60)->nullable();
			$table->string('power',60)->nullable();
			$table->string('car_benzene',60)->nullable();
			$table->string('car_diesel',60)->nullable();
			$table->string('car_natural_gas',60)->nullable();
			$table->string('bus_train',60)->nullable();
			$table->string('flight',60)->nullable();
			$table->string('kilometer',60)->nullable();
			$table->string('litre',60)->nullable();
			$table->string('kilogram',60)->nullable();
			$table->string('_each',60)->nullable();
			$table->string('day',60)->nullable();
			$table->string('month',60)->nullable();
			$table->string('week',30)->nullable();
			$table->string('year',30)->nullable();
			$table->string('_with',30)->nullable();
			$table->string('person',60)->nullable();
			$table->string('calculate',30)->nullable();
			$table->string('result_make',60)->nullable();
			$table->string('result_of_co2',60)->nullable();
			$table->string('result_person_each',60)->nullable();
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
		Schema::drop('text_rechnr_carbon');
	}

}
