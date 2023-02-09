<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/api/filtrado" method="GET">
    <label for="opciones">Filtrado Stock</label>
    <select name="opciones" id="opciones">
        <option value="mayor">Mayor que 5</option>
        <option value="menor">Menor que 5</option>
    </select>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>