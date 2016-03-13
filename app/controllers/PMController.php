<?php

class PMController extends \BaseController {

	function anyStatus(){
          
		$PAYEE_ACCOUNT = Input::get('PAYEE_ACCOUNT');
		$PAYMENT_AMOUNT = Input::get('PAYMENT_AMOUNT');
		$PAYMENT_UNITS = Input::get('PAYMENT_UNITS');
		$PAYMENT_BATCH_NUM  = Input::get('PAYMENT_BATCH_NUM');
		$PAYER_ACCOUNT = Input::get('PAYER_ACCOUNT');
		$TIMESTAMPGMT = Input::get('TIMESTAMPGMT');
		$order_id = Input::get('ORDER_NUM');
		$user_id = Input::get('CUST_NUM');
		$PAYMENT_ID = Input::get('PAYMENT_ID');
		$V2_HASH = Input::get('V2_HASH');
                




		
		$ammount = $PAYMENT_AMOUNT;
		
                $user = User::where('id',$user_id);
		$order = Order::where('id',$order_id);
                if($order->count() && $user->count()){
                    $order = $order->first();
                    $user = $user->first();
                    
                    $pm = new PM();
                    
                    $pm->PAYEE_ACCOUNT = $PAYEE_ACCOUNT;
                    $pm->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
                    $pm->PAYMENT_UNITS = $PAYMENT_UNITS;
                    $pm->PAYMENT_BATCH_NUM =$PAYMENT_BATCH_NUM;
                    $pm->PAYER_ACCOUNT = $PAYER_ACCOUNT;
                    $pm->TIMESTAMPGMT =$TIMESTAMPGMT;
                    $pm->order_id = $order_id;
                    $pm->user_id = $user_id;
                    $pm->PAYMENT_ID = $PAYMENT_ID;
                    
                    $pm->save();
                    
                    $order->pm_id = $pm->id;
                    $order->status = 'PAID BY PERFECTMONEY';
                    
                    if($ammount < 29){
                        $order->status = 'LESS PAID';
                    
                        
                    }
                    $order->save();
                    if($user->status != 'ACTIVE' && $ammount > 29){
                        
                        $user->status= 'ACTIVE';
                        $user->save();        
                    }
                    
                }
                
		
               

	}
	
    
    
    
        function anyCancel(){
            return Redirect::to('/shop/myorders')->withMessage("Perfect Money Payment Cancel");
	}
	function anySucessfull(){
            return Redirect::to('/shop/myorders')->withMessage("Perfect Money Payment Sucessfull");;
        }
        
        
        
        

}