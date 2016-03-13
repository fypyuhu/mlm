@extends('usermain')



@section('content')
<h1>Refferals</h1>

                                <div class="row">
                            <div class="col-md-6">
                              <h5 class="lg-title mb5">Phase I</h5>
                              <p class="mb20">Upto 7 levels you may see
                              <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $c = 0;?>
                                @foreach ($r1 as $r)
                               <?php if($r->levelno2-$user->levelno2 <=7){?>
                                    <tr>
                                    <td>{{$r->id}}</td>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->username}}</td>
                                    <td>{{"". $r->levelno - $user->levelno}}</td>
                                    <td>{{$r->status}}</td>
                                    
                                  </tr>
                                <?php }?>
                                @endforeach
                                 
                                </tbody>
                              </table>
                              </div><!-- table-responsive -->
                            </div><!-- col-md-6 -->
                            
                            <div class="col-md-6">
                              <h5 class="lg-title mb5">Phase II</h5>
                              <p class="mb20">Upto 7 levels you may see</p>
                              <div class="table-responsive">
                              <table class="table table-striped mb30">
                                <thead>
                                  <tr>
                                     <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $c=0;?>
                                    @foreach ($r2 as $r)
                                    <?php if($r->levelno2-$user->levelno2 <=7){?>
                                    <tr>
                                    <td>{{$r->id}}</td>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->username}}</td>
                                    <td>{{$r->levelno2-$user->levelno2}}</td>
                                    <td>{{$r->status}}</td>
                                   
                                  </tr>
                                   <?php }?>
                                @endforeach
                                </tbody>
                              </table>
                              </div><!-- table-responsive -->
                            </div><!-- col-md-6 -->
                            
                          </div>



@stop