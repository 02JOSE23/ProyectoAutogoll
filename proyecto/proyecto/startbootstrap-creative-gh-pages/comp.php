<?php
session_start();
if ($_SESSION['tipo']=="admin"){
    header("Location: ../Administrador/index.php");

}if ($_SESSION['tipo']=="prop"){
    header("Location: ../Administrador/index - propietario.php");


}


