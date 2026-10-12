<?php
    include("Controlador.php");

    $token = $_FILES['token']['name'];
    $tipo_archivo = $_FILES['token']['type'];
    $tamano_archivo = $_FILES['token']['size'];
    //$carpeta_destino = "./";

    $username=$_POST['username'];
    $password=$_POST['password'];

    //print($UserName."---------".$Pwd);
    $Con=Conectar();
    $SQL="SELECT * FROM cuentas WHERE username= '$username';";

    $ResultSet=Ejecutar($Con, $SQL);
    $NFila=mysqli_num_rows(result: $ResultSet);
	
//compruebo si las características del archivo son las que deseo
if (!(strpos($tipo_archivo, "text/plain") && ($tamano_archivo < 100000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
   	if (move_uploaded_file($_FILES['token']['tmp_name'],  $token)){
      		echo "El archivo ha sido cargado correctamente.";
              if ($NFila==1){
                 print("El Usuario existe");
                 $DatosCuenta=mysqli_fetch_row($ResultSet);
                 if($password==$DatosCuenta[1]){
                    print("Contraseña correcta");
                    $Manejador = fopen("$token", "r");
                    $token = fgets($Manejador);
                    fclose($Manejador);
                    if($token== $DatosCuenta[6]){
                     if($DatosCuenta[3]==1){
                         print("Cuenta Activa");
                             if($DatosCuenta[4]==0){
                           print("Cuenta no bloqueada");
                             $SQL3="UPDATE cuentas SET intentos=0 WHERE UserName= '$UserName';";
                             $ResultSet3=Ejecutar($Con, $SQL3);
                             unlink($ruta_archivo);
         
                             // print("Llevas ".)
                             if ($DatosCuenta[5]==3){
                                 $SQL4="UPDATE cuentas SET Bloqueo = 1 WHERE UserName= '$UserName';";
                                 $ResultSet4=Ejecutar($Con, $SQL4);
                             
                                 
                             }else{
                                 if($DatosCuenta[2]=='A'){
                                     print("Entrar como Admin");
                                 }else{
                                 print("Entrar como Usuario");
                                 }
         
                             }
                             }else{
                            print("Cuenta Bloqueada");
                             }
         
                             
                         
                         }else{
                         print("Cuenta INactiva");
                         }
                     }else{
                         print("Usuario, contraseña o llave incorrecta");
                     }
                     }else{
                     print("Contraseña incorrecta");
                     $SQL1="UPDATE cuentas SET intentos=intentos+1 WHERE UserName= '$UserName';";
                     $ResultSet1=Ejecutar($Con, $SQL1);
                    // print("Llevas ".)
                     if ($DatosCuenta[5]==3){
                         $SQL2="UPDATE cuentas SET bloqueo=bloqueo+1 WHERE UserName= '$UserName';";
                         $ResultSet2=Ejecutar($Con, $SQL2);
                         print("Cuenta bloqueada");
                     }
                 }
             
             
             }else{
                 //print("El Usuario no existe");
             }
   	}else{
      		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
   	}
}



    /*if ($tipo_archivo != "text/plain" || $tamano_archivo > 100000) {
        //$_SESSION['error'] = 
        Print("La extensión o el tamaño de los archivos no es correcta.");
        header("Location: Front_Ingresar.html");
        exit;
    } else {
    //print($NFila);
    //$ruta_archivo = $carpeta_destino . $token;
    if (move_uploaded_file($_FILES['token']['tmp_name'], $ruta_archivo)) {
    if ($NFila==1){
       // print("El Usuario existe");
        $DatosCuenta=mysqli_fetch_row($ResultSet);
        if($password==$DatosCuenta[1]){
           //print("Contraseña correcta");
           $Manejador = fopen("$token", "r");
           $token = fgets($Manejador);
           fclose($Manejador);
           if($token== $DatosCuenta[6]){
            if($DatosCuenta[3]==1){
                print("Cuenta Activa");
                    if($DatosCuenta[4]==0){
                  // print("Cuenta no bloqueada");
                    $SQL3="UPDATE cuentas SET intentos=0 WHERE UserName= '$UserName';";
                    $ResultSet3=Ejecutar($Con, $SQL3);
                    unlink($ruta_archivo);

                    // print("Llevas ".)
                    if ($DatosCuenta[5]==3){
                        $SQL4="UPDATE cuentas SET Bloqueo = 1 WHERE UserName= '$UserName';";
                        $ResultSet4=Ejecutar($Con, $SQL4);
                    
                        
                    }else{
                        if($DatosCuenta[2]=='A'){
                            print("Entrar como Admin");
                        }else{
                        print("Entrar como Usuario");
                        }

                    }
                    }else{
                   print("Cuenta Bloqueada");
                    }

                    
                
                }else{
                print("Cuenta INactiva");
                }
            }else{
                print("Usuario, contraseña o llave incorrecta");
            }
            }else{
            print("Contraseña incorrecta");
            $SQL1="UPDATE cuentas SET intentos=intentos+1 WHERE UserName= '$UserName';";
            $ResultSet1=Ejecutar($Con, $SQL1);
           // print("Llevas ".)
            if ($DatosCuenta[5]==3){
                $SQL2="UPDATE cuentas SET bloqueo=bloqueo+1 WHERE UserName= '$UserName';";
                $ResultSet2=Ejecutar($Con, $SQL2);
                print("Cuenta bloqueada");
            }
        }
    
    
    }else{
        //print("El Usuario no existe");
    }
}else{
    print("error al cargar el archivo 21126");
}
print("error al cargar el archivo");
//header("Location: Front_Ingresar.html");
exit;
}
*/
    
Desconectar($Con);
?>