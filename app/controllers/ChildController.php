<?php


class ChildController extends RechnrController{

	protected function domain_result(){
			$domain_id = parent::tld();

			$result=DB::table('text_rechnr_child')
        		->where('domain_id',$domain_id)->first();
        	return $result;
		}
	
	public function getIndex(){
		return parent::gotoView('rechnr.child')
			->with('message' , " ")
			->with('result',$this->domain_result())
			->with('link_url',Url::getUrl(parent::tld(), 'ChildController', 'postIndex'));
	}

	public function postIndex(){
		
			$domain_id = parent::tld();
			$currency = "€";
			$children = Input::get('children');
			$total=0;

        	$result=DB::table('text_rechnr_child')
        		->where('domain_id',$domain_id)
        		->pluck('result');

        	$i=1;
       		while ($i <= $children ) {
       			if ($i==1 || $i==2) {
					$total+=184;
				}
				if ($i==3) {
					$total+= 190;
				}
        		if ($i>3) {
        				$total+=215;
        		}	
        			$i++;
        	}


			return parent::gotoView('rechnr.child')
					->with('message', "$result : $currency $total")
					->with('result',$this->domain_result())
					->with('link_url',Url::getUrl(parent::tld(), 'ChildController', 'postIndex'));

			}


	public function admin(){
		
		$result=DB::table('rechnr_domain')
        ->join('text_rechnr_child', function($join){
            $join->on('rechnr_domain.domain_id', '=', 'text_rechnr_child.domain_id');
        })
        ->get();

		return parent::gotoView('rechnr/editing_forms/child_admin')
		->with('link_url',Url::getUrl(parent::tld(), 'ChildController', 'update'))
		->with('results',$result);
	}

	
	public function update(){
		$domain_id 				= Input::get('domain_id');
		$calc_name 				= Input::get('calc_name');
		$no_of_children 		= Input::get('no_of_children');
		$criteria 				= Input::get('criteria');
		$calculate 				= Input::get('calculate');
		$result 				= Input::get('result');
		$description_title 		= Input::get('description_title');
		$description_body 		= Input::get('description_body');

		try{	if(DB::table('text_rechnr_child')
				->where('domain_id',$domain_id)
				->update(array(
						'calculator_name'		=>	$calc_name,
						'no_of_children'		=>	$no_of_children,
						'criteria'				=>	$criteria,
						'calculate'				=>	$calculate,
						'result'				=>	$result,
						'description_title'		=>	$description_title,
						'description_body'		=>	$description_body

					))){
				return Redirect::to(parent::getUrlForRoute('admin_child'))
				->with('link_url',Url::getUrl(parent::tld(), 'ChildController', 'update'))
				->with('updation','Updated Successfully');
			}
		}catch(Exception $e){
			return Redirect::to(parent::getUrlForRoute('admin_child'))
				->with('link_url',Url::getUrl(parent::tld(), 'ChildController', 'update'))
				->with('updation',$e);
		}

	}
}