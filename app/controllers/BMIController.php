<?php

	class BMIController extends RechnrController {

		protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}

		public function getValue(){
			
				$result = $this->domain_result();
					
				return parent::gotoView('rechnr/bmi')
						->with('message','')
						->with('result',$result)
						->with('link_url',Url::getUrl(parent::tld(), 'BMIController', 'bmiCalculate'));
		}

		public function bmiCalculate(){
			
					$validator = Validator::make(Input::all(),array(
						'sex'				=>	'required',
						'weight' 			=>	'required|numeric',
						'height' 			=>	'required|numeric',
					));

		if($validator->fails()){
			return Redirect::to(parent::getUrlForRoute('bmi'))
			->withErrors($validator)
			->withInput();
		}else{
			$domain_id = parent::tld();
			
			$classification=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('classification');
			$male=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('male');
        	$female=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('female');
           	$underweight=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('underweight');
        	$normal=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('normal');
        	$overweight=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('overweight');
        	$strong_overweight=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('strong_overweight');
        	$extreme_overweight=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('extreme_overweight');
        	$result1=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('result1');
        	$result2=DB::table('text_rechnr_bmi')
        		->where('domain_id',$domain_id)
        		->pluck('result2');

        	
				$sex = Input::get('sex');
				$weight = Input::get('weight');
				$height = Input::get('height');
				
				$bmi = ($weight*10000)/($height*$height);

				$bmi = number_format($bmi,2,".",",");

				$table = "<table>
								<tr><td>$classification</td><td>$male</td><td>$female</td></tr>
								<tr><td>$underweight</td> <td><20</td>  <td><19</td></tr>
								<tr><td>$normal</td>  <td>20-25</td>  <td>19-24</td></tr>
								<tr><td>$overweight</td>  <td>25-30</td>  <td>24-30</td></tr>
								<tr><td>$strong_overweight</td>  <td>30-40</td>  <td>30-40</td></tr>
								<tr><td>$extreme_overweight</td>  <td> >40</td>  <td> >40 </td></tr>
						</table>";

				switch ($sex) {
					case 'female':
										switch ($bmi) {
											case $bmi < 19:
												$message =  "$result1<strong> $underweight </strong>$result2 $bmi <br /><br />$table";
												break;
											case $bmi < 24:
												$message =  "$result1<strong> $normal </strong>$result2 $bmi <br /><br />$table";
												break;
											case $bmi < 30:
												$message =  "$result1<strong> $overweight </strong>$result2 $bmi <br /><br />$table ";
												break;
											case $bmi < 40:
												$message =  "$result1<strong> $strong_overweight </strong>$result2 $bmi <br /><br />$table";
												break;
											default:
												$message =  "$result1<strong> $extreme_overweight </strong>$result2 $bmi <br /><br />$table";
												break;
										}

						break;
					
					case 'male':
										switch ($bmi) {
											case $bmi < 20:
												$message =  "$result1<strong> $underweight </strong>$result2 $bmi <br /><br />$table";
												break;
											case $bmi < 25:
												$message =  "$result1<strong> $normal </strong>$result2 $bmi <br /><br />$table";
												break;
											case $bmi < 30:
												$message =  "$result1<strong> $overweight </strong>$result2 $bmi <br /><br />$table ";
												break;
											case $bmi < 40:
												$message =  "$result1<strong> $strong_overweight </strong>$result2 $bmi <br /><br />$table";
												break;
											default:
												$message =  "$result1<strong> $extreme_overweight </strong>$result2 $bmi <br /><br />$table";
												break;
										}
						break;
					default:
						# code...
						break;
				}

				
        		return parent::gotoView('rechnr/bmi')
        				->with('message', "$message")
        				->with('result',$this->domain_result())
        				->with('link_url',Url::getUrl(parent::tld(), 'BMIController', 'bmiCalculate'));
			}
		}


	public function admin(){
		if(Auth::check()){
						$result=DB::table('rechnr_domain')
				        ->join('text_rechnr_bmi', function($join){
				            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_bmi.domain_id');
				        })->get();
		
						return parent::gotoView('rechnr/editing_forms/bmi_admin')
						->with('results',$result)
						->with('link_url',Url::getUrl(parent::tld(), 'BMIController', 'update'));
					}
	}

	
	public function update(){
		if(Auth::check()){
					$domain_id 			= Input::get('id');
					$calc_name 			= Input::get('calc_name');
					$sex 				= Input::get('sex');
					$male 				= Input::get('male');
					$female 			= Input::get('female');
					$height 			= Input::get('height');
					$cm 				= Input::get('cm');
					$weight 			= Input::get('weight');
					$kg 				= Input::get('kg');
					$calculate 			= Input::get('calculate');
					$classification		= Input::get('classification');
					$underweight 		= Input::get('underweight');
					$normal 			= Input::get('normal');
					$overweight 		= Input::get('overweight');
					$strong_overweight	= Input::get('strong_overweight');
					$extreme_overweight	= Input::get('extreme_overweight');
					$result1 			= Input::get('result1');
					$result2 			= Input::get('result2');
					$description_title 	= Input::get('description_title');
					$description_body 	= Input::get('description_body');
		
					try{			
						if(DB::table('text_rechnr_bmi')
							->where('domain_id',$domain_id)
							->update(array(
									'calculator_name'	=>	$calc_name,
									'sex'				=>	$sex,
									'male'				=>	$male,
									'female'			=>	$female,
									'height'			=>	$height,
									'cm'				=>	$cm,
									'weight'			=>	$weight,
									'kg'				=>	$kg,
									'calculate'			=>	$calculate,
									'classification'	=>  $classification,
									'underweight'		=>  $underweight,
									'normal'			=>  $normal,
									'overweight'		=>  $overweight,
									'strong_overweight'	=>  $strong_overweight,
									'extreme_overweight'=>	$extreme_overweight,
									'result1'			=>	$result1,
									'result2'			=>	$result2,
									'description_title'	=>	$description_title,
									'description_body'	=>	$description_body
		
								))){
		
								return Redirect::to(parent::getUrlForRoute('admin_bmi'))
								->with('link_url',Url::getUrl(parent::tld(), 'BMIController', 'update'))
								->with('updation','Updated Successfully');
							}
					}catch(Exception $e){
						return Redirect::route('admin_bmi')
							->with('updation',$e);
					}
				}

	}

}