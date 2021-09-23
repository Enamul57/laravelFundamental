<h2>Heres our member list</h2>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>operation</th>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href="{{'delete/'.$member['id']}}">Delete</a>  <a href="{{'edit/'.$member['id']}}">Edit</a></td>
    </tr>
    @endforeach
</table>

<span>{{$members->links()}}</span>
<a href="logout">Logout</a>
<style>
    .w-5{
        display:none;
    }
</style>