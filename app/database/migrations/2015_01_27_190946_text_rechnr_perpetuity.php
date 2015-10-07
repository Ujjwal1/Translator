<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrPerpetuity extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_perpetuity',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',25);
			$table->string('currency',30)->nullable();
			$table->string('funds',30)->nullable();
			$table->string('interest',30)->nullable();
			
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
		Schema::drop('text_rechnr_perpetuity');
	}

}
