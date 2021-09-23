<!-- <h2>Add member</h2>
@if(session('user_key'))
<h3>{{session('user_key')}} has been added successfully</h3>
@endif
<form action="adduser" method ='POST' enctype= 'multipart/form-data'>
    @csrf
    <input type="text" name='user' placeholder='your username'><br/>
    <input type="email" name='email' placeholder='add your email'><br/>
    <input type="password" name='password' placeholder='enter password'><br/>
    <input type="file" name='file' ><br/>
    <button type='submit'>Submit</button>
</form> -->
<h2>Add your member</h2>
@if(session('user_key'))
<h3 style='color:green'>{{session('user_key')}} has added successfully</h3>
@endif
<form action="adduser" method='POST'>
    @csrf
    <input type="text" name='user' placeholder='Enter your username'><br/>
    <input type="email" name='email' placeholder='Enter your email'><br/>
    <input type="text" name='address' placeholder='Enter your address'><br/>
    <input type="password" name="password" placeholder='Enter your password'><br/>
    <button type="submit">Submit</button>
</form>
