<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM cancha WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$campo1 = $n['campo1'];
		$campo2 = $n['campo2'];
		
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alquiler de canchas </title>
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
                        <a style="color:white;" class="page-scroll" id ="#index" href="\proyecto\proyecto\startbootstrap-creative-gh-pages\canchas\VerIngreso.php">Ver canchas reservadas</a>
                    </li><li>
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/info.html">Informacion de las canchas</a>
                    </li>
                   
                </ul>
            </div>
  </div>
  </nav>

<div class="pen-title">

  <h1>Alquiler de canchas</h1>
<form method="post" action="server.php" >
<div style="position:center; ">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
<div style="font-size:17px; width:13px;">
	<div>
        <label id="fl" style="font-size:14px; position: relative; top:5px;">Nombre: </label>
		<input required="required" style="width:300px; position: relative; top: -12px; left: 100px" type="text" placeholder="nombre" name="name" value="<?php echo $name; ?>">
	</div>
	<div >
        <label id="fl" style="font-size:14px; position: relative; top:5px;">Tipo: </label>
		<select required="required" style="position: center; position: relative; top: -12px; left: 100px" name="address" <?php echo $campo3; ?>">>
        <option>Activar</option>
        <option>Desactivar</option>
        </select>
	</div>
<div>
        <label id="fl" style="font-size:14px; position: relative; top:5px;">Estado: </label>
		<select required="required" style="position: center; position: relative; top: -12px; left: 100px" name="campo1" <?php echo $campo3; ?>">>
        <option>Tipo de cancha</option>
        <option>Futbol 5</option>
        <option>Futbol 8 </option>
      </select>
	</div>
    </div>
	<div >
	</div>
<br/>
<br/>
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: orange;" >Guardar Cambios</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" style="background-color:orange; color:white; border-color:orange; width:276px">Reservar</button>
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

<?php $results = mysqli_query($db, "SELECT * FROM cancha"); ?>
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
