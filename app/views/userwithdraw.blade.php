@extends('usermain')



@section('content')

                                <div class="block-heading block-heading-centralized">
                                    
                                    <h2 class="heading-underline">


                                   <button  class="btn btn-success"><h1>Total Withdrawn : ${{$total}} </h1> </button>

                                   </h2>
                                   
                                    <h2 class="heading-underline">


                                   <button  class="btn btn-success"><h1>Balance Available : ${{Auth::user()->balance}} </h1> </button>

                                   </h2>
                                   <form method="post">
                                         <button  class="btn btn-success"><h1>Click Here to Request Withdraw</h1> </button>
                                   </form>  
                   <h1>Withdraw History</h1>
                                    <table class="table mb30">

                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Date</th>
                                                  <th>Ammount</th>
                                                  <th>Status</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($withdraws as $w)
                             
                                                  <tr>
                                                  <td>{{$w->id}}</td>
                                                  <td>{{$w->timestamp}}</td>
                                                  <td>{{$w->ammount}}</td>
                                                  <td>{{$w->status}}</td>
                                                  
                                                </tr>
                                              
                                              @endforeach
                                                
                                                 
                                              </tbody>
                                          </table>
                   
                                    
                        </div>
                        
                

@stop