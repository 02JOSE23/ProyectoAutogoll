<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM alquiler WHERE id=$id");

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
	<title>Alquiler de canchas</title>
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
  <link rel="icon" href="img\descarga.jpg" type="image/x-icon">
     <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="img\descarga.jpg" type="image/x-icon">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
 <link rel="stylesheet" href="\proyecto\proyecto\startbootstrap-creative-gh-pages/algo/theme.css">
</head>
<body id="page-top" style="background-color:white; color:black;">
<div class="pen-title">
<br/>
<br/>
<br/>
<br/>
<br/>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #A9CCE3;">
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
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/startbootstrap-creative-gh-pages/index.php">Volver</a>
                    </li>
                   
                </ul>
            </div>
  </div>
  </nav>

<div class="pen-title">

  <h1>Alquiler de canchas</h1>
<br/>
<br/>
<br/>
<div class="container" id="cnt1">
    <div class="row feature" style="background-color:white;">
        <div class="col-md-4">
            <div>
                <img src="img/donald_trump1600.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                <h2>Campeonatos</h2>
                <p>AutoGol hace campeonatos con el fin de insentivar el deporte ya que el deporte es salud y ademas logra la integracion y fortalecimiento del trabajo en equipo frente a situaciones reales de competencia.
                Esta integracion y fortalecimiento del trabajo en equipo puede ser util en distintos ambientes de nuestra vida diaria ya sea nuestro campo laboral, nucleo familiar o nuestra vida social.  
                                       
                </p>
                
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="img/Icons8_flat_manager.svg.png" class="img-circle img-thumbnail">
                <h2>Promociones</h2>
                <p>
                    Las promociones de AutoGol son creadas para satisfazer aún mas a nuestra distinguida clientela y llamar la atencion de nuevos amantes del deporte ya que en nuestro establecimiento encontraran un hambiente agradable, sano para disfrutar los mejores momentos en familia y con amigos.
                </p>

            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="img/Man.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                <h2>AutoGol</h2>
                <p>
                Auto Gol ofrece el servicio de 
                   Autolavado con (Ultima Tecnología) Canchas Sintéticas, Lavado con espuma, tenemos Zona WiFi, Mini Market ABIERTO TODOS LOS DIAS DE 7 AM – 9 PM DIRECCIÓN: Kilómetro 0 Vía Sogamoso – Tibasosa TELÉFONOS: 773 6770 – 318 261 8865 Síguenos en Facebook: Chanchas Autogol !      
                </p>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
<h1>Atencion!</h1>
    <br/>
    <br/>
    <br/>
    <div class="container pricing-table-container" id="cnt3">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-sm-8 col-md-8">
                <p><strong>Cancha Sintetica Futbol 5 AutoGol!</strong></p>
              </div>
              <div class="col-sm-4 col-md-4">
                
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3 col-md-3 price_border">
                <p class="price">80$</p>
              </div>
              <div class="col-sm-7 col-md-7">
                <ul style="text-align: left">
                  <li>Cancha sintetica Futbol 5 <span class="glyphicon glyphicon-ok"></span></li>
                  <li>Petos <span class="glyphicon glyphicon-ok"></span></li>
                  <li>Tribuna cubierta <span class="glyphicon glyphicon-ok"></span></li>
                  <li>Zona de parqueadero <span class="glyphicon glyphicon-ok"></span></li>
                </ul>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-sm-8 col-md-8">
                <p><small>Cancha sintetica Futbol 8 AutoGol</small></p>
              </div>
              <div class="col-sm-4 col-md-4">
               
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3 col-md-3 price_border">
                <p class="price">120$</p>
              </div>
              <div class="col-sm-7 col-md-7">
                <ul>
                  <li>Cancha sintetica Futbol 8 <span class="glyphicon glyphicon-ok"></span></li>
                  <li>Zona Wi-Fi <span class="glyphicon glyphicon-ok"></span></li>
                  <li>Zona de comidas<span class="glyphicon glyphicon-ok"></span></li>
                  <li>Vestier para damas y caballeros <span class="glyphicon glyphicon-ok"></span></li>
                </ul>
              </div>
              <div class="col-sm-2 col-md-2 qrdiv">
                <div id="qrcode1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-sm-8 col-md-8">
                <p><strong>Prohibiciones</strong></p>
              </div>
              <div class="col-sm-4 col-md-4">
                
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3 col-md-3 price_border">
                <p class="price">0$</p>
              </div>
              <div class="col-sm-7 col-md-7">
                <ul>
                  <li>Uso de guayos <span class="glyphicon glyphicon-remove"></span></li>
                  <li>Uso de ropa inadecuada <span class="glyphicon glyphicon-remove"></span></li>
                  <li>Ingreso de armas <span class="glyphicon glyphicon-remove"></span></li>
                  <li>Ingreso de celulares <span class="glyphicon glyphicon-remove"></span></li>
                </ul>
              </div>
              <div class="col-sm-2 col-md-2 qrdiv">
                <div id="qrcode2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
    .pricing-table-container {
        margin-top: 25px;
    }

    .pricing-table-container p {
        font-size: 20px;
        margin-bottom: 0px;
        padding-top: 3px;
    }

    .pricing-table-container small {
        font-size: 13px;
    }

    .pricing-table-container .price_border {
        border-right: 1px dotted black;
        height: 7em;
    }

    .pricing-table-container .price {
        color: green;
        font-size: 60px;
        text-align: center;
    }

    .pricing-table-container .qrdiv {
        border-left: 1px dotted black;
        height: 7em;
    }

    .pricing-table-container .paragraph_options {
        font-size: 12px;
        margin-bottom: 7px;
    }

    .pricing-table-container .pricing-table-container ul li {
        font-size: 15px;
        border-bottom: 1px solid black;
    }

@media screen and (max-width: 768px) {
    .pricing-table-container .price_border {
        border: none;
    }

    .pricing-table-container .qrdiv {
        border: none;
        margin-left: 75px;
    }

    .pricing-table-container ul {
        -webkit-padding-start: 0;
    }

    .pricing-table-container ul li {
        list-style-type: none;
    }
}
</style>
<br/>
<br/>
<h1>Reservas!</h1>
<br/>
<br/>
<br/>
</form>
 





	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg" style="background-color:orange; color:white; border-color:orange">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM alquiler"); ?>
<div style="text-align: right;">
Buscar: <input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Nombre del cliente..">
<br/>
<br/>
<br/>
<table id="myTable" style="position:relative; left:120px;  ">
	<thead>
		<tr style="position:relative; left:-160px; border-spacing:15px; margin:auto;">
			<th>Fecha</th>
            <th>Cliente</th>
            <th>Documento</th>
            <th>Tiempo</th>
            <th>Cancha</th>
            <th>Valor</th>
               <th>Total</th>


</tr>


<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
         
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr style="position:relative; left:-150px; border-spacing:15px; margin:auto">
			<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['campo1']; ?></td>
            <td><?php echo $row['campo2']; ?></td>
            <td><?php echo $row['campo3']; ?></td>
            <td><?php echo $row['campo4']; ?></td>
            <td><?php echo $row['total']; ?></td>
			
		</tr>
	<?php } ?>
</table>
</div>

<br/>
<br/>
<br/>

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
