<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$campo1 = "";
	$campo2 = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
$campo1 = $_POST['campo1'];
		$campo2 = $_POST['campo2'];
$algo=$campo1*$campo2;
		mysqli_query($db, "INSERT INTO ventaproductos (name, address, campo1, campo2,total) VALUES ('$name', '$address', '$campo1', '$campo2','$algo')");
		$_SESSION['message'] = "Producto Añadido A La Factura"; 
		header('location: 6IngProduct.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$campo1 = $_POST['campo1'];
		$campo2 = $_POST['campo2'];



		mysqli_query($db, "UPDATE ventaproductos SET name='$name', address='$address',campo1='$campo1',campo2='$campo2' WHERE id=$id");
		$_SESSION['message'] = "Producto Editado!"; 
		header('location: 6IngProduct.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM ventaproductos WHERE id=$id");
	$_SESSION['message'] = "Producto Eliminado!"; 
	header('location: 6IngProduct.php');
}


	$results = mysqli_query($db, "SELECT * FROM ventaproductos");


?>