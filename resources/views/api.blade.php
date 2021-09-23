<h2>List of users</h2>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Avatar</th>
    </tr>
    @foreach($collection as $data)
    <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['email']}}</td>
        <td>{{$data['first_name']}}</td>
        <td>{{$data['last_name']}}</td>
        <td><img src="{{$data['avatar']}}" alt=""></td>
    </tr>
    @endforeach
</table>