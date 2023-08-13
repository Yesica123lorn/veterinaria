<?php
session_start();
require_once ('../../base/conexi.php');

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
    
</body>
</html>
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    
    <h1 id="h1">Menu Principal</h1>
</head>
<body class="" style="background-color: #e9e0e0;">
<div>
        <form method="POST">
        </form>
</div>

<nav class="navbar navbar-expand-lg class="" style="background-color: #D84242;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item background-color:#C5657C">
          <a class="nav-link active" aria-current="page" href="registro.php">REGISTRO MASCOTA</a>
        </li>
        <li class="nav-item a:hover background-color:#C5657C">
          <a class="nav-link active" aria-current="page" href="vacunas.php">VACUNAS</a>
        </li>
        <li class="nav-item a:hover background-color:#C5657C">
          <a class="nav-link active" aria-current="page" href="tabla.php">TABLA VACUNA</a>
        </li>
      </ul>
      <div>
        <button type="button" class="btn btn-light">cerrar cesion</button>
      </div>
    </div>
  </div>
</nav>
<div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>