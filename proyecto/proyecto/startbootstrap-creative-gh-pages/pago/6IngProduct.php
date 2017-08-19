<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM pago WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$campo1 = $n['campo1'];
		$campo2 = $n['campo2'];
		$campo3 = $n['campo3'];
		$campo4 = $n['campo4'];

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pago de personal </title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="icon" href="img\descarga.jpg" type="image/x-icon">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

     <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="page-top" style="background-color:white; color:black;">
<div class="pen-title">
<br/>
<br/>
<br/>
<br/>
<br/>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:orange;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a style="color:white;" class="navbar-brand page-scroll" href="#page-top">AutoGol
                </a>
            </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                 <li>
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/personal/VerIngreso.php">Ver personal</a>
                    </li><li>
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/pago/VerIngreso.php">Ver pagos</a>
                    </li> <li>
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/personal/6IngProduct.php">Volver</a>
                    </li>
                   
                </ul>
            </div>
  </div>
  </nav>

<div class="pen-title">

  <h1>Pago de personal</h1>
<form method="post" action="server.php" >
<div style="position:center; ">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
<div style="font-size:14px; width:10px">
	<div>
		
		<input required="required" style="width:300px" type="date" name="name" value="<?php echo $name; ?>">
	</div>
	<div >
		
		<input required="required" style="width:300px" type="number" name="address" placeholder  ="Numero de documento" value="<?php echo $address; ?>">
	</div>
	<div>
		
		<input required="required" style="width:300px" type="text" name="campo1" placeholder  ="Nombres" value="<?php echo $campo1; ?>">
	</div>
	<div>
		
		<input required="required" style="width:300px" type="text" name="campo2" placeholder  ="Apellidos" value="<?php echo $campo2; ?>">
	</div><div>
		
		<input required="required" style="width:300px;" type="text" name="campo3" placeholder="Cargo" value="<?php echo $campo3; ?>">
	</div><div>
		
		<input required="required" style="width:300px" type="text" name="campo4" placeholder  ="Valor" value="<?php echo $campo4; ?>">
	</div>
	<div >
	</div>
<br/>
<br/>
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: orange;" >Guardar Cambios</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" style="background-color:orange; color:white; border-color:orange">Realizar pago</button>
		<?php endif ?>
		<br/>
		<br/>
		 <button  class="btn" style="background-color:orange; color:white; border-color:orange; width:277px" >
        <a id="#prop" href="\proyecto\proyecto\Administrador\index.php" style=" color:white; ">Volver</a></button>
		
		</button>
	</div>
	</div>
</form>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg" style="background-color:orange; color:white; border-color:orange">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM pago"); ?>
<div style="text-aling: center">

</div>



 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">AutoGol Sogamoso!</h2>
                    <hr class="primary">
                    <p>Autolavado (Ultima Tecnología) Canchas Sintéticas Lavado con espuma Zona WiFi Mini Market ABIERTO TODOS LOS DIAS DE 7 AM – 9 PM DIRECCIÓN: Kilómetro 0 Vía Sogamoso – Tibasosa TELÉFONOS: 773 6770 – 318 261 8865 Síguenos en Facebook: Chanchas Autogol  !</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>311 885 3241 - 318 261 8865</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">autogolcanchas@hotmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
