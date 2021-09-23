<h2>Login Form</h2>

<form action="user" method='POST'>
    @csrf
    <input type="text" placeholder='user name' name='user'><br/>
    <input type="password" placeholder='password' name='password'><br/>
    <button type='submit'>Login</button>
</form>