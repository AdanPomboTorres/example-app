<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    <form action="/api/productos" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto">
        <br> <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion">
        <br> <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" placeholder="precio">
        <br> <br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock" placeholder="stock">
        <br> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>