<?php use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class TextRechnrMeasurementInsert extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('text_rechnr_measurement')->insert(array(
			"domain_id" => '1',
			"calculator_name"	=>	'Measurement Calculator',
			"metric" => 'Metric',
			"weight" => 'Weight',
			"mg" => 'Milli Gram',
			"ounce" => 'Ounce',
			"gram" => 'Gram',
			"decagram" => 'Decagram',
			"pound" => 'Pound',
			"kilogram" => 'Kilogram',
			"short_ton" => 'Short Ton',
			"metric_ton" => 'Metric Ton',
			"carat" => 'Carat',
			"length" => 'Length',
			"mm" => 'Milli Meter',
			"cm" => 'Centi Meter',
			"dm" => 'Deci Meter',
			"m" => 'Meter',
			"inch" => 'Inch',
			"foot" => 'Foot',
			"yard" => 'Yard',
			"fathom" => 'Fathom',
			"link" => 'Link',
			"rod" => 'Rod',
			"chain" => 'Chain',
			"statute_miles" => 'Statute Miles',
			"nautical_miles" => 'Nautical Miles',
			"select" => 'Select',
			"km" => 'Kilometer',
			"area" => 'Area',
			"mm2" => 'Milli Meter squared',
			"cm2" => 'Centi Meter Squared',
			"dm2" => 'Deci Meter Squared',
			"m2" => 'Meter Squared',
			"square_inch" => 'Inch Squared',
			"square_foot" => 'Foot Squared',
			"are" => 'Are',
			"hectare" => 'Hectare',
			"acre" => 'Acre',
			"speed" => 'Speed',
			"mps" => 'Meters per second',
			"ftph" => 'Feet per second',
			"mph" => 'Miles per Hour',
			"knots" => 'Knots',
			"mach" => 'Mach',
			"temperature" => 'Temperature',
			"kelvin" => 'Kelvin',
			"celcius" => 'Celcius',
			"fahrenheit" => 'Fahrenheit',
			"data" => 'Quantity of Data',
			"bit" => 'Bit',
			"byte" => 'Byte',
			"kilobyte" => 'Kilobyte',
			"megabyte" => 'Megabyte',
			"gigabyte" => 'Gigabyte',
			"terabyte" => 'Terabyte',
			"petabyte" => 'Petabyte',
			"exabyte" => 'Exabyte',
			"zettabyte" => 'Zettabyte',
			"yottabyte" => 'Yottabyte',
			"perf" => 'Performance',
			"PS" => 'PS',
			"kW" => 'kW',
			"vol"	=>	'Volume',
			"ml"	=>	'milli litre',
			"cl"	=>	'cl',
			"dl"	=>	'deci Litre',
			"l"	=>	'litre',
			"mm3"	=>	'Milli meter cubed',
			"cm3"	=>	'Centi Meter Cubed',
			"dm3"	=>	'Deci Meter Cubed',
			"m3"	=>	'Meter Cubed',
			"cubic_inch"	=>	'Cubic Inches',
			"quant"	=>	'Quantity Conversion',
			"brace"	=>	'Brace',
			"dozen"	=>	'Dozen',
			"baker_dozen"	=>	'Baker\'s Dozen',
			"score"	=>	'Score',
			"gross"	=>	'Gross',
			"measure_from" => 'From',
			"measure_to" => 'To',
			"calculate" => 'Calculate',
			"result" => 'Result is',
			"description_title" => 'This is the description title',
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
		DB::table('text_rechnr_measurement')
			->where('domain_id','=','1')
			->delete();
	}
}
