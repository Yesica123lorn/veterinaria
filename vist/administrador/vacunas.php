<?php
require_once("../../base/conexi.php");
$base = new database();
$conexion =$base->conectar();

?>

<?php
if ((isset($_POST["registro"]))&&($_POST["registro"]=="formulario"))
{
    $fecha= $_POST['fecha'];
    $edad= $_POST['edad'];
    $descripcion= $_POST['descripcion'];
   
   

    $validar =$conexion->prepare("SELECT * FROM vacuna  WHERE fecha='$fecha' AND edad='$edad' AND descripcion='$descripcion' ");
    $validar->execute();
    $fila1=$validar->fetchAll(PDO::FETCH_ASSOC);

    if ($fila1) {
        echo '<script>alert ("DOCUMENTO O USUARIO EXISTEN //CAMBIELOS//");</scrip>';
        echo '<script>windows.location="registrousu.php"</script>';
    }
    else if ($fecha=="" || $edad=="" || $descripcion=="" )
    {
        echo '<script>alert ("FORMULARIO VACIO");</script>';
        echo '<script>windows.location="registrousu.php"</script>';
    }

    else
    {
        $insert= $conexion->prepare ("INSERT  INTO vacuna(fecha,edad,descripcion) VALUES ('$fecha','$edad','$descripcion')");
        $insert -> execute();
        echo '<script>alert (" Registro Exitoso, Gracias");</script>';
        echo '<script>window.location="index.html"</script>';
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../controller/css/registro.css"/>
</head>
<body class="" style="background-color:#9F6060";>
  <div class="container  #632a2a">
    <div class="row justify-content-center">
      <div class="custom-box col-md-7">
        <form class="form" method="POST">

    <div class="container-sm5"></div>
    <h1>Vacuna</h1>
        <br>
        <label for="fecha">fecha</label>
        <input type="date" name="fecha" id="fecha" placeholder="Digite fecha">
        <label for="edad">edad</label>
        <input type="text" name="edad" id="edad" placeholder="Digite edad">
        <label for="descripcion">descripcion</label>
        <input type="varchar" name="descripcion" id="descripcion" placeholder="Digite peso">
        <input type="submit" name="validar" value="Registrarme">
        <input type="hidden" name="registro" value="formulario">
        </form>

    </div>

</body>
</html>
