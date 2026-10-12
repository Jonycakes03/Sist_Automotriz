<?php
    include("Controlador.php");
    $Con=Conectar();
    $SQL= "SELECT * FROM multas;";
    $ResultSet= Ejecutar($Con, $SQL);

    //Procesar();
    $Funcion= mysqli_set_charset($Con, "utf8");
    print_r($Funcion);
    Desconectar($Con);

?>