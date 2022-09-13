<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
    <title>Show</title>
</head>
<body>
    <h1>users profile id is {{$id}}</h1>
    @foreach($myarray as $item)
        <h2> user {{$item->name}}</h2>
        <h2> user {{$item->email}}</h2>
        <h2> user {{$item->password}}</h2>


    @endforeach
</body>
</html>
