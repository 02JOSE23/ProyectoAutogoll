<?php 
	session_start(); 
	if (empty($_SESSION['id'])){
		header("Location: login.php");
	}else{
		if($_SESSION['tipo'] == "Administrador"){
            echo "Hola propieatrio";
            header("Location: ../../Administrador/indexAdmin.php ");

        }else if ($_SESSION['tipo'] == "Propietario"){
			echo "Hola administrador";
		}
	}
?>
