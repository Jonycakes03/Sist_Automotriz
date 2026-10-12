<?php
session_start();
if(! isset ($_SESSION['User'])){
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
            margin-right: 10px;
            position: absolute;
            top: 20px;
            left: 1450px;
           
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
    </style>
</head>
    <body>
    <header>
        <h1>Sistema de Control Vehicular</h1>
    <img src="LogoQue.png" alt="Logo de Querétaro" height="90">
    </header>
    <div class="container">
        <h1>Menú</h1>
        <div class="menu">
            <div class="dropdown">
                <button>Conductores</button>
    <div class="dropdown-content">
    <a href="VConductoresUser.php">Consulta</a>
    
    </div>
    </div> 
    <div class="dropdown">
        <button>Centros Verificacion</button>
        <div class="dropdown-content">
        <a href="VCentrosVerificacionUser.php">Consulta</a>
        </div>
        </div>
    <div class="dropdown">
            <button>Licencias</button>
            <div class="dropdown-content">
            <a href="VLicenciasUser.php">Consulta</a>
            </div>
            </div>
    <div class="dropdown">
                <button>Multas</button>
                <div class="dropdown-content">
                <a href="VMultasUser.php">Consulta</a>
                </div>
                </div> 
     <div class="dropdown">
                    <button>Propietarios</button>
                    <div class="dropdown-content">
                    <a href="VPropietariosUser.php">Consulta</a>
                    </div>
                    </div> 
        <div class="dropdown">
                        <button>Tarjetas de circulacion</button>
                        <div class="dropdown-content">
                        <a href="VTarjetaCirculacionUser.php">Consulta</a>
                        </div>
                        </div>  
        <div class="dropdown">
                            <button>Tenencias</button>
                            <div class="dropdown-content">
                            <a href="VTenenciasUser.php">Consulta</a>
                            </div>
                            </div>
        <div class="dropdown">
                <button>Vehiculos</button>
                <div class="dropdown-content">
                <a href="VVehiculosUser.php">Consulta</a>
                
               
                </div>
                </div>  
        <div class="dropdown">
                <button>Verificaciones</button>
                <div class="dropdown-content">
                <a href="VVerificacionesUser.php">Consulta</a>
                </div>
                </div> 
                <div class="dropdown">
                <button>Cerrar Sesion</button>
                <div class="dropdown-content">
                <a href="CerrarSesion.php">Cerrar Sesion</a>                  
            </div>
        </div>     
    </form>   
</html>