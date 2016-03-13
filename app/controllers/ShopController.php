<?php

class ShopController extends BaseController{
   
      public function __construct()
    {
        
        $this->beforeFilter('auth');
        
        
        
    
    }
    function getProduct(){
     
        $user = Auth::user();

                    $id = Input::get('id');

                    $product = Product::where('id',$id)->first();
                    return View::make('shopaProduct',['user' => $user,'product'=>$product]);

        
                
    }
    function postProduct(){
            $user  = Auth::user();
                    $product_id = Input::get('id');
                    $user_id  = $user->id;
                    $address = Input::get('sipingaddress');
                    $country = Input::get('country');
                    $city = Input::get('city');
                    $mobile= Input::get('mobile');
                    $rname = Input::get('revieverName');
                    
                    if(empty($address) || empty($country) || empty($city) || empty($mobile) || empty($rname))
                        return Redirect::to("shop/product?id=".$product_id)->withMessage('All fields are Manadtory');
                    
                    $order = new Order();
                    
                        $order->user_id = $user_id;
                        $order->product_id = $product_id;
                        $order->address = $address;
                        $order->city = $city;
                        $order->country = $country;
                        $order->mobile = $mobile;
                        $order->date = date('Y-m-d');
                        $order->rname = $rname;
                        $order->status= 'PAYMENT PENDING';
                        $order->save();
                    
                    return Redirect::to('/shop/myorders')->withMessage('Order has been placed please make payment to Active');

        
    }
    function getMyorders(){
      $user = Auth::user();
                
                    $orders = Order::where('user_id',$user->id)->get();
                    return View::make('myorders',['user'=>$user , 'orders' => $orders]);
                    
                    
        
        
    }
    function getManualorder(){
        $order_id = Input::get('id');
        $order = Order::where('id',$order_id)->where('user_id',Auth::user()->id);
        
        if($order->count()){
            $order = $order->first();
            
            $order->status = 'ORDERED MANUALLY';
            $order->save();
            
            return Redirect::to('/shop/myorders')->withMessage("Your order has been considered Manaully Payment");
        }
        
    }
}

?> 