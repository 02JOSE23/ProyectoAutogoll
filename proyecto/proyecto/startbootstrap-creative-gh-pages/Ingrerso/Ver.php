<?php
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingreso de productos </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="icon" href="img\descarga.jpg" type="image/x-icon">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>



    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <title>Table Quick Edit</title>
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .table.user-select-none {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>
<body onload="viewData()" id="page-top" style="background-color:white; color:black;">
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
                        <a style="color:white;" class="page-scroll" id ="#index" href="http://localhost/proyecto/proyecto/Administrador/index%20-%20propietario.php">Volver</a>
                    </li>
                   
                </ul>
            </div>
  </div>
  </nav>

<div class="pen-title" data-toggle="modal" data-target="#myModal2">

  <h1>Ingreso De Productos</h1>
  </div>
<br/>
<br>

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

Buscar: <input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Nombre del producto..">
<br>
<br>
<br>
<div class="container" style="margin-top:35px">
    <div class="row">
        <div class="col-md-12">
            <table id="mytable" class="table table-bordered table-striped">
	<thead>
		<tr style="position:relative; left:-160px; border-spacing:15px; margin:auto;">
            <th>ID</th>
			<th>Fecha</th>
			<th>Nombre</th>
			<th>Cantidad</th>
            <th>Valor</th>
			<th>Total</th>

		</tr>
        <script>

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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
    <div class="container">

    <button id="exportButton" class="btn btn-lg btn-danger clearfix"><span class="fa fa-file-pdf-o"></span> Descargar PDF</button>
        </div>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr style="position:relative; left:-150px; border-spacing:15px; margin:auto">
            <td><?php echo $row['Id'];?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['campo1']; ?></td>
			<td><?php echo $row['campo2']; ?></td>
            <td><?php echo $row['total']?></td>

		</tr>
	<?php } ?>
</table>
</div>
<body>
    
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#mytable",
                schema: {
                    type: "table",
                    fields: {
                        ID: { type: String },
                        Fecha: { type: String },
                        Nombre: { type: Number },
                        Cantidad: { type: String },
                        Valor: { type: Number },
                        Total: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "ID", title: "id", width: 75},

                        { field: "Fecha", title: "fecha", width: 75},
                        { field: "Nombre", title: "cantidad", width: 75 },
                        { field: "Cantidad", title: "nombre", width: 75 },
                        { field: "Valor", title: "Age", width: 75 },
                        { field: "Total", title: "totall Address", width: 75 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "Factura.pdf"
                });
            });
        });
    });
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>

</body>

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
</div>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tabledit.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script>
        function viewData(){
            $.ajax({
                url: 'demos/demos.php?p=view',
                method: 'GET'
            }).done(function(datas){
                $('tbody').html(datas)
                tableData()
            })
        }
        function tableData(){
            $('#mytable').Tabledit({
                url: 'demos/demos.php',
                eventType: 'click', //dblclick
                editButton: true,
                deleteButton: true,
                hideIdentifier: false,
                saveButton: true,
                autoFocus: true,
                restoreButton: true,
                rowIdentifier: 'id',
                buttons: {
                    edit: {
                        class: 'btn btn-sm btn-warning',
                        html: '<span class="glyphicon glyphicon-pencil"></span> &nbsp Editar',
                        action: 'edit'
                    },
                    delete: {
                        class: 'btn btn-sm btn-danger',
                        html: '<span class="glyphicon glyphicon-trash"></span> &nbsp Eliminar',
                        action: 'delete'
                    },
                    save: {
                        class: 'btn btn-sm btn-success',
                        html: 'Save'
                    },
                    restore: {
                        class: 'btn btn-sm btn-warning',
                        html: '<span class="fa fa-undo"></span> Restore',
                        action: 'restore'
                    },
                    confirm: {
                        class: 'btn btn-sm btn-default',
                        html: 'Are you sure?' //Confirm btn-danger
                    }
                },
                columns: {
                    identifier: [0, 'id'],
                    editable: [[1, 'name'],[2, 'address'],[3, 'campo1'],[4, 'campo2'],[5, 'total']]
                },
                onSuccess: function(data, textStatus, jqXHR) {
                    viewData()
                },
                onFail: function(jqXHR, textStatus, errorThrown) {
                    console.log('onFail(jqXHR, textStatus, errorThrown)');
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                onAjax: function(action, serialize) {
                    console.log('onAjax(action, serialize)');
                    console.log(action);
                    console.log(serialize);
                }
            });
        }
    </script>



</body>

</html>
