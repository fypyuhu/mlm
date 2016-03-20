@extends('usermain')



@section('content')
<h1>Profile</h1>

  <label style="color:red;">{{@$message}}</label>
       <h4>Your refferal Link: <label style="color:green;">{{URL::to('/')}}?ref={{@$user->username}}</label></h4>
                           <div class="row row-stat">
                                        <form method="post">
                                            <div class="col-sm-6">
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="name" value="{{@$user->name}}" class="form-control" placeholder="Enter your name" type="text">
                                                </div><!-- input-group -->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="email" value="{{@$user->email}}" class="form-control" placeholder="Enter your Email" type="text">
                                                </div><!-- input-group -->
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="city" value="{{@$user->city}}" class="form-control" placeholder="Enter your city" type="text">
                                                </div><!-- input-group -->
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="country" value="{{@$user->country}}" class="form-control" placeholder="Enter your country" type="text">
                                                </div><!-- input-group -->
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="mobileno" value="{{@$user->mobileno}}" class="form-control" placeholder="Enter your mobileno" type="text">
                                                </div><!-- input-group -->
                                            </div>
                                            
                                            <button type="submit" style="width: 97% " class="btn btn-primary btn-lg  center-block">Update Profile</button>

                                    </form>
                    
                                    </div>



@stop