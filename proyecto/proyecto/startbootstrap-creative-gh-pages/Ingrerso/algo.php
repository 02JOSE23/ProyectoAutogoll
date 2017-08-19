<?php session_start();

include('server.php');
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $name = $n['name'];
      $address = $n['address'];
      $campo1 = $n['campo1'];
    $campo2 = $n['campo2'];
    }

  }



$DataCertificados = CertificadosController::buscarID($_GET["id"]);
$DataEntregable = EntregableController::buscarID($DataCertificados->getIdEntregables());
$DataLicitacion = LicitacionController::buscarID($DataEntregable->getIdLicitacion());

$nombreSecretaria= SecretariaController::inputSecretaria($_SESSION["DataPersona"]["idSecretarias"]);


$fecha= date("d")." de ".date("m")." del ".date("Y");
error_reporting(0);
var_dump($nombreSecretaria);
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('dejavusans', '', 9);
$pdf->AddPage();

$html='
<!DOCTYPE html>
<html>
<head>
  <title>Ingreso de productos </title>
<link rel="icon" href="img\descarga.jpg" type="image/x-icon">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/creative.min.css" rel="stylesheet">
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
                        <a style="color:white;" class="page-scroll" id ="#index" href="\proyecto\proyecto\startbootstrap-creative-gh-pages\Ingrerso\VerIngreso.php">Ver ingreso de productos</a>
                    </li>
                   
                </ul>
            </div>
  </div>
  </nav>

<div class="pen-title">

  <h1>Ingreso De Productos</h1>
<form method="post" action="server.php" >
<div style="position:center; ">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
<div style="font-size:14px; width:10px">
  <div>

    <label id="fl" style="font-size:12px; position: relative; top:10px;">Fecha: </label>
    <input required="required" style="width:300px" type="date" name="name" value="<?php echo $name; ?>">
  </div>
  <div >

        <label id="fl" style="font-size:12px; position: relative; top:10px;">Nombre Del Producto: </label>
    <input required="required" style="width:300px" type="text" name="address" value="<?php echo $address; ?>">
  </div>
  <div>

        <label id="fl" style="font-size:12px; position: relative; top:10px;">Cantidad: </label>
    <input required="required" style="width:300px" type="number" name="campo1" value="<?php echo $campo1; ?>">
  </div>
  <div>

        <label id="fl" style="font-size:12px; position: relative; top:10px;">Valor Por Unidad: </label>
    <input required="required" style="width:300px" type="number" name="campo2" value="<?php echo $campo2; ?>">
  </div>
  <div >
  </div>
<br/>
<br/>
    <?php if ($update == true): ?>
      <button class="btn" type="submit" name="update" style="background: orange;" >Guardar Cambios</button>
    <?php else: ?>
      <button class="btn" type="submit" name="save" style="background-color:orange; color:white; border-color:orange">Ingresar</button>
    <?php endif ?>
    <br/>
    <br/>
     <button  class="btn" style="background-color:orange; color:white; border-color:orange; width:277px" >
        <a id="#prop" href="/proyecto/proyecto/Administrador/index.php" style=" color:white; ">Volver</a></button>
    
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

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
<div style="text-aling: center">
<table>
  <thead>
    <tr style="position:center; left:-3px; border-spacing:20px; margin:auto; border:1px solid black; text-align:left">
    
      <th>Fecha</th>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Valor</th>
      <th>Total</th>
      <th colspan="2">Opcion</th>
    
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr style="position:center; left:-3px; border-spacing:20px; margin:auto; text-align: left">
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['campo1']; ?></td>
      <td><?php echo $row['campo2']; ?></td>
                  <td><?php echo $row['total']?><td>

      <td>
        <a style="background-color:orange; color:white; border-color:orange;" href="6IngProduct.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Editar</a><br><br>
      
        <a style="background-color:orange; color:white; border-color:orange;"  href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Eliminar</a>
      </td>
    </tr>
  <?php } ?>
</table>
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
;

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->lastPage();
ob_end_clean();
$pdf->Output('pdfcerticados.pdf', 'I');



?>