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
