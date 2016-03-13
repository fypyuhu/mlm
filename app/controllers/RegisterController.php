<?php

class RegisterController extends \BaseController {
function postUser(){
    
            $validator = Validator::make($data = Input::all(), User::$rules);
                
                
		if ($validator->fails())
		{
                    

			return Redirect::to('/register')->withErrors($validator);
  		
                        
                }
                        
                
			$name =  Input::get('name');	
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$apassword = Input::get('apassword');
			$message = "";
			
			$city = Input::get('city');
			$country = Input::get('country');
			$mobileno = Input::get('mobile');
                        $ref = 0;
                        if(Input::has('ref'))
                            $ref = Input::get('ref');
                        
                        $this->registerUser($username,$password,$name,$email,$ref,$city,$country,$mobileno);
			
                                return Redirect::to('login')->withMessage("Sucessfully Registered");
				
			

			return View::make('register',['message' => $message,'name'  => $name,'username' => $username,'email' => $email]);
		


	}

        function registerUser($username,$password,$name,$email,$parent,$city,$country,$mobileno){
		$this->incrementChildCount1($parent);

		$parentID = $this->toUserID($parent);
			
		$parentU2 = $this->tellParentU2();
		$this->incrementChildCount2($parentU2);

		$parentID2 = $this->toUserID($parentU2);

		$levelno = $this->tellLevelNo($parent);
		$levelno++;
		$levelno2 = $this->tellLevelNo2($parentU2);
		$levelno2++;
                
                $password  =(new SessionsController())->password($password);
        
		$status = "deactive";
                $user = new User();
                $user->username = $username;
                $user->password=  $password;
                $user->name= $name;
                $user->email = $email;
                $user->balance = 0;
                $user->earned = 0;
                $user->parent1 = $parentID;
                $user->levelno = $levelno;
                $user->levelno2 = $levelno2;
                $user->status = $status;
                $user->parent2 = $parentID2;
                $user->city = $city;
                $user->country = $country;
                $user->mobileno = $mobileno;
                
                $user->save();      


	}	
function incrementChildCount1($username){

		User::whereUsername($username)->increment('countchild1');


	}
	function incrementChildCount2($username){

		User::whereUsername($username)->increment('countchild2');


	}
	function tellParentU2(){
		$user  = User::where('countchild2', '<', 4)->orderBy('levelno', 'asc')->first();
		if($user == null)
			return 0;
		return $user->username;


	}

	function tellLevelNo($username){
		$user = User::whereUsername($username)->first();
               return $user->levelno;

	}
	function tellLevelNo2($username){
		$user = User::whereUsername($username)->first();

		return $user->levelno2;

	}
	
	function isUsernameAlreadyExits($username){
		$user = User::whereUsername($username)->first();
		if($user==NULL)
			return false;
		return true;


	}
	function isEmailAlreadyExits($email){
		$user = User::whereEmail($email)->first();
		if($user==NULL)
			return false;
		return true;


	}
	function toUserID($username){
		$user = User::whereUsername($username);
			if($user->count()==0)
				 return 0;
                        $user = $user->first();
		return $user->id;

	}
	function isUserAbsolute1($username){
		$user = User::whereUsername($username)->first();
		return ($user->countchild1 ) >= 4;


	}


	
        
        
        
        

}