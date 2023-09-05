<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="/contacto" method="POST">
        <label for="correo">Correo:</label>
        <input type="email" name="correo"><br>
        <label for="comentario">Comentario: </label>
        <textarea name="comentario" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
</body>
</html>