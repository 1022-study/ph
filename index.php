<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">
        Nombre: <input type="text" name="nombre">
        Correo: <input type="text" name="correo">
        <input type="submit">
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $header = "From: curso602@gmail.com";

        $mail = mail($correo, "CORREO ENVIADO DESDE PHP", "CORREO ENVIADO DESDE PHP", $header);


    ?>
</body>

</html>
