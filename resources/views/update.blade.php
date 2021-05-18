<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('user.update', $user->id)}}">
    @csrf
    Name: <input type="text" value="{{$user->name}}" name="name">
    <br>
    Email: <input type="text" name="email" value="{{$user->email}}">
    <br>
    Password: <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
</body>
</html>
