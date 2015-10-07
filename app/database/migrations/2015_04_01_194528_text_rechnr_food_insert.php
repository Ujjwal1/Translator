<?php use Illuminate\Database\Schema\Blueprint; use 
Illuminate\Database\Migrations\Migration; class TextRechnrFoodInsert 
extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_food')->insert(array(
			"domain_id" => '1',
			"calculator_name"	=>	'Food 
Indicator',
			"age" => 'Age',
			"sex" => 'Sex',
			"female" => 'Female',
			"male" => 'Male',
			"type" => 'Food Type',
			"celebration" => 'Celebration',
			"smooth" => 'Smooth',
			"sugar" => 'Sugar',
			"fat" => 'Fat',
			"saturated_fat" => 'saturated fat ',
			"salt_per_hundred" => 'Salt',
			"sodium" => 'Sodium',
			"salt" => 'Salt',
			"low" => 'low',
			"medium" => 'medium',
			"high" => 'high',
			"calculate" => 'Calculate',
			"result" => 'Result',
			"description_title" => 'This is the description 
title',
			"description_body" => 'Description body'
			));
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('text_rechnr_food')
		->where('domain_id','=','1')
		->delete();
	}
}
