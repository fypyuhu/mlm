<?php

class AdminController extends BaseController{
 public function __construct()
    {
        
       $this->beforeFilter('admin');
        
        
        
    
    }	
    
	function  anyGivepayment(){
	$username = Input::get('username');
        if(User::where('username',$username)->count()){
                $userC = new	UsersController();

		$userC->payToParents($username);
		return Redirect::back()->withMessage("Commition has been given ");
        }
        	return Redirect::back()->withMessage("Invalid Username ");
       
        }
	function postWithdraws(){
			$ID = Input::get('withdrawID');
			$status = Input::get('status');

				Withdraw::where('id', $ID)
				->update(array('status' => $status));
		
			return $this->getWithdraws();
	}
	function postUsers(){
			$userID = Input::get('userID');
			$balance = Input::get('balance');
			$earned = Input::get('earned');
		
			$status = Input::get('status');

			User::where('id', $userID)
			->update(array('balance' => $balance , 'earned' => $earned , 'status' => $status));


			return Redirect::back()->withMessage("User Updated Sucessfully");

	}
	function getUsers(){
			$users = User::all();
				return View::make('adminusers',['users'=>$users]);
		

	}
	function getWithdraws(){
			$Withdraws = Withdraw::all();
				return View::make('adminwithdraws',['withdraws'=>$Withdraws]);

	}

	function getIndex(){
				return View::make('adminindex');
	}

        function getOrders(){
			$orders = Order::all();
				return View::make('adminorders',['orders'=>$orders]);
                
                                
             
        
        }
        function getConfirmmanually(){
            $id = Input::get('id');
           $order =  Order::where('id',$id)->first();
           $order->status = 'PAID MANUALLY';
           $order->save();
           
           return Redirect::back()->withMessage("Status Updated");
            
        }
        function getConfirm(){
            $id = Input::get('id');
           $order =  Order::where('id',$id)->first();
           
           $order->status = 'PAYMENT CONFIRMED';
           $order->save();
                    
                    $uc = new UsersController();
           $user = $order->user()->first();         
                    $uc->payToParents($user->username);
		   
           return Redirect::back()->withMessage("Status Updated");
            
        }
        function getFakepayment(){
            $id = Input::get('id');
           $order =  Order::where('id',$id)->first();
           $order->status = 'FAKE PAYMENT';
           $order->save();
           
           return Redirect::back()->withMessage("Status Updated");
            
        }
        function postOrders(){
                    if(Input::get('btn') =='delivered')
                    {
                      $this->deliveredOrder();
                    return $this->getOrders();    
                    }
                    if(Input::get('btn') =='cancel')
                    {
                        
                      $this->cancelOrder();
                    return $this->getOrders();
                    
                    }
                    
                                
        
        }
        
        function deliveredOrder(){
            $userId = Input::get('userId');
            $id = Input::get('id');
            $price = Input::get('price');
            
            $this->incPurcahseBalanceToUser($userId, $price);
            
            
            Order::where('id',$id)->update([
                'status' =>'Delvered'
                
            ]);
        }
        function cancelOrder(){
            $id = Input::get('id');
            Order::where('id',$id)->update([
                'status' =>'Canceled'
                
            ]);
            
        }
        function incPurcahseBalanceToUser($userId,$price){
            $user = User::where('ID',$userId);
            $userp = $user->first();
           $purchasingBalance =  $userp->pbalance;
            $purchasingBalance += $price;
           $user->update(['pbalance' => $purchasingBalance]);
           
            $userC = new	UserController();
               
           if($purchasingBalance >= 3000){
                
                if($purchasingBalance-$price <3000)
                    $userC->payToParentsWithAmmount($userp->username, $purchasingBalance);
                else 
                     $userC->payToParentsWithAmmount($userp->username, $price);
                
                
           }
           
        }
}

?> 