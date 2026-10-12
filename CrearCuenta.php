<?php

$username = $_POST['username'];
$password = $_POST['password'];
function generarToken($longitud = 16) {
    return bin2hex(random_bytes($longitud / 2));
}

$token = generarToken();

include("controlador.php");
$Con = Conectar();
$SQL= "INSERT INTO cuentas (Username, password, Tipo, Status, Bloqueo, Intentos, Token)
Values ('$username','$password','U',1,0,0,'$token');";

$ResultSet = Ejecutar($Con, $SQL);
if($ResultSet==1){
    //print("instruccion Ejecutada");

    $Manejador=fopen("llave$username.txt","w");
    fwrite($Manejador,"$token");
    fclose($Manejador);

    $nombre_archivo="llave$username.txt";

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
    header('Content-Length: ' . filesize($nombre_archivo));
    readfile($nombre_archivo);

    // Eliminar el archivo del servidor después de la descarga
    unlink($nombre_archivo);
}
else{
    print(mysqli_error($Con));
}
//REGRESAR A INICIAR SESION
//

Procesar();

Desconectar($Con);

//header("Location: Front_Ingresar.html");



?>