<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrPage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('rechnr_page',function($table){
			$table->increments('id');
			$table->text('name');
			$table->text('comment')->nullable();
			$table->text('controller_name');
			$table->text('action_name');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rechnr_page');
	}

}
