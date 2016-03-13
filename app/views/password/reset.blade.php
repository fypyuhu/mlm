	                              @include('partials.error.list')

<form action="{{ action('RemindersController@postReset') }}" method="POST">
    
    <input type="hidden" name="token" value="{{ $token }}">
    <label>Email :</label>
    <input type="email" name="email">
    <label>Password :</label>
    <input type="password" name="password">
    <label>Confirm Password :</label>

    <input type="password" name="password_confirmation">
    <input type="submit" value="Reset Password">
</form>
@if(Session::has('message'))
<?php $message = Session::get("message");?>
    @if(is_array($message))
        <script>alert('@foreach($message as $m) {{$m}} @endforeach')</script>"
    @else
    
        <script>alert('{{$message}}')</script>"

    @endif



    <?php Session::put(['message',""]); ?>
   
@endif