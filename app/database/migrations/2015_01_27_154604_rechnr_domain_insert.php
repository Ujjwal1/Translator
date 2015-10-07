<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrDomainInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('rechnr_domain')->insert(array(
			"language"=>'English',
			"domain_tld"=>'com',
			));
		/*DB::table('rechnr_domain')->insert(array(
			"language"=>'German',
			"domain_tld"=>'de',
			));*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('rechnr_domain')->where('language','=','English')->delete();
		//DB::table('rechnr_domain')->where('language','=','German')->delete();
	}

}
