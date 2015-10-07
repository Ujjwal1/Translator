<?php

	class RechnrController extends BaseController{

		public function tld(){

			$domain = $_SERVER['HTTP_HOST'];
			$exp = explode(".", $domain);
			if($exp[0]==="www"){
					if(count($exp)===2){
						$tld = "com";
					}else{
						$tld = "";
						for($i=2; $i<count($exp);$i++){
							if($i>2){
								$tld = $tld.".".$exp[$i];
							}else{
								$tld = $tld.$exp[$i];	
							}
						}
					}
			}else{
				
					if(count($exp)===1){
						$tld = "com";
					}else{
						$tld = "";
						for($i=1; $i<count($exp);$i++){
							if($i>1){
								$tld = $tld.".".$exp[$i];
							}else{
								$tld = $tld.$exp[$i];	
							}
						}
					}
			
			}
			
			 $result = DB::table('rechnr_domain')
		        		->where('domain_tld',$tld)
		        		->pluck('domain_id');

		     if($result){
		     	return $result;
		     }
		     $domain_id = DB::table('rechnr_domain')
		        		->where('domain_tld','com')
		        		->pluck('domain_id');

		     return $domain_id;
		}

		public function gotoView($view_path){
			$domain_id = $this->tld();
			$bmi =  DB::table('text_rechnr_bmi')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');
			$calculator =  DB::table('text_rechnr_calculator')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$color =  DB::table('text_rechnr_color')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$currency =  DB::table('text_rechnr_currency')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$carbon  =  DB::table('text_rechnr_carbon')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$currency =  DB::table('text_rechnr_currency')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$food =  DB::table('text_rechnr_food')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$interest =  DB::table('text_rechnr_interest')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$measurement =  DB::table('text_rechnr_measurement')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$perpetuity =  DB::table('text_rechnr_perpetuity')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$petrol  =  DB::table('text_rechnr_petrol')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$redemption =  DB::table('text_rechnr_redemption')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			$time =  DB::table('text_rechnr_time')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');



			$week =  DB::table('text_rechnr_week')
							->where('domain_id',$this->tld())
							->pluck('calculator_name');

			return View::make($view_path)
						->with('bmi',$bmi)
						->with('calculator',$calculator)
						->with('capital',$currency)
						->with('color',$color)
						->with('carbon',$carbon)
						->with('currency',$currency)
						->with('food',$food)
						->with('interest',$interest)
						->with('measurement',$measurement)
						->with('perpetuity',$perpetuity)
						->with('petrol',$petrol)
						->with('time',$time)
						->with('redemption',$redemption)
						->with('week',$week);
		}

		public function Home(){
			return $this->gotoView('rechnr.admin.home');
		}

   		public function Four_O_Four(){
			return "404: Webpage not found";
		}


		public function getUrlForRoute($as_value){

				$url = DB::table('rechnr_url')
							->where('as',$as_value)
							->where('domain_id',$this->tld())
							->pluck('url');
				return $url;
		}
		
	}