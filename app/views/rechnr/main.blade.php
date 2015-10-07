<!DOCTYPE html>
<html>
	<head>
	<title>
		Rechnr Home
	</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

        <script src="bootstrap/js/jquery-2.1.3.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>

            
            a
            { color:white;
            }
            body
            {
                font-family: 'Open Sans', sans-serif;
                color:white;
                background: linear-gradient(#1581c9,#27a9e5,#30c2f5);

            }

           
            
            #carousel-example-generic
            {
                margin-top: 31px;
                width:714px;
            }
            .container-fluid
            {
                padding:0px;
            }
            .deep_blue
            {
                background:#0d669f;
                border-bottom:1px solid #157fc6;
                border-right: 1px solid #157fc6;
            }
            #footer_text
            {
                font-size: 12px;
                width:234px;
            }
            .icons_calc:nth-child(1) ,.icons_calc:nth-child(2) , .icons_calc:nth-child(3)
            {
                margin-top: 30px;
            }
            .icons_calc
            {
                margin-top:15px;
                margin-bottom: 15px;
            }
            .icons_calc img
            {
                height:60px;
                width:50px;
                
            }
            .icons_social
            {
                padding-right: 0px;
                padding-left: 0px;
            }
            .icons_social img
            {
                float:right;
            }
            input,textarea
            {   margin-top: 15px;
                padding: 0px;
                height:29px;
                width: 100%;
                margin-bottom: 0px;
                border-radius: 0px;
            }
            .light_blue
            {
                background:#157fc6;
                border-bottom:1px solid #0d669f;
                border-right:1px solid #0d669f;
            }
            td
            {
                width:20px;
                height:20px;
                background-color: white;
            }
            .top
            {
                height:90px;
                width:100%;
            }


            @media screen and (min-width:1366px)
            {

            }
            @media screena and (min-width:768px) and (max-width:1365px)
            {

            }
            @media screen and (min-width:680px) and (max-width:767px)
            {

            }
            footer
            {
                margin-top: 30px;
            }

        </style>
	</head>
	<body>

		@if(Auth::check())
			@include('rechnr.admin.AdminNavigation')
             <div class="col-xs-6 col-md-4">
                        <ul style="color:white;list-style-type:none;">
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>                        
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>    
                        </ul>
                    </div>
		@else
			@if(Session::has('domain_id'))


        <div class="container-fluid" id="first_div">
            <header>
                <div id="top" class="row col-xs-12">
                    <div class="col-xs-6 col-md-4"><img src="bootstrap/images/icons_rechner/rechner_logo_english.png" style="float:right;height:90px;width:230px"></div>
                    <div class="col-xs-6 col-md-4">
                        <ul style="color:white;list-style-type:none;">
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>                        
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>    
                        </ul>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-4">
                        <form class="form-search">

                            <input type="text" style="width:290px;border:0px" placeholder="Was mochten Sie ausrechnen">
                            <span><a class="btn" style="margin-left: -5px;margin-top:-3px;width:29px;background: white; border-radius:0px;padding-top:3px;padding-bottom: 0px;height: 29px;border-top: 0px;border-bottom: 0px;"><i class="glyphicon glyphicon-search" style></i></a></span>
                        </form>
                    </div>
               </div>
            </header>
            <div id="left-bar" class="hidden-xs hidden-sm col-md-3" style="width:400px;border-right: 2px dotted gainsboro">
                 <div class="col-md-6" >
                    <img src="bootstrap/images/sideaddbar.png" >
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-xs-12" style="height:280px;width: 336px;background:#ffbd30;margin-top:31px;">
                    
                </div>
            </div>

                                                    <div class="col-xs-12 col-md-7">
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <img src="bootstrap/images/icons_rechner/Icon-Ampelrechner_NutritionCalc.png" alt="ampelrechnr">                 </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}"><img src="bootstrap/images/icons_rechner/Icon-Taschenrechner_Calculator.png" alt="ampelrechnr">{{ $calculator }} </a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Wochenrechner_WeekCalc.png" alt="ampelrechnr"> {{ $week }}</a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}"> <img src="bootstrap/images/icons_rechner/Icon-Zeitrechner_TimeCalc.png" alt="ampelrechnr"></a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <img src="bootstrap/images/icons_rechner/Icon-Kindergeldrechner_ChildBenefitCalc.png" alt="ampelrechnr"> 
                                                        </div>
                                                        
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'MeasurementController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Umrechenr_MeasurementConverter.png" alt="ampelrechnr">{{ $measurement }} </a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <img src="bootstrap/images/icons_rechner/Icon-Kapitalerhaltsrechner_CapitalMaintenanceCalc.png" alt="ampelrechnr"> 
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'getValue') }}"> <img src="bootstrap/images/icons_rechner/ICon-BMI-Rechner_BMICalc.png" alt="ampelrechnr">{{ $bmi }}</a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'petrol')}}"><img src="bootstrap/images/icons_rechner/Icon-Spritverbrauchsrechner_FuelConsumption.png" alt="ampelrechnr">{{ $petrol }} </a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'getIndex') }}">  <img src="bootstrap/images/icons_rechner/Icon-Zeitrechner_TimeCalc.png" alt="ampelrechnr">Time calculator</a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}"><img src="bootstrap/images/icons_rechner/Icon-Währungsrechner_CurrencyConverter.png" alt="ampelrechnr"></a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}"> <img src="bootstrap/images/icons_rechner/Icon-CO2-Rechner_CarbonFootprintCalc.png" alt="ampelrechnr">{{ $carbon }}</a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Zinsrechner_InterestCalc.png" alt="ampelrechnr">{{ $interest }}</a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url:lorem ipsum:getUrl(Session::get('domain_id'), 'RepaymentController', 'repayment') }}"><img src="bootstrap/images/icons_rechner/Icon-Tilgungsrechner_RepaymentCalc.png" alt="tilgungsrechnr"> </a>
                                                        </div>
                                                        <div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <img src="bootstrap/images/icons_rechner/Icon-Kapitalverzehrsrechner_CapitalConsumptionCalc.png" alt="kapitalverzehrsrechner"> 
                                                        </div>
                                                        

   <!-- <div id="imagetabs" class="col-xs-12" style="margin:auto;margin-top: 10px;">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators 
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides
                            <div class="carousel-inner" role="listbox">
                                <div class="item active col-xs-12 col-md-4" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        1st
                                    </div>
                                </div>
                                <div class="item active col-xs-12 col-md-4" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        2nd 
                                    </div>
                                </div>
                                <div class="item active col-xs-12 col-md-4" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        3rd 
                                    </div>
                                </div>
                                <div class="item col-xs-12 col-md-4" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        4th 
                                    </div>
                                </div>

                            </div>

                            <!-- Controls 
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="height:100px;width:10px;">
                                <img src="/var/www/bootstrap/images/slider-blue-bar-left.png" style="height:100px;width:10px;">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="height:100px;width:10px;">
                                <img src="/var/www/bootstrap/images/slider-blue-bar.png" style="height:100px;width:10px;">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>-->

                                                        bahhhhhh
                                                        <div class="col-xs-12" style="margin-top:31px;"><h1>lorem ipsum</h1>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet iaculis gravida. Nulla facilisi. Praesent condimentum purus ex, egestas egestas arcu tincidunt quis. Vivamus tincidunt hendrerit risus, nec viverra mauris fringilla sed. Cras sed tellus sit amet sapien molestie tristique. Nullam cursus eros ac turpis fringilla viverra. In et accumsan nunc, ac fermentum massa. Maecenas molestie sollicitudin enim sed imperdiet. Cras ultrices dolor pretium elementum tincidunt.</p>
                                                            <button class="btn" style="background:#8db930;width:190px;">ZUM ARTIKEL</button>
                                                        </div>


                                                    </div>
                                                    <div class="hidden-xs hidden-sm col-md-2" style="padding-left:0px;width:132px;padding-right: 0px;margin-top: 30px;">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr><td colspan="5" style="border-bottom:1px solid #157fc6">
                                                                    </td>
                                                                </tr>
                                                                <tr></tr>
                                                                <tr><td class="deep_blue"></td><td class="deep_blue"></td><td class="deep_blue"></td><td class="deep_blue"></td><td class="deep_blue"></td></tr>
                                                                <tr><td class="deep_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td class="deep_blue"></td></tr>
                                                                <tr><td class="deep_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td class="deep_blue"></td></tr>
                                                                <tr><td class="deep_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td class="light_blue"></td><td rowspan="2" style="background:#94c237"></td></tr>
                                                                <tr><td class="deep_blue"></td><td colspan="2" class="light_blue"></td><td class="light_blue"></td></tr>
                                                            </tbody>
                                                        </table>
                                                        <div id="popular"><div class="green_back" style="background:#94c237;color:white;padding-left:5px;font-size: 10px;padding-top: 9px;padding-bottom: 9px;">POPULARE RECHNR</div>
                                                            <ul style="color:white;padding-left:11px;"><li>
                                                                    Tashcenrechnr
                                                                </li>
                                                                <li>
                                                                    Tashcenrechnr
                                                                </li>
                                                                <li>
                                                                    Tashcenrechnr
                                                                </li><li>
                                                                    Tashcenrechnr
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div id="contact_us">
                                                            <form name="frm" method="post" action="">
                                                                <div class="green_back" style="background:#94c237;color:white;padding-left:5px;font-size: 10px;padding-top: 9px;padding-bottom: 9px;">KONTACT</div>
                                                                <input type="text" value="email" placeholder="email" style="width:130px">
                                                                <textarea value="ihrefrage" placeholder="Ihre Frage" style="width:130px"></textarea>
                                                                <div class="green_back" style="background:#94c237;color:white;padding-left:5px;font-size: 10px;padding-top: 9px;padding-bottom: 9px;width:130px;margin-top: 15px;">FRAGE ABSENDEN</div>

                                                            </form>


                                                        </div>
                                                    </div>









                                                    </div>    

                                                    <footer>

                                                            <div class="col-xs-12" style="background:#1581c8;height:60px;padding-right: 0px;"><div class="col-xs-12 col-md-2" style="float:right;margin-top:-17px;">
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Facebook.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-g+.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Pinterest.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Twitter.png"></div>

                                                            </div>
                                                            <div class="col-xs-4" style="margin-bottom:2px;margin-top: 25px;">
                                                                Impressum | Uber Rechner
                                                            </div>
                                                        </div>
                                                    </footer>   
		
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RechnrController', 'Home') }}">Home</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'getValue') }}">{{ $bmi }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CurrencyController', 'converter') }}">{{ $currency }}</a></li>
				<li><a href="{{	Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}">{{ $carbon }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'getIndex') }}">{{ $interest }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'MeasurementController', 'getIndex') }}">{{ $measurement }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}">{{ $calculator }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PerpetuityController', 'Perpetuity') }}">{{ $perpetuity }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'petrol')}}">{{ $petrol }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RepaymentController', 'repayment') }}"> {{ $redemption }}</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'getIndex') }}">Time Calculator</a></li>
				<li><a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'getIndex') }}">{{ $week }}</a></li>
			@endif
		@endif
                

    <script type="text/javascript">

    $(document).ready(function(){

         $("#myCarousel").carousel();
          $('.item')[1].addClass('active');
                        $('.item')[2].addClass('active');

    });

    </script>


	</body>	
</html>