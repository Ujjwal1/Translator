<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('rechnr_user',function($table){
			$table->increments('id');
			$table->string('user_name',30);
			$table->string('password',64);
		/*	$table->dateTime('last_login');*/
			$table->text('remember_token')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rechnr_user');
	}

}
