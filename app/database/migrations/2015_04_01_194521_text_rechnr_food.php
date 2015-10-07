<?php use Illuminate\Database\Schema\Blueprint; use 
Illuminate\Database\Migrations\Migration; class TextRechnrFood extends 
Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_rechnr_food',function($table){
			$table->increments('domain_id');
			$table->string('calculator_name',30)->nullable();
			$table->string('age',15)->nullable();
			$table->string('sex',15)->nullable();
			$table->string('female',15)->nullable();
			$table->string('male',15)->nullable();
			$table->string('type',15)->nullable();
			$table->string('celebration',15)->nullable();
			$table->string('smooth',15)->nullable();
			$table->string('weight',15)->nullable();
			$table->string('sugar',15)->nullable();
			$table->string('fat',15)->nullable();
			$table->string('saturated_fat',30)->nullable();
			$table->string('salt_per_hundred',30)->nullable();
			$table->string('sodium',30)->nullable();
			$table->string('salt',30)->nullable();
			$table->string('calculate',60)->nullable();
			$table->string('low',15)->nullable();
			$table->string('medium',15)->nullable();
			$table->string('high',15)->nullable();
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
		Schema::drop('text_rechnr_food');
	}
}
