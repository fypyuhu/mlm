@extends('usermain')



@section('content')

 <div class="row">
        <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
          <img data-holder-rendered="true" src="{{$product->img}}" style="height: 400px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
          
          <div class="caption">
              <form method="post">
                  
                  <input type="hidden" name="id" value="{{$product->id}}" />
            <h3 id="thumbnail-label">{{$product->title}}<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
            <p>{{$product->details}}</p>
            <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="revieverName" value="" class="form-control" placeholder="Enter Reciever Name" type="text">
             </div>
           
            
            <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="sipingaddress" value="" class="form-control" placeholder="Enter your Shiping Address" type="text">
             </div>
            <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="country" value="" class="form-control" placeholder="Enter your Shiping City" type="text">
             </div>
            <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="city" value="" class="form-control" placeholder="Enter your Shiping Country" type="text">
             </div>
            <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="mobile" value="" class="form-control" placeholder="Enter your Mobile Number" type="text">
             </div>
              <p><button type="submit"  style=" width:100%;" class="btn btn-primary btn-lg pull-right">Place Order</button>
                <br><br>
            </p>
           
              </form>
          </div>
        </div>
      </div>
  </div>
    




@stop