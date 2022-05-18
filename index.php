<html>
<head><title>Control de Vacunacion</title>
<link rel=StyleSheet href="estilos.css" type="text/css">
</head>

<body>
<br><br>
<center><h1>Sistema de Gestion de Informacion</h1></center>
<br><br>
<div class="box1"> 
   <a class="btnaction" href="registro.php" target="_parent"> Registro </a><br><br>
   <a class="btnaction" href="reporte.php" target="_parent"> Reporte </a><br><br>
   <a class="btnaction" href="consulta.php" target="_parent"> Consulta </a>
</div>

<br><br>
<h5>Estado de Conexion con SQL Server</h5>
<?php 


include_once("conexion.php");
  $conexion = new PDO("sqlsrv:server=$server;database=$database,$username,$password");
  $consulta = $conexion-> prepare("SELECT 
  [F2]
  ,[F3]
  ,[F4]
  ,[F5]      
  ,[F11]
  ,([F12])
  ,[F13]
  ,[F14]
FROM [Registros]
WHERE F2=7884455");


  $consulta-> execute();
  $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
  var_dump($datos);

  
?>
</body>
</html>