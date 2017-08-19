<?php
session_start();
if (empty($_SESSION['id'])){
    header("Location: ../startbootstrap-creative-gh-pages/login.php");
}else
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" href="img\descarga.jpg" type="image/x-icon">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light" ></span> Autogol
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="font-size:10px;">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="\proyecto\proyecto\startbootstrap-creative-gh-pages\Ingrerso/6IngProduct.php">Ingreso De Productos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/Venta/6IngProduct.php">Venta de productos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="\proyecto\proyecto\startbootstrap-creative-gh-pages\alquiler/6IngProduct.php">Alquiler De Canchas</a>
                    </li>
                       <li>
                        <a class="page-scroll" href="\proyecto\proyecto\startbootstrap-creative-gh-pages\personal/6IngProduct.php">Ingreso de personal</a>

                    </li>  <li>
                        <a class="page-scroll" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/4Crea.php">Inventario</a>

                    </li><li>
                        <a class="page-scroll" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/canchas/6IngProduct.php">Estado de canchas</a>

                    </li>
                    <li>
                        <a class="page-scroll"  href="\proyecto\proyecto\startbootstrap-creative-gh-pages\login.php">Cerrar Sesion</a>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </header>




    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>AutoGol - Sogamoso</h2>
                <p>Autolavado (Ultima Tecnología) Canchas Sintéticas Lavado con espuma Zona WiFi Mini Market ABIERTO TODOS LOS DIAS DE 7 AM – 9 PM DIRECCIÓN: Kilómetro 0 Vía Sogamoso – Tibasosa TELÉFONOS: 773 6770 – 318 261 8865 Síguenos en Facebook: Chanchas Autogol  !</p>
                <p><a href="mailto:feedback@startbootstrap.com">autogolcanchas@hotmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a style="color:white;" href="https://Facebook.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a style="color:white; href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google fa-fw"></i> <span class="network-name">Gmail</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->


    <!-- Footer -->
    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<br/>
<br/>
<br/>
<br/>
<br/>


<footer>
        <div class="container text-center">
            <p>autogolcanchas@hotmail.com</p>
        </div>
    </footer>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
