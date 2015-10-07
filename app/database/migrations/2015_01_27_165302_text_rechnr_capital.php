<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrCapital extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_capital',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',60)->nullable();
			$table->string('currency',60)->nullable();
			$table->string('fund',65)->nullable();
			$table->string('interest',65)->nullable();
			$table->string('consumption',65)->nullable();
			$table->string('calculate',65)->nullable();
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
		Schema::drop('text_rechnr_capital');
	}

}
