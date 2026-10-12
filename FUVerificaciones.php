<?php
session_start();
if(! isset ($_SESSION['Admin'])){
    header("Location: Front_Ingresar.html");
    exit;
}
    $VerificacionId = $_GET['VerificacionId'];
    $SQL="SELECT * FROM verificaciones WHERE VerificacionId='$VerificacionId';";
    include("Controlador.php");
    $Con=Conectar();
    $ResultSet=Ejecutar($Con, $SQL);
    $Fila=mysqli_fetch_row($ResultSet);
    Desconectar($Con);
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
            height: 290vh;
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
    <a href="FConductores.html">Insertar</a>
    <a href="CA_Conductores.php">Actualizar</a>
    <a href="CConductores.php">Eliminar</a>
    </div>
    </div> 
    <div class="dropdown">
        <button>Centros Verificacion</button>
        <div class="dropdown-content">
        <a href="VCentrosVerificacion.php">Consulta</a>
        <a href="FCentrosVerificacion.html">Insertar</a>
        <a href="CA_CentrosVerificacion.php">Actualizar</a>
        <a href="CCentrosVerificacion.php">Eliminar</a>
        </div>
        </div>
    <div class="dropdown">
            <button>Licencias</button>
            <div class="dropdown-content">
            <a href="VLicencias.php">Consulta</a>
            <a href="FLicencias.html">Insertar</a>
            <a href="CA_Licencias.php">Actualizar</a>
            <a href="CLicencias.php">Eliminar</a>
            <a href="ImprimirLicencia.php">Imprimir</a>

            </div>
            </div>
    <div class="dropdown">
                <button>Multas</button>
                <div class="dropdown-content">
                <a href="VMultas.php">Consulta</a>
                <a href="FMultas.html">Insertar</a>
                <a href="CA_Multas.php">Actualizar</a>
                <a href="CMultas.php">Eliminar</a>
                </div>
                </div> 
     <div class="dropdown">
                    <button>Propietarios</button>
                    <div class="dropdown-content">
                    <a href="VPropietarios.php">Consulta</a>
                    <a href="FPropietarios.html">Insertar</a>
                    <a href="CA_Propietarios.php">Actualizar</a>
                    <a href="CPropietarios.php">Eliminar</a>
                    </div>
                    </div> 
        <div class="dropdown">
                        <button>Tarjetas de circulacion</button>
                        <div class="dropdown-content">
                        <a href="VTarjetaCirculacion.php">Consulta</a>
                        <a href="FTarjetasDeCirculacion.html">Insertar</a>
                        <a href="CA_TarjetasCirculacion.php">Actualizar</a>
                        <a href="CTarjetaCirculacion.php">Eliminar</a>
                        <a href="ImprimirTarjeta.php">Imprimir</a>

                        </div>
                        </div>  
        <div class="dropdown">
                            <button>Tenencias</button>
                            <div class="dropdown-content">
                            <a href="VTenencias.php">Consulta</a>
                            <a href="FTenencias.html">Insertar</a>
                            <a href="CA_Tenencias.php">Actualizar</a>
                            <a href="CTenencias.php">Eliminar</a>
                            </div>
                            </div>
        <div class="dropdown">
                <button>Vehiculos</button>
                <div class="dropdown-content">
                <a href="VVehiculos.php">Consulta</a>  
                <a href="FVehiculos.html">Insertar</a>
                <a href="CA_Vehiculos.php">Actualizar</a>  
                <a href="CVehiculos.php">Eliminar</a>
               
                </div>
                </div>  
        <div class="dropdown">
                <button>Verificaciones</button>
                <div class="dropdown-content">
                <a href="VVerificaciones.php">Consulta</a>
                <a href="FVerificaciones.html">Insertar</a>
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
        <h1>Verificaciones</h1>
    <form method="get" action="UVerificaciones.php">
        <label>Verificaciones</label>
        <br>
        
        <label>VerificacionId</label>
        <input type= "number" id= "VerificacionId" name ="VerificacionId" value="<?php print($Fila[0]);?>">
        <p></p>>
        <p></p>
       
        <label>Marca</label>
        <input type= "text" id= "Marca" name ="Marca" value="<?php print($Fila[1]);?>">
        <p></p>
        <p></p>
        <label>Submarca</label>
        <input type= "text" id= "Submarca" name ="Submarca" value="<?php print($Fila[2]);?>">
        <p></p>
        <p></p>
        <label>Año</label>
        <input type= "number" id= "Año" name ="Año" value="<?php print($Fila[3]);?>">
        <p></p>
        <p></p>
        <label>Modelo</label>
        <input type= "text" id= "Modelo" name ="Modelo" value="<?php print($Fila[4]);?>">
        <p></p>
        <p></p>
        <label>Placa</label>
        <input type= "text" id= "Placa" name ="Placa" value="<?php print($Fila[5]);?>">
        <p></p>
        <p></p>
        <label>Vigencia</label>
        <input type= "date" id= "Vigencia" name ="Vigencia" value="<?php print($Fila[6]);?>">
        <p></p>
        <p></p>
        <label>Num_Serie</label>
        <input type= "text" id= "NumSerie" name ="NumSerie" value="<?php print($Fila[7]);?>">
        <p></p>
        <p></p>
        <label>Clase</label>
        <input type= "text" id= "Clase" name ="Clase" value="<?php print($Fila[8]);?>">
        <p></p>
        <p></p>
        <label>Tipo_Combustible</label>
        <select name="TipoCombusitble" id = "TipoCombusitble" value="<?php print($Fila[9]);?>">
        <p></p>
            <option value ="Gasolina">Gasolina</option>
            <option value ="Diesel">Diesel<option>
            <option value ="Gas_Natural">Gas_Natural</option>
        </select>
        <p></p>
        <label>NIV</label>
        <input type= "text" id= "NIV" name ="NIV" value="<?php print($Fila[10]);?>">
        <p></p>
        <p></p>
        <label>Cilindraje</label>
        <input type= "text" id= "Cilindraje" name ="Cilindraje" value="<?php print($Fila[11]);?>">
        <p></p>
        <p></p>
        

        <label>Tipo_Servicio</label>
        <input type= "text" id= "TipoServicio" name ="TipoServicio" value="<?php print($Fila[12]);?>">
        <p></p>
        <p></p>
        <label>Entidad_Federal</label>
        <select name="EntidadFederal" id="EntidadFederal" value="<?php print($Fila[13]);?>">
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        <p></p>
        <label>Municipio</label>
        <input type= "text" id= "Municipio" name ="Municipio" value="<?php print($Fila[14]);?>">
        <p></p>
        <label>Num_Centro</label>
        <input type= "text" id= "NumCentro" name ="NumCentro" value="<?php print($Fila[15]);?>">
        <p></p>
        <label>Num_Linea_Verificacion</label>
        <input type= "text" id= "NumLineaVerificacion" name ="NumLineaVerificacion" value="<?php print($Fila[16]);?>">
        <p></p>
        <label>Tecnico_Verificacion</label>
        <input type= "text" id= "TecnicoVerificacion" name ="TecnicoVerificacion" value="<?php print($Fila[17]);?>">
        <p></p>
        <label>Fecha_Expedicion</label>
        <input type= "date" id= "FechaExpedicion" name ="FechaExpedicion" value="<?php print($Fila[18]);?>">
        <p></p>
        <label>Motivo_Verificacion</label>
        <input type= "text" id= "MotivoVerificacion" name ="MotivoVerificacion" value="<?php print($Fila[19]);?>">
        <p></p>
        <label>Folio_Certificado</label>
        <input type= "number" id= "FolioCertificado" name ="FolioCertificado" value="<?php print($Fila[20]);?>">
        <p></p>
        <label>Tipo_Carrozeria</label>
        <input type= "text" id= "TipoCarrozeria" name ="TipoCarrozeria" value="<?php print($Fila[21]);?>">
        <p></p>
        <label>HoraEntrada</label>
        <input type= "time" id= "HoraEntrada" name ="HoraEntrada" value="<?php print($Fila[22]);?>">
        <p></p>
        <label>HoraSalida</label>
        <input type= "time" id= "HoraSalida" name ="HoraSalida" value="<?php print($Fila[23]);?>">
        <p></p>

        <label>Semestre</label>
        <input type= "number" id= "Semestre" name ="Semestre" value="<?php print($Fila[24]);?>">
        <p></p>
       
        <label>Centro_Verificacion</label>
        <input type= "number" id= "CentroVerificacion" name ="CentroVerificacion" value="<?php print($Fila[25]);?>">
        <p></p>
        <label>Tarjeta_Circulacion</label>
        <input type= "text" id= "TarjetaCirculacion" name ="TarjetaCirculacion" value="<?php print($Fila[26]);?>">
        <p></p>
        

        <input type="submit">
    </form>
    </div>
</div>
</html>