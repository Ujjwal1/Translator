<?php
	class SignupController extends RechnrController{
		public function getCreate(){
			return View::make('rechnr.admin.signup');
		}

		public function postCreate(){
			$validator	= Validator::make(Input::all(),
				array(
						'username'			=>	'required',
						'password'			=>	'required|min:6',
						'password_again'	=>	'required|same:password'
					)
				);

			if($validator->fails()){
				return Redirect::route('account-signup')
				->withErrors($validator)
				->withInput();

			}else{
				$username	=	Input::get('username');
				$password 	=	Input::get('password');
				/*$last_login	=	date('Y-m-d h:i:s a', time());*/
				/*$last_login	= date_time_set();*/
				$user 	= User::create(array(
						'user_name'		=>		$username,
						'password' 		=>		Hash::make($password),
						/*'last_login'	=>		$last_login*/
					)
				);

				if($user){
					return Redirect::route('rechnr')
					->with('global','Account has been created successfully');
				} else{
					return Redirect::route('rechnr')
					->with('global','Failed to create account');
				}
			}

		}
	}