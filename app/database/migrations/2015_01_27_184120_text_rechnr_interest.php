<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrInterest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_interest',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',60)->nullable();
			$table->string('currency',30)->nullable();
			$table->string('agreed_term',60)->nullable();
			$table->string('day',30)->nullable();
			$table->string('month',30)->nullable();
			$table->string('year',30)->nullable();
			$table->string('initial_amount',30)->nullable();
			$table->string('savings',30)->nullable();
			$table->string('rate',30)->nullable();
			$table->string('compound_interest',60)->nullable();
			$table->string('considering',30)->nullable();
			$table->string('not_considering',30)->nullable();
			$table->string('calculate',30)->nullable();
			$table->string('result1',60)->nullable();
			$table->string('result2',60)->nullable();
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
		Schema::drop('text_rechnr_interest');
	}

}
