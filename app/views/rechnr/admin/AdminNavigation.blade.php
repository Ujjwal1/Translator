<nav>
	aisa kyu?
	<ul>
		@if(Auth::check())
                @section('admin_content')
			<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'LoginController', 'getSignout') }}">Sign Out</a></li>
		@endif
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RechnrController', 'Home') }}">Home</a></li>
		
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'LanguageController', 'add_lang') }}">Add Language</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'LanguageController', 'del_lang') }}">Delete Language</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'URIController', 'select_lang') }}">Edit URL</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'admin') }}">BMI Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'ColorController', 'admin') }}">Color Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CurrencyController', 'admin') }}">Currency Converter</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CarbonController', 'admin') }}">Carbon Footprint</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'FoodController', 'admin') }}">Food Indicator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'admin') }}">Interest Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'MeasurementController', 'admin') }}">Measurement Converter</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'admin') }}">Online Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PerpetuityController', 'admin') }}">Perpetuity Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'admin') }}">Petrol Consumption Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RepaymentController', 'admin') }}">Redemption Calculator</a></li>		
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'admin') }}">Time Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'admin') }}">Week Calculator</a></li>

	</ul>
    @stop

</nav> 