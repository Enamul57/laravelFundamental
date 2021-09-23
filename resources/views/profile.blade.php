<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script> -->
    <title>Document</title>

</head>
<body>
<h3>Profile Page</h3>

<h4>Name: {{$user['name']}}</h4>
<h4>Email:{{$user['email']}} </h4>
<h4>Phone: {{session('store_data')->phone}}</h4>

<a href="logout">Logout</a>
</body>
</html>
