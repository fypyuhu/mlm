 <p>
     
     
     
     
     
     
     
     
                        <form name="perfect" action="https://perfectmoney.is/api/step1.asp" method="POST">
        <input type="hidden" name="PAYEE_ACCOUNT" value="U10615036">
            <input type="hidden" name="PAYEE_NAME" value="MLM NETWORK">
            <input type="hidden" name="PASSPHRASE" value="ZK37977GSTECITIpDfsnQTSto">

            <input type='hidden' name='PAYMENT_ID' value='<?=time() ?>'>

            <input type="hidden" name="PAYMENT_UNITS" value="USD">
            <input type="hidden" name="STATUS_URL" value="{{URL::to('/')}}/pm/status">
            <input type="hidden" name="PAYMENT_URL" value="{{URL::to('/')}}/pm/sucessfull">
            <input type="hidden" name="PAYMENT_URL_METHOD" value="POST">
            <input type="hidden" name="NOPAYMENT_URL" value="{{URL::to('/')}}/pm/cancel">
            <input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST">
            <input type="hidden" name="SUGGESTED_MEMO" value="MLM username : {{Auth::user()->username}}">
            <input type="hidden" name="BAGGAGE_FIELDS" value="ORDER_NUM CUST_NUM">
                <input type="hidden" name="ORDER_NUM" value="{{$order_id}}">

                <input type="hidden" name="CUST_NUM" value="{{Auth::user()->id}}">
                <input name="PAYMENT_AMOUNT"  type=hidden value="{{$ammount}}"/>


                 <button   type="submit" name="PAYMENT_METHOD" class="btn btn-success inline ">Pay with Perfect Money </button>
  
    </form>
    
     
            
 </p>