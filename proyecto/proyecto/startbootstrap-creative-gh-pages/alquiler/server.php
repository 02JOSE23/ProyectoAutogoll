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
		$campo2 = $_POST['campo2'];
		$campo3 = $_POST['campo3'];
		$campo4 = $_POST['campo4'];
$total=$campo4*$campo2;
		mysqli_query($db, "INSERT INTO alquiler (name, address, campo1, campo2,campo3,campo4,total) VALUES ('$name', '$address', '$campo1', '$campo2', '$campo3', '$campo4', '$total')");
		$_SESSION['message'] = "Alquiler Exitoso!"; 
		header('location: 6IngProduct.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$campo1 = $_POST['campo1'];
		$campo2 = $_POST['campo2'];
		$campo2 = $_POST['campo3'];
		$campo2 = $_POST['campo4'];




		mysqli_query($db, "UPDATE alquiler SET name='$name', address='$address',campo1='$campo1',campo2='$campo2' ,campo3='$campo3',campo4='$campo4' WHERE id=$id");
		$_SESSION['message'] = "Producto Editado!"; 
		header('location: 6IngProduct.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM alquiler WHERE id=$id");
	$_SESSION['message'] = "Producto Eliminado!"; 
	header('location: 6IngProduct.php');
}


	$results = mysqli_query($db, "SELECT * FROM alquiler");


?>