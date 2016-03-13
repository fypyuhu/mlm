<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
    public function __construct()
    {
        
       $this->beforeFilter('auth');
        
        
        
    
    }
		
	function all(){
		$users = User::all();

		return View::make('users',['users' => $users]);

	}
	
	function specific($username){
		$user = User::whereUsername($username)->first();
		if($user==NULL)
			return "User Not Found";
		return $user->username;
	}
	function getIndex(){
                
                                $user = Auth::user();
		
				$r1 = $this->getPhaseIRefferals($user);

				$r2= $this->getPhaseIIRefferals($user);	
				$i=0;$j=0;
				foreach ($r1 as $r) {
					if($r->levelno2-$user->levelno2 <=7)
						$i++;


				}
				foreach ($r2 as $r) {
					if($r->levelno2-$user->levelno2 <=7)
						$j++;


				}

			return View::make('useri',['user' => $user ,'phaseIR' => $i , 'phaseIIR' => $j]);
		
	}
	function getProfile(){
            $user = Auth::user();
			return View::make('userprofile',['user' => $user]);
	 return Redirect::intended('./index');
	}
	function getPahareIRefferals($user){

		$rs =  User::whereParent1($user->id)->get();
		$stack = array();
		foreach ($rs as $r) {
			array_push($stack, $r);
		}
		return $stack;
		

	}
	function getPhaseIRefferals($user){
		if($user != NULL){
			$refferals = $this->getPahareIRefferals($user);

			
				foreach ($refferals as $r) {
					$rs  = $this->getPhaseIRefferals($r);

					$refferals = array_merge($refferals, $rs);
				}
			


		
		return $refferals;
		}

	}
	function getPahareIIRefferals($user){
		
		$rs =  User::whereParent2($user->id)->get();
		$stack = array();
		foreach ($rs as $r) {
			array_push($stack, $r);
		}
		return $stack;
		
	
	}

	function getPhaseIIRefferals($user){
		if($user != NULL){
			$refferals = $this->getPahareIIRefferals($user);

			
				foreach ($refferals as $r) {
					$rs  = $this->getPhaseIIRefferals($r);

					$refferals = array_merge($refferals, $rs);
				}
			


		
		return $refferals;
		}

	}
	function getRefferals(){
		
            $user = Auth::user();
			{
				$r1 = $this->getPhaseIRefferals($user);
				
				

				


			

				


				$r2= $this->getPhaseIIRefferals($user);	
				

				return View::make('userrefferals',['r1' => $r1 ,'r2' => $r2 ,'user' => $user]);

			}
		/*	
	 return Redirect::intended('./index');
		*/
	}
        

	function getUpgrade(){
            return  (new UpgradeController())->upgrade();
            
            $user = Auth::user();
			return View::make('userupgrade',['user' => $user]);
        }
	function getWithdraw(){

            
                        $user = Auth::user();

		
			$withdraws = Withdraw::where('user_id',  $user->id)->get();
			$t = 0;
			foreach ($withdraws as $w) {
				$t += $w->ammount;
 			}

			return View::make('userwithdraw',['user' => $user ,'withdraws' => $withdraws , 'total' => $t]);
		
	}
	
	
	function getSecurity(){

		return View::make('usersecurity');

	}





	function postRegister(){
                        
            $validator = Validator::make($data = Input::all(), User::$rules);
                
                
		if ($validator->fails())
		{
                    
                  
			return Redirect::back()->withErrors($validator)->withInput();
		
                        
                }
                        
                
			$name =  Input::get('name');	
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$apassword = Input::get('apassword');
			$message = "";
			
			$city = Input::get('city');
			$country = Input::get('country');
			$mobileno = Input::get('mobileno');
                        $ref = 0;
                        if(Input::has('ref'))
                            $ref = Input::get('ref');
                        
                        $this->registerUser($username,$password,$name,$email,$ref,$city,$country,$mobileno);
			
                                return Redirect::to('login')->withMessage("Sucessfully Registered");
				
			

			return View::make('register',['message' => $message,'name'  => $name,'username' => $username,'email' => $email]);
		


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
	function incrementChildCount1($username){

		User::whereUsername($username)->increment('countchild1');


	}
	function incrementChildCount2($username){

		User::whereUsername($username)->increment('countchild2');


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
		User::insert(

			array(
				'username' => $username,
				'password' => $password,
				'name' => $name,
				'email' =>$email,
				'balance' =>0,
				'earned' =>0,
				'parent1' => $parentID,
				'levelno' =>$levelno,
				'levelno2' =>$levelno2,
				'status' => $status,
				'parent2' =>$parentID2,
				'city'=>$city,
				'country'=>$country,
				'mobileno'=>$mobileno
			)
		);


	}	


	
	function getLogout(){
		
		Auth::logout();
		 return Redirect::intended('./index');
		
	}

	function postProfile(){
	
                $user = Auth::user();
                        
			$name = Input::get('name');
			$email = Input::get('email');
			
			$city = Input::get('city');
			$country = Input::get('country');
			$mobileno = Input::get('mobileno');
			
			if(empty($name) || empty($email) )
				return View::make('userprofile',['message' => "*Fields are Mandotory" ,'user' => $user]);

			$username = $user->username;
			User::where('username', $username)
			->update(array('name' => $name , 'email' => $email,'city'=>$city,'country'=>$country,'mobileno'=>$mobileno));

            return View::make('userprofile',['message' => "Update Sucessfully" ,'user' => $user]);

		
	}

	function postSecurity(){
	$user = Auth::user();	
        $password = Input::get('apassword');
                        
                        
                        $password  =(new SessionsController())->password($password);

            
                  
          $user->password = $password;
          $user->save();
                        
	return View::make('usersecurity',['message' => "Password Update Sucessfully" ]);
			

		
	}


	
	function addPayment(){

		$admin = Input::get('admin');
		$password = Input::get('password');
		if($admin != "admin" && $password != "admin")
			return "Admin username password is incorrect";

		$username = Input::get('username');
		$payment = 30;

		$status  = "Active";	
		User::where('username', $username)
			->update(array('status' => $status ,'pmAmmount' =>$payment));


		payToParents($username);	


	}
	function paytoParentI($username){

		$user = User::whereUsername($username)->first();
		$ammount = $user->pmAmmount *(60/100);
		$f = 10;

	

		$parent =User::where('id',  $user->parent1)->first();
		for($i=0;$i<7 && $parent!=NULL;$i++){
			
			$comm = $ammount * ($f/100);
			
			$preE = $parent->earned;
			$preB = $parent->balance;

			$nE = $preE + $comm;
			$nB = $preB + $comm;

			User::where('id', $parent->ID)
			->update(array('earned' => $nE ,'balance' => $nB));

			$parent =User::where('id',  $parent->parent1)->first();

			$f--;

		}


	}
		function paytoParentII($username){

		$user = User::whereUsername($username)->first();
		$ammount = $user->pmAmmount *(40/100);
		$f = 10;

	

		$parent =User::where('id',  $user->parent2)->first();
		for($i=0;$i<7 && $parent!=NULL;$i++){
			
			$comm = $ammount * ($f/100);
			
			$preE = $parent->earned;
			$preB = $parent->balance;

			$nE = $preE + $comm;
			$nB = $preB + $comm;

			User::where('username', $parent->username)
			->update(array('earned' => $nE ,'balance' => $nB));

			$parent =User::where('id',  $parent->parent2)->first();

			$f--;

		}


	}
	function paytoParentIWithAmmount($username,$ammount){

		$user = User::whereUsername($username)->first();
		$ammount = $ammount *(60/100);
		$f = 10;

	

		$parent =User::where('id',  $user->parent1)->first();
		for($i=0;$i<7 && $parent!=NULL;$i++){
			
			$comm = $ammount * ($f/100);
			
			$preE = $parent->earned;
			$preB = $parent->balance;

			$nE = $preE + $comm;
			$nB = $preB + $comm;

			User::where('id', $parent->ID)
			->update(array('earned' => $nE ,'balance' => $nB));

			$parent =User::where('id',  $parent->parent1)->first();

			$f--;

		}


	}
		function paytoParentIIWithAmmount($username,$ammount){

		$user = User::whereUsername($username)->first();
		$ammount = $ammount *(40/100);
		$f = 10;

	

		$parent =User::where('id',  $user->parent2)->first();
		for($i=0;$i<7 && $parent!=NULL;$i++){
			
			$comm = $ammount * ($f/100);
			
			$preE = $parent->earned;
			$preB = $parent->balance;

			$nE = $preE + $comm;
			$nB = $preB + $comm;

			User::where('username', $parent->username)
			->update(array('earned' => $nE ,'balance' => $nB));

			$parent =User::where('id',  $parent->parent2)->first();

			$f--;

		}


	}
        function payToParents($username){
		$this->paytoParentI($username);
		$this->paytoParentII($username);


	}
        
	function payToParentsWithAmmount($username,$ammount){
		$this->paytoParentIWithAmmount($username,$ammount);
		$this->paytoParentIIWithAmmount($username,$ammount);


	}

	

	function postWithdraw(){
           
		$user = Auth::user();
			if($user->balance > 0)
			{
                            $withdraw = new Withdraw(); 
                            $withdraw->user_id = $user->id;
                            $withdraw->ammount = $user->balance;
                            $withdraw->status = 'pending';
                            $withdraw->save();


                            $user->balance = 0;
                            $user->save();
                        
                           return Redirect::back()->withMessage("Withdraw Requested Sucessfully");   

                        }
                        
                     return Redirect::back()->withMessage("You have insufficient Balance to Withdraw");   
		}

                
                function getTransfer(){
                    return View::make('transfer');
                    
                }
                function postTransfer(){
                    $username = Input::get('username');
                    $balance = Input::get('balance');
                    
                    $fuser = User::where('username',$username);
                    if($fuser->count() == 0){
                      return  Redirect::back()->withMessage('Invalid Username');
                        
                    }
                    
                    $fuser = $fuser->first();
                    
                    $user = Auth::user();
                    
                    if($user->balance < $balance){
                      return  Redirect::back()->withMessage('You have Insufficient Balance');
                        
                        
                    }
                    
                    $user->balance = $user->balance - $balance;
                    $user->save();
                    $fuser->balance = $fuser->balance + $balance;
                    $fuser->save();
                     return  Redirect::to('/user/transfer')->withMessage('Your Balance has been Sucessfully transfered');
                     
                        
                }
	
}
