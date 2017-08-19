<?php
session_start();
if (!empty($_SESSION['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicio de Sesion</title>
    <script src="login/js/jquery-1.11.3.min.js"></script>
    <script src="login/js/jquery-ui.min.js"></script>
    <link href="login/js/jquery-ui.min.css" rel="stylesheet">

</head>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="login/js/jquery-1.11.3.min.js"></script>
    <script src="login/js/jquery-ui.min.js"></script>
    <link href="login/js/jquery-ui.min.css" rel="stylesheet">
    <title>Iniciar Sesion</title>
    <link rel="icon" href="img\descarga.jpg" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
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

</head>

<body style="background-color:white; color:black;">

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:orange;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a style="color:white;" class="navbar-brand page-scroll" href="#page-top">AutoGol-propietario
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br/>
    <br/>
    <br/>


    <br/>
    <h1>Inicio Sesion</h1><!--span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>
</div-->
    <!-- Form Module-->
    <br/>

    <br/>
    <div class="module form-module">
        <div class="toggle"><!--i class="fa fa-times fa-pencil"></i-->
            <!--div class="tooltip">Click Me</div-->
        </div>
        <div class="form">
            <div id="resultado" name="resultado" class="ui-widget"></div>

            <h2>Inicio Sesion</h2>
            <form id="frmLogin" name="frmLogin">
                <input type="text" class="form-control" value="" id="User" name="User" placeholder="Usuario" required autofocus autocomplete="off">
                <input type="password" class="form-control" value="" id="Password" name="Password" placeholder="Contraseña" required autocomplete="off">

                <button class="btn btn-block bg-pink waves-effect"type="submit" id="btnEnviar" name="btnEnviar" value="Login">Login</button>

                <br/>
                <br/>
                <button >
                    <a id="#prop" href="\proyecto\proyecto\startbootstrap-creative-gh-pages/3Crear.php" style="color:white; ">Volver</a></button>
                <br/>
                <br/>



            </form>
        </div>
        <!--div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
      </div-->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </div>
    <br/>
    <br/>
    <br/>

<script>

    $("#frmLogin").submit(function(e){
        e.preventDefault();

        var User = $("#User").val();
        var Password = $("#Password").val();

        $.ajax({
            method: "POST",
            url: "login/loginCtrl.php?action=Login",
            data: { User: User, Password: Password}
        })

            .done(function( msg ) {
                if(msg == "1"){

                    window.location.href = "comp.php";
                }else{
                    $("#resultado").html(msg);
                }
            });

    });

</script>

</body>

</html>