<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrUserInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$password = Hash::make('1234567');
		DB::table('rechnr_user')->insert(array(
			"user_name"=>'Admin',
			"password"=>$password,
			/*"last_login"=>date('Y-m-d H:m:s')*/
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('rechnr_user')->where('user_name','=','Admin')->delete();
	}

}
