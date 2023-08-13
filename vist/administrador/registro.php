<?php
require_once("../../base/conexi.php");
$base = new database();
$conexion =$base->conectar();
?>

<?php
if ((isset($_POST["registro"]))&&($_POST["registro"]=="formulario"))
{
    $documento= $_POST['documento'];
    $nombre_mascota= $_POST['nombre_mascota'];
    $peso= $_POST['peso'];
    $raza= $_POST['raza'];
   

    $validar =$conexion->prepare("SELECT * FROM mascota  WHERE documento='$documento' AND nombre_mascota='$nombre_mascota' AND peso='$peso' AND raza='$raza'");
    $validar->execute();
    $fila1=$validar->fetchAll(PDO::FETCH_ASSOC);

    if ($fila1) {
        echo '<script>alert ("DOCUMENTO O USUARIO EXISTEN //CAMBIELOS//");</scrip>';
        echo '<script>windows.location="registrousu.php"</script>';
    }
    else if ($documento=="" || $nombre_mascota=="" || $peso=="" || $raza=="" )
    {
        echo '<script>alert ("FORMULARIO VACIO");</script>';
        echo '<script>windows.location="registrousu.php"</script>';
    }

    else
    {
        $insert= $conexion->prepare ("INSERT  INTO mascota(documento,nombre_mascota,peso,raza) VALUES ('$documento','$nombre_mascota','$peso','$raza')");
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
    <h1>Registro Mascota</h1>
        <br>
        <label for="documento">Documento</label>
        <input type="int" name="documento" id="documento" placeholder="Digite documento">
        <label for="nombre_mascota">nombre_mascota</label>
        <input type="text" name="nombre_mascota" id="nombre_mascota" placeholder="Digite nombre mascota">
        <label for="peso">Peso</label>
        <input type="int" name="peso" id="peso" placeholder="Digite peso">
        <label for="raza">Raza</label>
        <input type="text" name="raza" id="raza" placeholder="raza">
        <input type="submit" name="validar" value="Registrarme">
        <input type="hidden" name="registro" value="formulario">
        </form>

    </div>

</body>
</html>
