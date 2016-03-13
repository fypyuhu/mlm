<?php

class UpgradeController extends BaseController{
    function upgrade(){
    	$user  = Auth::user();	
        $products = Product::all();	
                    return View::make('shop',['user' => $user,'products' => $products]);
                
                        
                
                 
                return Redirect::intended('./index');
	}

}

?> 