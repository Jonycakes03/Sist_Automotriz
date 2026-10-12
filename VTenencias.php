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
            height: 110vh;
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
            <a href="ImprimirLicencia.php">Imprimir</a>

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
                        <a href="ImprimirTarjeta.php">Imprimir</a>

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
        <div class="dropdown">
                <button>Cerrar Sesion</button>
                <div class="dropdown-content">
                <a href="CerrarSesion.php">Cerrar Sesion</a>                  
            </div>
        </div>
    </div>
</div>



<div class="container1">
    <div class="form-box">
        <h1>Tenencias</h1>
    <form>
        <label>Criterio</label>
        <input type="text" id="Criterio" name="Criterio"><br>
        <input type="radio" id="Atributo" name="Atributo" value="TenenciaId" required>TenenciaId <br>
        <input type="radio" id="Atributo" name="Atributo" value="Fecha"> Fecha <br>
        <input type="radio" id="Atributo" name="Atributo" value="Hora"> Hora <br>
        <input type="radio" id="Atributo" name="Atributo" value="InstrumentoPago"> InstrumentoPago <br>
        <input type="radio" id="Atributo" name="Atributo" value="Importe">Importe <br>
        <input type="radio" id="Atributo" name="Atributo" value="FechaLimitePago"> FechaLimitePago <br>
        <input type="radio" id="Atributo" name="Atributo" value="Vehiculo"> Vehiculo <br>
        <input type="radio" id="Atributo" name="Atributo" value="NumTransaccion"> NumTransaccion <br>
        <input type="radio" id="Atributo" name="Atributo" value="TarjetaCirculacion">TarjetaCirculacion <br>
        <input type="submit">

    </form>
</html>



<?php
if(isset($_GET['Criterio'])){
    $Criterio = $_GET['Criterio'];
    $Atributo = $_GET['Atributo'];
    include("Controlador.php");
    $Con=Conectar();
    $SQL= "SELECT * FROM Tenencias where $Atributo LIKE '%$Criterio%';";
    $ResultSet= Ejecutar($Con, $SQL);
    
    Print("<table border='1'>
          <tr>
           <td>Tenencia ID</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>Instrumento Pago</td>
            <td>Importe</td>
            <td>Fecha Limite Pago</td>
            <td> Vehiculo</td>
            <td>Num Transaccion</td>
            <td>Tarjeta Circulacion</td>
            
            </tr>");

        $nfilas = mysqli_num_rows($ResultSet);
    for ($i = 0; $i < $nfilas; $i++) {
        $Fila = mysqli_fetch_row($ResultSet);
        print("<tr>");
        // Mostrar los datos de cada fila
        for ($j = 0; $j <count($Fila); $j++) {
            print("<td>");
            print_r($Fila[$j]);
            print("</td>");
        }
        
    }
    print("</table>");
   
    Desconectar($Con);
}
?>