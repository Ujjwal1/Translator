<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrRedemption extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_redemption',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',65)->nullable();
			$table->string('currency',30)->nullable();
			$table->string('credits',30)->nullable();
			$table->string('interest',30)->nullable();
			$table->string('period',30)->nullable();
			$table->string('installment',30)->nullable();
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
		Schema::drop('text_rechnr_redemption');
	}

}
