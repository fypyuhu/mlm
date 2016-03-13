@extends('usermain')



@section('content')


<div class="page-content-wrap bg-img-1">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                                
                                <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">


                                   <button  class="btn btn-success"><h1>Account Status : {{$user->status}} </h1> </button>


                                   </h2>
                                    <h2 class="heading-underline">
<?php if($user->status == "Active"){ ?>
          <button   type="" name="" class="btn btn-success"><h1>You are Already a Active User</h1> </button>
        <?php }else {?>
        
                                      <form name="perfect" action="https://perfectmoney.is/api/step1.asp" method="POST">
        <input type="hidden" name="PAYEE_ACCOUNT" value="U8850761">
<input type="hidden" name="PAYEE_NAME" value="MLM NETWORK">

<input type='hidden' name='PAYMENT_ID' value='<?=time() ?>'>

<input type="hidden" name="PAYMENT_UNITS" value="USD">
<input type="hidden" name="STATUS_URL" value="http://laravel.hilaalbanking.com/user/perfectMoneyStatus">
<input type="hidden" name="PAYMENT_URL" value="http://laravel.hilaalbanking.com/user/payementSucessfull">
<input type="hidden" name="PAYMENT_URL_METHOD" value="POST">
<input type="hidden" name="NOPAYMENT_URL" value="http://laravel.hilaalbanking.com/user/payementCancel">
<input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST">
<input type="hidden" name="SUGGESTED_MEMO" value="MLM username : {{$user->username}}">
<input type="hidden" name="BAGGAGE_FIELDS" value="ORDER_NUM CUST_NUM">
    <input type="hidden" name="ORDER_NUM" value="1">
    
    <input type="hidden" name="CUST_NUM" value="{{$user->username}}">
    <input name="PAYMENT_AMOUNT"  type=hidden value="20.0"/>
      

     <button   type="submit" name="PAYMENT_METHOD" class="btn btn-success"><h1>Click to Upgrade Using Perfect Money</h1> </button>
  
    </form>
      <?php }?>

                                  

                                   </h2>
                                 
                                    <div class="block-heading-text">
                                       

                                    	<div class="row row-stat">
                  



                    
                                    </div>
                               <!-- <div class="block this-animate animated fadeInLeft this-animated" data-animate="fadeInLeft">
                                    <img src="assets/pm.png" class="img-responsive">
                                </div>-->
                            </div>
                           
                        </div>
                        
                        
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
@stop