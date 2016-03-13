@extends('usermain')



@section('content')
 


                 <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">


                                   <button class="btn btn-success"><h1>Account Status : {{Auth::user()->status}} </h1> </button>

                                   </h2>
                                    <div class="block-heading-text">
                                       

                                    	<div class="row row-stat">
                            <div class="col-md-4">
                                <div class="panel panel-success-alt noborder">
                                    <div class="panel-heading noborder">
                                        <div style="display: none;" class="panel-btns">
                                            <a data-original-title="Close Panel" href="" class="panel-close tooltips" data-toggle="tooltip" title=""><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-dollar"></i></div>
                                        <div class="media-body">
                                            <p class="md-title nomargin">Total's Earnings</p>
                                            <h1 class="mt5">${{Auth::user()->earning}}</h1>
                                           
                                        </div><!-- media-body -->
                                        
                                         
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                            
                            <div class="col-md-4">
                                <div class="panel panel-primary noborder">
                                    <div class="panel-heading noborder">
                                        <div style="display: none;" class="panel-btns">
                                            <a data-original-title="Close Panel" href="" class="panel-close tooltips" data-toggle="tooltip" title=""><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-users"></i></div>
                                        <div class="media-body">
                                            <p class="md-title nomargin">Total Refferals</p>
                                            <h1 class="mt5">{{Auth::user()->countPhaseIRefferals()}}</h1>
                                              <p>(PHASE I)</p>

                                        </div><!-- media-body -->
                                        <hr>
                                        <div class="clearfix mt20">
                                          <div class="media-body">
                                            	
                                            <h1 class="mt5">{{Auth::user()->countPhaseIIRefferals()}}</h1>
                                              <p>(PHASE II)</p>

                                        </div>
                                           
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                            
                            <div class="col-md-4">
                                <div class="panel panel-dark noborder">
                                    <div class="panel-heading noborder">
                                        <div style="display: none;" class="panel-btns">
                                            <a data-original-title="Close Panel" href="" class="panel-close tooltips" data-toggle="tooltip" data-placement="left" title=""><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                                        <div class="media-body">
                                            <p class="md-title nomargin">Total Balance Available</p>
                                            <h1 class="mt5">${{Auth::user()->balance}}</h1>
                                           
                                        </div><!-- media-body -->
                                        <hr>
                                       <div style="display: none;" class="panel-btns">
                                            <a data-original-title="Close Panel" href="" class="panel-close tooltips" data-toggle="tooltip" data-placement="left" title=""><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                                        <div class="media-body">
                                            <p class="md-title nomargin">Purchasing Balance</p>
                                            <h1 class="mt5">${{Auth::user()->pbalance}}</h1>
                                           
                                        </div>
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                        </div>
                                      
                                    </div>

                    <!-- ./page content holder -->
                
@stop
