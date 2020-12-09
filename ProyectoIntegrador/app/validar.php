<?php

extract($_POST);

session_start();


$clave=md5($clave);

include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);


$miconexion->consulta("select * from administrador where usuario='$usuario' and clave='$clave'");
$listaUser=$miconexion->consulta_lista();


if (!$listaUser[0]) {
	echo '<script>alert("Error de logueo...");</script>';
	echo "<script>location.href='../'</script>";
}else{
	
	$_SESSION['autentificado'] = TRUE;
    $_SESSION['nombresUser'] = $listaUser[1];
    $_SESSION['rolUser'] = $listaUser[5];
    $_SESSION['local_path'] = $local_path;
    
	echo "<script>location.href='../admin/index.php'</script>";
}

if ($_SESSION['rolUser']==1) {
	echo "<script>location.href='../admin/index.php'</script>";
}

if ($_SESSION['rolUser']==2) {
	echo "<script>location.href='../admin/index.html'</script>";

}


?>