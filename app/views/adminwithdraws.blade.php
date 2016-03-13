@extends('adminmain')





@section('content')

<table>
	<tr>
		<th>ID</th><th>Date Time</th><th>UserID</th><th>Ammount</th><th>Status</th><th>Action</th>
	</tr>
	@foreach($withdraws as $withdraw)
	
	<tr>
	
		<form method="post">

	<input type="hidden" name="withdrawID" value="{{$withdraw->id}}">
			<th>{{$withdraw->id}}</th>
			<th>{{$withdraw->timestamp}}</th>
			<th>{{$withdraw->user_id}}</th>
			<th>{{$withdraw->ammount}}</th>
			<th><input type="text" name="status" value="{{$withdraw->status}}" /></th>
			<th><button type="submit">UPDATE</button></th>
		</form>
	</tr>
	
	@endforeach

</table>

@stop