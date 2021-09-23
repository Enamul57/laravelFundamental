<h3>Update member information</h3>
<!-- <form action="{{'update/'.$member['id']}}" method="POST"> -->
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$member['id']}}">
    <input type="text" name='user'  placeholder='update the name'><br/>
    <input type="email" name='email' placeholder='update the email'><br/>
    <input type="text" name='address' placeholder='update the address'><br/>
    <button type="submit">Update</button>
</form>