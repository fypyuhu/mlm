@extends('usermain')

        
@section('content')

<label style="color:red;">@include('partials.error.list')</label>
 <h1>Transfer Balance</h1>
                    
                  

                                            <form action='/user/transfer'  method="post">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                                    <input name="username" class="form-control" placeholder="Enter the Username to transfer" type="text" required=""/>
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                                    <input name="balance" class="form-control" placeholder="Enter the Balance to transfer" type="text" required=""/>
                                </div><!-- input-group -->
                            </div>
                            
                        </div><!-- row -->
                        
                       
                    <button style=" width:100%;" class="btn btn-primary btn-lg pull-right">Transfer Balance</button>

                    </form>

                    
                      

@stop