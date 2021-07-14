<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $header = "From: stivenjhojan011@gmail.com";

    mail("stivenjhojan011@gmail.com", "PHP", "PHP", $header);
?>