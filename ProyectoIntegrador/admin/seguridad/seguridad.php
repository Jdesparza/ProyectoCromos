<?php
	@session_start();
	if(@$_SESSION['autentificado'] && $_SESSION['nombresUser'] && $_SESSION['rolUser']){
		include($_SESSION['local_path']."/dll/config.php"); 
		include($_SESSION['local_path']."/dll/class_mysqli_7.php");
		$miconexion = new clase_mysqli7;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		echo "<script>location.href='../'</script>";
	}

?>