<?php
session_start();
if(! isset ($_SESSION['Admin'])){
    header("Location: Front_Ingresar.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control Vehicular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header img {
            float: right;
            margin-right: 20px;
        }

        .container {
            text-align: center;
            padding: 50px 20px;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            justify-items: center;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown button {
                background-color: white;
                border: 2px solid #003366;
                border-radius: 5px;
                color: #003366;
                font-size: 16px;
                padding: 10px 15px;
                cursor: pointer;
                width: 180px;
            }
    
            .dropdown button:hover {
                background-color: #003366;
                color: white;
            }
    
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: white;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                z-index: 1;
                min-width: 180px;
                border: 1px solid #003366;
                border-radius: 5px;
            }
    
            .dropdown-content a {
                color: #003366;
                padding: 10px;
                text-decoration: none;
                display: block;
                font-size: 14px;
            }
    
            .dropdown-content a:hover {
                background-color: #003366;
                color: white;
            }
    
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 180vh;
        }

        .form-box {
            background-color: white;
            padding: 30px;
            border: 2px solid #003366;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-box h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #003366;
        }

        .form-box label {
            display: block;
            font-size: 14px;
            color: #003366;
            margin-bottom: 5px;
        }

        .form-box input, 
        .form-box select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #003366;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-box input[type="file"] {
            padding: 5px;
        }

        .form-box input[type="submit"] {
            background-color: #003366;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-box input[type="submit"]:hover {
            background-color: #002244;
        }
    </style>
    </head>
    <form>
<div class="dropdown">
    <button>Conductores</button>
    <div class="dropdown-content">
    <a href="VConductores.php">Consulta</a>
    <a href="FConductores.php">Insertar</a>
    <a href="CA_Conductores.php">Actualizar</a>
    <a href="CConductores.php">Eliminar</a>
    </div>
    </div> 
    <div class="dropdown">
        <button>Centros Verificacion</button>
        <div class="dropdown-content">
        <a href="VCentrosVerificacion.php">Consulta</a>
        <a href="FCentrosVerificacion.php">Insertar</a>
        <a href="CA_CentrosVerificacion.php">Actualizar</a>
        <a href="CCentrosVerificacion.php">Eliminar</a>
        </div>
        </div>
    <div class="dropdown">
            <button>Licencias</button>
            <div class="dropdown-content">
            <a href="VLicencias.php">Consulta</a>
            <a href="FLicencias.php">Insertar</a>
            <a href="CA_Licencias.php">Actualizar</a>
            <a href="CLicencias.php">Eliminar</a>
            </div>
            </div>
    <div class="dropdown">
                <button>Multas</button>
                <div class="dropdown-content">
                <a href="VMultas.php">Consulta</a>
                <a href="FMultas.php">Insertar</a>
                <a href="CA_Multas.php">Actualizar</a>
                <a href="CMultas.php">Eliminar</a>
                </div>
                </div> 
     <div class="dropdown">
                    <button>Propietarios</button>
                    <div class="dropdown-content">
                    <a href="VPropietarios.php">Consulta</a>
                    <a href="FPropietarios.php">Insertar</a>
                    <a href="CA_Propietarios.php">Actualizar</a>
                    <a href="CPropietarios.php">Eliminar</a>
                    </div>
                    </div> 
        <div class="dropdown">
                        <button>Tarjetas de circulacion</button>
                        <div class="dropdown-content">
                        <a href="VTarjetaCirculacion.php">Consulta</a>
                        <a href="FTarjetasDeCirculacion.php">Insertar</a>
                        <a href="CA_TarjetasCirculacion.php">Actualizar</a>
                        <a href="CTarjetaCirculacion.php">Eliminar</a>
                        </div>
                        </div>  
        <div class="dropdown">
                            <button>Tenencias</button>
                            <div class="dropdown-content">
                            <a href="VTenencias.php">Consulta</a>
                            <a href="FTenencias.php">Insertar</a>
                            <a href="CA_Tenencias.php">Actualizar</a>
                            <a href="CTenencias.php">Eliminar</a>
                            </div>
                            </div>
        <div class="dropdown">
                <button>Vehiculos</button>
                <div class="dropdown-content">
                <a href="VVehiculos.php">Consulta</a>  
                <a href="FVehiculos.php">Insertar</a>
                <a href="CA_Vehiculos.php">Actualizar</a>  
                <a href="CVehiculos.php">Eliminar</a>
               
                </div>
                </div>  
        <div class="dropdown">
                <button>Verificaciones</button>
                <div class="dropdown-content">
                <a href="VVerificaciones.php">Consulta</a>
                <a href="FVerificaciones.php">Insertar</a>
                <a href="CA_Verificaciones.php">Actualizar</a>
                <a href="CVerificaciones.php">Eliminar</a>                   
            </div>
        </div>
    </div>
