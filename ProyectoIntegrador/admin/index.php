<?php
include("seguridad/seguridad.php");
$listaRol[1]="Administrador";
$listaRol[2]="Editor";
echo "Bienvenido: ".$_SESSION['nombresUser'];
echo "<br>ud es un ".$listaRol[$_SESSION['rolUser']];
echo "<a href='seguridad/salir.php?salir=true'>Cerrar sesion</a>";


echo "<br>";
if ($_SESSION['rolUser']==2) {
	echo "<a href='#'>Inicio</a>";
	echo "<a href='#'>Usuarios</a>";
	echo "<a href='#'>Reportes</a>";
	echo "<a href='#'>Estadisticas</a>";
}
if ($_SESSION['rolUser']==1) {
	echo "<a href='#'>Inicio</a>";
	echo "<a href='#'>Reportes</a>";
}
?>