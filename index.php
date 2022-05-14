<html>
<head><title>Control de Vacunacion</title>
<link rel=StyleSheet href="estilos.css" type="text/css">
</head>

<body>
<br><br>
<center><h1>Sistema de Gestion de Informacion</h1></center>
<br><br>

<a href="registro.php" target="_parent"> Registro </a><br><br>
<a href="reporte.php" target="_parent"> Reporte </a><br><br>
<a href="consulta.php" target="_parent"> Consulta </a>
<br><br>
<h5>Estado de Conexion con SQL Server</h5>
<?php 
  include_once("conexion.php");
  Conexion::conexionBD();
?>
</body>
</html>