</div>
    </form>
</html>
<?php
$TarjetadeCirculacionid=$_GET['TarjetadeCirculacionid'];
$RFC=$_GET['RFC'];
$Folio= $_GET['Folio'];
$Vigencia= $_GET['Vigencia'];
$Placa= $_GET['Placa'];
$TipoServicio=$_GET['TipoServicio'];
$FechaExpedicion=$_GET['FechaExpedicion'];
$OficinaExp= $_GET['OficinaExp'];
$NumConstancia= $_GET['NumConstancia'];
$Uso= $_GET['Uso'];
$Operacion=$_GET['Operacion'];
$PlacaAnterior=$_GET['PlacaAnterior'];
$Holograma=$_GET['Holograma'];

$Propietario=$_GET['Propietario'];
$Vehiculo=$_GET['Vehiculo'];

/*
print("TarjetadeCirculacionid: ".$TarjetadeCirculacionid);
print("<br>");
print("RFC: ".$RFC);
print("<br>");
print("Folio: ".$Folio);
print("<br>");
print("Vigencia: ".$Vigencia);
print("<br>");
print("Placa: ".$Placa);
print("<br>");
print("TipoServicio: ".$TipoServicio);
print("<br>");
print("FechaExpedicion: ".$FechaExpedicion);
print("<br>");
print("OficinaExp: ".$OficinaExp);
print("<br>");
print("NumConstancia: ".$NumConstancia);
print("<br>");
print("Uso: ".$Uso);
print("<br>");
print("Operacion: ".$Operacion);
print("<br>");
print("PlacaAnterior: ".$PlacaAnterior);
print("<br>");
print("Holograma: ".$Holograma);
print("<br>");
print("Propietario: ".$Propietario);
print("<br>");
print("Vehiculo: ".$Vehiculo);
print("<br>");
*/

$SQL="INSERT INTO TarjetasDeCirculacion VALUES ('$TarjetadeCirculacionid','$RFC','$Folio','$Vigencia',
    '$Placa','$TipoServicio','$FechaExpedicion','$OficinaExp','$NumConstancia',
    '$Uso','$Operacion','$PlacaAnterior','$Holograma','$Propietario', '$Vehiculo');";
//print($SQL);

include("Controlador.php");

$Con= Conectar();

$ResultSet=Ejecutar($Con,$SQL);


if ($ResultSet == 1) {
    $_SESSION['mensaje'] = "Registro guardado correctamente.";
 
    $Manejador=fopen("TarjetaDeCirculacion$TarjetadeCirculacionid.xml","w");

fwrite($Manejador,'<?xml version="1.0" encoding="UTF-8"?>
<TarjetaDeCirculacion>
    <TarjetadeCirculacionid><'.$TarjetadeCirculacionid.'></TarjetadeCirculacionid>
    <Rfc><'.$RFC.'></Rfc>
    <Folio><'.$Folio.'></Folio
    <Vigencia><'.$Vigencia.'></Vigencia>
    <Placa><'.$Placa.'></Placa>
    <TipoServicio><'.$TipoServicio.'></TipoServicio>
    <FechaExpedicion><'.$FechaExpedicion.'></FechaExpedicion>
    <OficinaExp><'.$OficinaExp.'></OficinaExp>
    <NumConstancia><'.$NumConstancia.'></NumConstancia>
    <Uso><'.$Uso.'></Uso>
    <Operacion><'.$Operacion.'></Operacion>
    <PlacaAnterior><'.$PlacaAnterior.'></PlacaAnterior>
    <Holograma><'.$Holograma.'></Holograma>
    <Propietario><'.$Propietario.'></Propietario>
    <Vehiculo><'.$Vehiculo.'></Vehiculo>
</TarjetaDeCirculacion>

');
fclose($Manejador);

print("Se ha descargado el archivo xml");
}
else {
    $_SESSION['mensaje'] = "Error al guardar el registro: " . mysqli_error($Con);
}

Desconectar($Con);

?>

