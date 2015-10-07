<nav>
	<ul>
		@if(Session::has('domain_id'))
		
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RechnrController', 'Home') }}">Home</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'getValue') }}">BMI Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CurrencyController', 'converter') }}">Currency Converter</a></li>
		<li><a href="{{	Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}">Carbon Footprint</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'getIndex') }}">Interest Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}">Online Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PerpetuityController', 'Perpetuity') }}">Perpetuity Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'petrol')}}">Petrol Consumption Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RepaymentController', 'repayment') }}">Redemption Calculator</a></li>
		
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'getIndex') }}">Time Calculator</a></li>
		<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'getIndex') }}">Week Calculator</a></li>
		@endif

	</ul>

</nav>