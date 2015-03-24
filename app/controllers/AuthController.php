<?php
class AuthController extends BaseController {

	public function login(){
		if(Request::ajax()){
			$log = (Object) Input::all();
			$cred = array(
				'username' => $log->username,
				'password' => $log->password 
			);
			$rememberMe = false;
			if(isset($log->remember)) $rememberMe = true;
			if (Auth::attempt( $cred, $rememberMe ))
			{
			    Session::put('sess_id','sess_id_'. Auth::id() );
			    return Response::json(array('msg' => 'Successfully Login','auth'=>1));
			}else{
			    return Response::json(array('msg' => 'Please check your credentials','auth'=>0));
			}	
		}
	}

	public function logout(){
		Auth::logout();
		Session::forget('sess_id');
		return Redirect::to('/');
	}
}
?>