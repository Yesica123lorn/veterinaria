<?php
session_start();
require_once("../../base/conexi.php");
$base = new database();
$conexion =$base->conectar();
$sql = $conexion ->prepare("SELECT * FROM mascotas ");
$sql -> execute();
$usua = $sql -> fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tabla de Datos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Edad</th>
                <th>Descripción</th>
                <th colspan="2">accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $datos = array(
                array("","",""),
                array("","",""),
                array("","","")
            );

            foreach ($datos as $dato) {
                $fecha = $dato[0];
                $edad = $dato[1];
                $descripcion = $dato[2];

                echo "<tr>";
                echo "<td>$fecha</td>";
                echo "<td>$edad</td>";
                echo "<td>$descripcion</td>";
                echo "</tr>";

                
                   

            }
            ?>
        </tbody>
    </table>
</body>
</html>








