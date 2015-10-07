<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rechnr Home</title>

        {{  HTML::script('js/calc.js')  }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

        <script src="bootstrap/js/jquery-2.1.3.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            #answer
            {
                width:344px;
                height: 93px;
                background: white;
                padding-left: 10px;
                padding-right: 10px;
                
                margin: auto;
                margin-top: 10px;
                text-align: center;
                color: black
            }
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
            {   margin: 0px;
                background:#0d669f;
                border-bottom:1px solid #157fc6;
                border-right: 1px solid #157fc6;
            }
            .field
            {
                margin-top: 5px;
            }
            #form_right
            {
                width:100%;
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
                float:left;
                
            }
           
            input,textarea
            {   margin-top: 15px;
                padding: 0px;
                height:29px;
                width: 100%;
                margin-bottom: 0px;
                border-radius: 0px;
            }
            #left-bar
            {
                width:400px;
                border-right: 2px solid gainsboro;
                height: 100%;
            }
            .light_blue
            {   margin: 0px;
                background:#157fc6;
                border-bottom:1px solid #0d669f;
                border-right:1px solid #0d669f;
            }
            #logo
            {
                float:right;
                height:90px;
                width:230px;
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
            label{
                width:198px;
            }
           
           
           
            
            


            @media screen and (min-width:1276px)
            {
                 #rightbar
            {
                padding-left:0px;width:132px;padding-right: 0px;margin-top: 30px;
            }
            }
            @media screen and (max-width:1276px)
            {
                #rightbar
                {   margin-top: 15px;
                    width: 90%;
                }
                #right_table,#popular
                {
                  display: none;
                }
                #contact_us
                {   width:135px;
                    float: right;
                    margin-right: 35px;
                }
            }    @media screena and (min-width:768px) and (max-width:1365px)
            {
                #logo
                {
                    margin: auto;
                }

            }
            @media screena and (min-width:768px)
            {
                .input-group
                {
                    border-radius: 0px;
                }
                .icons_social img
                {
                    float: left;
                }

            }
            @media screen and (min-width:767px) and (max-width:1000px)
            {
                #yellow
                {
                    display:none;
                }
                #left-bar
                {
                    width: 200px;
                }
                #main_body
                {
                    width:550px;
                    margin: auto;
                    
                }
                
            }
            @media screen and (max-width:767px)
            {
                #logo
                {
                    margin:auto;
                }
                .icons_calc
            {
                width:250px;
                margin:auto
            }
     
            
            footer
            {
                margin-top: 30px;
            }
             #main_body
            {
                margin: auto;
                
            }
            }
            
            @media screen and (max-width:540px)
            {
                .calc
            {   width:300px;
                margin: auto;
            }
            #answer
            {
                width:100%;
                height: 93px;
                background: white;
                padding-left: 10px;
                padding-right: 10px;
                
                margin: auto;
                margin-top: 10px;
                text-align: center;
                color: black
            }
            label{
                width:100px;
            }
            
                
            }
          
            

        </style>
    </head>
    <body>
        @if(Auth::check())
                 <ul style="color:white;list-style-type:none;">
                    <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>
                    <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>                        
                    <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>    
                </ul>

        <!-- Links for Admin panel -->

        <br />
        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'LoginController', 'getSignout') }}">Sign Out</a></li>
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
        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'SlideController', 'admin') }}">Slider and Miscelleneous</a></li>
        
    

        @else
            @if(Session::has('domain_id'))
           
        <div class="container-fluid" id="first_div">
            <header>
                <div id="top" class="row col-xs-12">
                    <div class="col-xs-6 col-sm-4"><img id="logo" src="bootstrap/images/icons_rechner/rechner_logo_english.png" ></div>
                    <div class="col-xs-6 col-sm-4">
                        <ul style="color:white;list-style-type:none;">
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>                        
                            <li><span><img src="bootstrap/images/tick_bullet.png">Schnell & Einfach</li>    
                        </ul>
                    </div>
                    <div class="hidden-xs col-sm-4" style="color:black;">
                                                        <div class="input-group" style="height:30px;color:black;margin-top: 15px;border-radius: 0px;">
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Was mochten Sie"style="margin:0px;color: black;border-radius: 0px;">
  <span class="input-group-addon" style="height: 30px;background: white;border-radius: 0px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
                    </div>
               </div>
            </header>
            <div id="left-bar" class="hidden-xs col-sm-3">
                 <div class="col-md-6 col-sm 12 col-md-6" >
                    <img src="bootstrap/images/sideaddbar.png" >
                </div>
                 <div class="col-md-6 hidden-sm"> 
                    <ul>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RechnrController', 'Home') }}">Home</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'getValue') }}">{{ $bmi }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CurrencyController', 'converter') }}">{{ $currency }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}">{{ $carbon }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'ColorController', 'getIndex') }}">{{ $color }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'FoodController', 'getIndex') }}">{{ $food }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'getIndex') }}">{{ $interest }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'MeasurementController', 'getIndex') }}">{{ $measurement }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}">{{ $calculator }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PerpetuityController', 'Perpetuity') }}">{{ $perpetuity }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'petrol')}}">{{ $petrol }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'RepaymentController', 'repayment') }}"> {{ $redemption }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'getIndex') }}">{{ $time }}</a></li>
                        <li><a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'getIndex') }}">{{ $week }}</a></li>
                    </ul>
                </div>
                
                <div id="yellow" class="col-xs-12" style="height:280px;width: 336px;background:#ffbd30;margin-top:31px;">
                    
                </div>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <nav role="navigation" class="navbar" style="margin-bottom:0px;margin-bottom: -20px;">  
                <div class="navbar-header" style="height:30px;margin-bottom: 15px;"> 
                   

                        
                            
                                <div class="input-group" style="height:30px;color:black;">
                                    <span class="input-group-addon" style="height:30px;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" style="margin:0px;color: black;">
  <span class="input-group-addon" style="height: 30px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
                           
                        
                    </div>
                      </nav>
                
            </div>
                                                    
                                                    <div id="main_body"class="col-xs-12 col-md-7" style="margin:auto">
                                                        @section('content')
                                                        <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                                <a href="{{ Url::getUrl(Session::get('domain_id'), 'FoodController', 'getIndex') }}">{{ $food }}</a> <img src="bootstrap/images/icons_rechner/Icon-Ampelrechner_NutritionCalc.png" alt="ampelrechnr">
                                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CalculatorController', 'calculate') }}"><img src="bootstrap/images/icons_rechner/Icon-Taschenrechner_Calculator.png" alt="ampelrechnr">{{ $calculator }} </a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'WeekController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Wochenrechner_WeekCalc.png" alt="ampelrechnr"> {{ $week }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CurrencyController', 'converter') }}"><img src="bootstrap/images/icons_rechner/Icon-Währungsrechner_CurrencyConverter.png" alt="ampelrechnr">{{ $currency }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                                 <a href="{{ Url::getUrl(Session::get('domain_id'), 'ChildController', 'getIndex') }}"> <img src="bootstrap/images/icons_rechner/Icon-Kindergeldrechner_ChildBenefitCalc.png" alt="ampelrechnr"> </a>
                                                                 
                                                             </div></div>
                                                        
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'MeasurementController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Umrechenr_MeasurementConverter.png" alt="ampelrechnr">{{ $measurement }} </a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                                 <a href=""> <img src="bootstrap/images/icons_rechner/Icon-Kapitalerhaltsrechner_CapitalMaintenanceCalc.png" alt="ampelrechnr"> </a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'BMIController', 'getValue') }}"> <img src="bootstrap/images/icons_rechner/ICon-BMI-Rechner_BMICalc.png" alt="ampelrechnr">{{ $bmi }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'PetrolController', 'petrol')}}"><img src="bootstrap/images/icons_rechner/Icon-Spritverbrauchsrechner_FuelConsumption.png" alt="ampelrechnr">{{ $petrol }} </a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'TimeController', 'getIndex') }}">  <img src="bootstrap/images/icons_rechner/Icon-Zeitrechner_TimeCalc.png" alt="ampelrechnr">{{$time}}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'PerpetuityController', 'Perpetuity') }}"><img src="bootstrap/images/icons_rechner/Icon-Währungsrechner_CurrencyConverter.png" alt="ampelrechnr" >{{ $perpetuity }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'CarbonController', 'form') }}"> <img src="bootstrap/images/icons_rechner/Icon-CO2-Rechner_CarbonFootprintCalc.png" alt="ampelrechnr" style="float:left;">{{ $carbon }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'InterestController', 'getIndex') }}"><img src="bootstrap/images/icons_rechner/Icon-Zinsrechner_InterestCalc.png" alt="ampelrechnr">{{ $interest }}</a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                            <a href="{{ Url::getUrl(Session::get('domain_id'), 'RepaymentController', 'repayment') }}"><img src="bootstrap/images/icons_rechner/Icon-Tilgungsrechner_RepaymentCalc.png" alt="tilgungsrechnr">{{$redemption}} </a>
                                                             </div></div>
                                                         <div class="calc"><div class="icons_calc col-xs-12 col-sm-6 col-md-4">
                                                                 <img src="bootstrap/images/icons_rechner/Icon-Kapitalverzehrsrechner_CapitalConsumptionCalc.png" alt="kapitalverzehrsrechner"> <a href="{{ Url::getUrl(Session::get('domain_id'), 'ColorController', 'getIndex') }}">{{ $color }}</a></div>
                                                        </div>
                                                        
                                                       
<div class="col-xs-12" style="margin-top:31px;"><h1>lorem ipsum</h1>
    
    <div> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet iaculis gravida. Nulla facilisi. Praesent condimentum purus ex, egestas egestas arcu tincidunt quis. Vivamus tincidunt hendrerit risus, nec viverra mauris fringilla sed. Cras sed tellus sit amet sapien molestie tristique. Nullam cursus eros ac turpis fringilla viverra. In et accumsan nunc, ac fermentum massa. Maecenas molestie sollicitudin enim sed imperdiet. Cras ultrices dolor pretium elementum tincidunt.</p>
        <button class="btn" style="background:#8db930;width:190px;">ZUM ARTIKEL</button></div>
                                                        
</div>
                                                        @show
                                                        
                                                        
                        <div id="carousel-example-generic" class="carousel slide col-xs-12" data-ride="carousel" style="width:100%;">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider1(Session::get('domain_id')) }}
                                    </div>
                                </div>
                                <div class="item" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider2(Session::get('domain_id')) }}
                                    </div>
                                </div>
                                <div class="item" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider3(Session::get('domain_id')) }}
                                    </div>
                                </div>
                                <div class="item" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider4(Session::get('domain_id')) }}
                                    </div>
                                </div>
                                 <div class="item" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider5(Session::get('domain_id')) }}
                                    </div>
                                </div>
                                 <div class="item" style="background: white;height:100px;">
                                    <img src="..." alt="...">
                                    <div class="carousel-caption">
                                        {{ Slider::slider6(Session::get('domain_id')) }}
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="height:100px;width:10px;">
                                <img src="/var/www/bootstrap/images/slider-blue-bar-left.png" style="height:100px;width:10px;">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="height:100px;width:10px;">
                                <img src="/var/www/bootstrap/images/slider-blue-bar.png" style="height:100px;width:10px;">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                                                        
                                                    </div>
                                                    <div id="rightbar" class="col-xs-12 col-md-2">
                                                        <table id="right_table" class="table">
                                                            <tbody>
                                                                <tr><td colspan="5" style="border-bottom:1px solid #157fc6">
                                                                    <input type="text"  id="screen"/>
                                                                    </td>
                                                                </tr>
                                                                <tr></tr>
                                                                <tr><td class="deep_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('/');">/</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="sin();">sin</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="cos();">cos</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="tan();">tan</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="factorial();">!</a></td></tr>
                                                                <tr><td class="deep_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('*');">*</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('9');">9</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('8');">8</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('7');">7</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="sqrt();">&radic;</a></td></tr>
                                                                <tr><td class="deep_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('-');">-</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('6');">6</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('5');">5</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('4');">4</a></td><td class="deep_blue"><a href="javascript:void(0);" onclick="pow();">x²</a></td></tr>
                                                                <tr><td class="deep_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('+');">+</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('3');">3</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('2');">2</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('1');">1</a></td><td rowspan="2" style="background:#94c237"><a href="javascript:void(0);" onclick="copy_clipboard('');">C</a></td></tr>
                                                                <tr><td class="deep_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('.');">.</a></td><td colspan="2" class="light_blue"><a href="javascript:void(0);" onclick="evaluate_result();">=</a></td><td class="light_blue"><a href="javascript:void(0);" onclick="value_to_clipboard('0');">0</a></td></tr>
                                                            </tbody>
                                                        </table>
                                                        <div id="popular"><div class="green_back" style="background:#94c237;color:white;padding-left:5px;font-size: 10px;padding-top: 9px;padding-bottom: 9px;">POPULARE RECHNR</div>
                                                            <ul style="color:white;padding-left:11px;"><li>
                                                                    {{ Slider::popular1(Session::get('domain_id')) }}
                                                                </li>
                                                                <li>
                                                                    {{ Slider::popular2(Session::get('domain_id')) }}
                                                                </li>
                                                                <li>
                                                                    {{ Slider::popular3(Session::get('domain_id')) }}
                                                                </li><li>
                                                                    {{ Slider::popular4(Session::get('domain_id')) }}
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

                                                            <div class="col-xs-12" style="background:#1581c8;height:60px;padding-right: 0px;margin-top:30px;"><div class="col-xs-12 col-sm-4" style="float:right;margin-top:-17px;">
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Facebook.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-g+.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Pinterest.png" ></div>
                                                                <div class="col-xs-3 icons_social"><img src="bootstrap/images/icons_rechner/Icon-Twitter.png"></div>

                                                            </div>
                                                            <div class="col-xs-12" style="margin-bottom:2px;margin-top: 20px;">
                                                                Impressum | Uber Rechner
                                                            </div>
                                                        </div>
                                                    </footer>   
                        @endif
        @endif

<script>

            $(document).ready(function() {
               
                    var menu = $('nav');
                    var origOffsetY = menu.offset().top;

                    function scroll() {
                        if ($(window).scrollTop() >= origOffsetY) {
                            $('.navbar-header').addClass('navbar-fixed-top');
                            $("input").attr("placeholder", "LISA Rechnr");
                            $('.content').addClass('menu-padding');
                        } else {
                            $('.navbar-header').removeClass('navbar-fixed-top');
                            $("input").attr("placeholder", "Search");
                            $('.content').removeClass('menu-padding');

                        }

                    }
                


            

                document.onscroll = scroll;

            });
        </script>
    </body>
</html>