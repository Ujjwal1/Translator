<?php
	
	class LoginController extends RechnrController{

		public function getLogin(){
			return parent::gotoView('rechnr.admin.login')
					->with('link_url',Url::getUrl(parent::tld(), 'LoginController', 'postLogIn'));
		}

		public function postLogIn(){
				
				$validator =  Validator::make(Input::all(),
					array(
						'username' => 'required|max:30',
						'password' => 'required|min:6'
						));

				if($validator->fails()){
					return Redirect::to(parent::getUrlForRoute('admin_login'))
						->withErrors($validator)
						->withInput();
				}else{	
					//$username	=	Input::get('username');
					//$password	=	Input::get('password');
					$date_time	=	date('Y-m-d h:i:s a', time());

					/*
						Have to include last login facility
					*/

					$remember = (Input::has('remember')) ? true : false; 

					$auth =	Auth::attempt(array(
							'user_name'		=> 	Input::get('username'),
							'password'		=>	Input::get('password')
						), $remember);

					if($auth){
						
						return Redirect::intended('/');

					}else {
						
						return Redirect::to(parent::getUrlForRoute('admin_login'))
						->with('global','Wrong username or password.');
					}

				}
				return Redirect::to(parent::getUrlForRoute('admin_login'))
						->with('global','There was a problem siging you in.');
		}


		public function getSignout(){
			Auth::logout();
			Session::flush();
			return Redirect::to('/');
		}


	public function admin(){
		return "Admin View";
	}

	public function change_password(){
		if(Auth::check())
		return parent::gotoView('rechnr.admin.change_password')
				->with('link_url',Url::getUrl(parent::tld(), 'LoginController', 'change_password_post'));
	}

	public function change_password_post(){
		if(Auth::check()){
				$validator =  Validator::make(Input::all(),
							array(
								'old-password' => 'required',
								'new-password' => 'required|min:6',
								'new-password' => 'required|min:6|same:new-password'
								));

				if($validator->fails()){
							return Redirect::to(parent::getUrlForRoute('admin_change_password'))
								->withErrors($validator)
								->withInput();	
				}else{
						$user = Auth::user();
						$current_password = Input::get('old-password');
						if (strlen($current_password) > 0 && !Hash::check($current_password, $user->password)) {
		        			return Redirect::to(parent::getUrlForRoute('admin_change_password'))->with('global','The old-password you entered is wrong');
		    			}else{
						$user->password = Hash::make(Input::get('new-password'));
						
						$user->save();
						return Redirect::to(parent::getUrlForRoute('admin_change_password'))
						->with('global','password changed successfully');
					}
				}
		}
	}
}