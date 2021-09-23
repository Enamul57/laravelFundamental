
<h3>Login Form</h3>
@if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif
<form action="access" method= 'POST'>
    @csrf
    <span style='color:red'>@error('user'){{$message}}@enderror</span><br/>
    <label for="User">Username</label>
    <input type="text" name='user' placeholder='Enter your user name'></br>
    <span style='color:red'>@error('password'){{$message}}@enderror</span><br/>
    <label for="password">Password</label>
     <input type="password" name='password'  placeholder='Enter your password'></br>
     <button type='submit'>Login</button>
</form>