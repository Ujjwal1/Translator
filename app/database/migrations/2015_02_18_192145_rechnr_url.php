<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrUrl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('rechnr_url',function($table){
			$table->increments('id');
            $table->text('url');
            $table->text('memo');   // for administrators
            $table->text('as');
            $table->integer('domain_id')->unsigned();
            $table->foreign('domain_id')->references('domain_id')->on('rechnr_domain');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('rechnr_page');
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
		Schema::drop('rechnr_url');
	}

}
