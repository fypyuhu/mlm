@extends('usermain')

        
@section('content')

<label style="color:red;">{{@$message}}</label>
 <h1>Password Update</h1>
                    
                  

                                            <form  method="post">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                                    <input name="apassword" class="form-control" placeholder="Re-Enter new Password" type="Password">
                                </div><!-- input-group -->
                            </div>
                            
                            
                        </div><!-- row -->
                        
                       
                    <button style=" width:100%;" class="btn btn-primary btn-lg pull-right">Change Password</button>

                    </form>

                    
                      

@stop