<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TextRechnrColor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_color',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',65)->nullable();
			$table->string('color',30)->nullable();
			$table->string('choose_color',30)->nullable();
			$table->string('red',15)->nullable();
			$table->string('green',15)->nullable();
			$table->string('blue',15)->nullable();
			$table->string('black',15)->nullable();
			$table->string('white',15)->nullable();
			$table->string('pink',15)->nullable();
			$table->string('yellow',15)->nullable();
			$table->string('hexadecimal',30)->nullable();
			$table->string('rgb',30)->nullable();
			$table->string('rgb_perc',30)->nullable();
                        $table->string('cmyk_perc',30)->nullable();
			$table->string('websafe',60)->nullable();
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
		Schema::drop('text_rechnr_color');
	}

}

