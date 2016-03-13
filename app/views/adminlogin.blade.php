@extends('adminmain')





@section('content')

<div class="page-content-wrap bg-img-1">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        <form method="post">
                        <div class="row">
                            <div class="col-md-8 this-animate animated fadeInLeft this-animated" data-animate="fadeInLeft">
                                
                                <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">Login Here</h2>
                                    <div class="block-heading-text">
                                    
                                   	Just type your username and password and Logged in
	                                   	<div class="form-group">
	                                            <label style="float:left;">Username <span class="text-hightlight">*</span></label>
	                                            <input name="username" style="float:none; width:80%;" class="form-control" type="text">
	                                    </div>
                                        <div class="form-group">
                                            <label style="float:left;">Password <span class="text-hightlight">*</span></label>
                                            <input name="password" style="float:none; width:80%;" class="form-control" type="password">
                                        </div>
                                        <div class="form-group">
                                             	
                                          <button type="submit" style=" width:100%;" class="btn btn-primary btn-lg pull-right">Log in</button>
                                        </div>
                                   </div>
                        </form>
                                </div>
                               <!-- <div class="block this-animate animated fadeInLeft this-animated" data-animate="fadeInLeft">
                                    <img src="assets/pm.png" class="img-responsive">
                                </div>-->
                            </div>
                           <div class="col-md-4 this-animate text-center animated fadeInRight this-animated" data-animate="fadeInRight">
                                <img src="assets/mlm.jpg	" class="img-responsive-mobile">
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <!-- ./page content holder -->
                </div>

@stop