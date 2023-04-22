<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{$url}}" method="POST">
    @csrf
    <div>
        <h3>
    {{$title}}
      </h3>
    </div>
<label>Name:</label>
<input type="text" id="name" name="name">
<label>Enter your email:</label>
<input type="email" id="email" name="email">
<input type="submit">
</form>

</body>
</html>