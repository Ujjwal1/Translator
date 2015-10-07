<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrChild extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_child',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',65)->nullable();
			$table->string('no_of_children',60)->nullable();
			$table->string('criteria',60)->nullable();
			$table->string('calculate',60)->nullable();
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
		Schema::drop('text_rechnr_child');
	}

}
