<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrBmi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_bmi',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',25)->nullable();
			$table->string('sex',15)->nullable();
			$table->string('male',15)->nullable();
			$table->string('female',15)->nullable();
			$table->string('height',15)->nullable();
			$table->string('cm',15)->nullable();
			$table->string('weight',15)->nullable();
			$table->string('kg',15)->nullable();
			$table->string('classification',30)->nullable();
			$table->string('underweight',30)->nullable();
			$table->string('normal',30)->nullable();
			$table->string('overweight',30)->nullable();
			$table->string('strong_overweight',30)->nullable();
			$table->string('extreme_overweight',30)->nullable();
			$table->string('calculate',30)->nullable();
			$table->text('result1')->nullable();
			$table->text('result2')->nullable();
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
		Schema::drop('text_rechnr_bmi');
	}

}
