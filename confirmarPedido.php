<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>

    <main>
        <form>
            <h2>nombre:<input id='nombre' type="text" name="nombre" class='input'></h2>
            <h2>Apellido:<input id='apellido' type="text" name="apellido" class='input'></h2>
            <h2>Email:<input id='email' type="email" name="email" class='input'></h2>
            <h2>celular:<input id='celular' type="text" name="celular" class='input'></h2>
            <input id='registro' type="submit" name="registro" value="Enviar">
        </form>
    </main>

    <script src="js/main.js"></script>
</body>
</html>