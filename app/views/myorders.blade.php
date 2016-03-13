@extends('usermain')



@section('content')


                               
                                            <h1>Order History</h1>
                                            <table class="table mb30">

                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Date</th>
                                                  <th>Product ID</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($orders as $o)
                             
                                                  <tr>
                                                  <td>{{$o->id}}</td>
                                                  <td>{{$o->date}}</td>
                                                  <td>{{$o->product_id}}</td>
                                                   <td>{{$o->status}}</td>
                                                   <td>
                                                       @if($o->status == 'PAYMENT PENDING')
                                                       <a type="button" href="/shop/manualorder?id={{$o->id}}" class="btn btn-primary">Manual</a>

                                                        @include('partials.shop.pm',['order_id'=>$o->id, 'ammount' => '0.1'])
                                                       @endif
                                                   </td>
                                                   
                                                  
                                                </tr>
                                              
                                              @endforeach
                                                
                                                 
                                              </tbody>
                                          </table>


                    
                    @stop