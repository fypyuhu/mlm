@extends('adminmain')





@section('content')


<table border="2" >
	<tr>
	<th>ID</th> 
        <th>userID</th>
        <th>username</th> 
        <th>name</th> 
        <th>Mobile</th> 
        <th>Product Id</th>  
        <th>Product Tilte</th> 
        <th>Product Details</th> 
        <th>Product Price</th> 
        <th>Reciever Name</th>
        <th>Reciever Address</th>
        <th>Reciever City</th>
        <th>Reciever Country</th> 
        <th>Reciever Mobile</th>
        <th>Order Date</th>
        <th>Status</th> 
        <th>Action</th> 
	</tr>
	@foreach ($orders as $o)
	<tr>
	 <?php 
            
            $user = $o->user()->first();
            $product = $o->product()->first();
            
         ?>
          		<th>{{$o->id}}</th> 
                        <th>{{$user->id}}</th> 
			<th>{{$user->username}}</th>
                        <th>{{$user->name}}</th>
			<th>{{$user->mobileno}}</th>
			<th>{{$product->id}}</th>
			<th>{{$product->title}}</th>
			<th>{{$product->detials}}</th>
			<th>{{$product->price}}</th>
			<th>{{@$o->rname}}</th>
			<th>{{@$o->address}}</th>
			<th>{{@$o->city}}</th>
			<th>{{@$o->country}}</th>
			<th>{{@$o->mobile}}</th>
			<th>{{@$o->date}}</th>
			<th>{{@$o->status}}</th>
			
                        
	  <th>
              @if($o->status == 'ORDERED MANUALLY')
              <a href='/admin/confirmmanually?id={{$o->id}}' >Confirm Manually Payment</a>
              @endif
              @if($o->status == 'PAID MANUALLY' || $o->status == 'PAID BY PERFECTMONEY' || $o->status == 'PAID')
              <a href='/admin/fakepayment?id={{$o->id}}' >This is fake Payment</a>
              
              <a href='/admin/confirm?id={{$o->id}}' >Confirm</a>
              
              @endif
              
	</tr>
     @endforeach	
</table>


@stop