@extends('adminmain')





@section('content')
	<table>
	<tr>
	<form action="givepayment" method="post" >
		<th>GIVE Commitio TO PARENTS :</th><th><input type="text" name="username" placeholder="Enter the Username"/></th><th><button type="submit">GIVE</button></th>
	</form>
	</tr>
	

	</table>


<table border="2" >
	<tr>
            <th>ID</th> 
            <th>username</th>
            <th>email</th> 
            <th>name</th> 
            <th>parent1</th> 
            <th>parent2</th> 
            <th>Purchasing balance</th>
            <th>balance</th> 
            <th>earned</th> 
            <th>status</th> 
            <th>Action</th> 
        </tr>
	@foreach ($users as $user)
	<tr>
	 
          <form method="post">                    
		<input type="hidden" name="userID" value="{{$user->id}}" />
			<th>{{@$user->id}}</th> 
			<th>{{@$user->username}}</th>
			<th>{{@$user->email}}</th>
	 		<th>{{@$user->name}}</th>
			  <th>{{@$user->parent1}}</th> 
			  <th>{{@$user->parent2}}</th>  
			  <th>{{@$user->pbalance}} </th> 
                          <th><input type="text" name="balance" value="{{@$user->balance}}" /></th> 
			  <th><input type="text" name="earned" value="{{@$user->earned}}" /></th> 
			  <th><input type="text" name="status" value="{{@$user->status}}" /></th> 


	  <th><button type="submit">UPDATE</button></th> 
	  </form>
	</tr>
     @endforeach	
</table>


@stop