<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de usuario</title>
</head>
<body>
    <h1>Hola: {{$nombre}}
        @if ($tipo == "vip")
        <br>
        <span style="color: green">Eres VIP, Ole!! 👑</span>
        @endif
        @if ($tipo == "normal")
        <br>
        <span style="color: red">Eres pobre!! 💀</span>
        @endif

    </h1>
    <h2>Email: {{$email}}</h2>
    <h3>Hobbies</h3>
    <ul>
        @foreach ($hobbies as $h)
            <li>{{$h}}</li>
        @endforeach
    </ul>
    
</body>
</html>