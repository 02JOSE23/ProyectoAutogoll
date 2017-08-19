<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
$campo1 = $_POST['campo1'];

	
		mysqli_query($db, "INSERT INTO cancha (name, address, campo1) VALUES ('$name', '$address', '$campo1')");
		$_SESSION['message'] = "Alquiler Exitoso!"; 
		header('location: 6IngProduct.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$campo1 = $_POST['campo1'];





		mysqli_query($db, "UPDATE cancha SET name='$name', address='$address',campo1='$campo1' WHERE id=$id");
		$_SESSION['message'] = "Producto Editado!"; 
		header('location: 6IngProduct.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM cancha WHERE id=$id");
	$_SESSION['message'] = "Producto Eliminado!"; 
	header('location: 6IngProduct.php');
}


	$results = mysqli_query($db, "SELECT * FROM cancha");


?>