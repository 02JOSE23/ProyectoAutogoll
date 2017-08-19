<?php
session_start();
require_once (__DIR__.'/login.php');

if(!empty($_GET['action'])){
    loginCtrl::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
/**
 * Created by PhpStorm.
 * User: Cristtian PC
 * Date: 30/06/2017
 * Time: 19:00
 */
class loginCtrl
{

    static function main($action){
        if ($action == "Login"){
            loginCtrl::Login();
        }else if($action == "CerrarSession"){
            loginCtrl::CerrarSession();
        }
    }

    public function Login (){
        try {
            $User = $_POST['User'];
            $Password = $_POST['Password'];
            if(!empty($User) && !empty($Password)){
                $respuesta = login::Login($User, $Password);
                if (is_array($respuesta)) {
                    $_SESSION['id'] = $respuesta['id'];
                    $_SESSION['tipo'] = $respuesta['tipo'];
                        $_SESSION['name'] = $respuesta['name'];

                    echo TRUE;
                }else if($respuesta == "Password Incorrecto"){
                    echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                    echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                    echo "<strong>Error!</strong> La Contraseña No Coincide Con El Usuario</p>";
                    echo "</div>";
                }else if($respuesta == "No existe el usuario"){
                    echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                    echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                    echo "<strong>Error!</strong> No Existe Un Usuario Con Estos Datos</p>";
                    echo "</div>";
                }
            }else{
                echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                echo "<strong>Error!</strong> Datos Vacios</p>";
                echo "</div>";
            }
        } catch (Exception $e) {
            header("Location: ../login.php?respuesta=error");
        }
    }

    public function CerrarSession (){
        session_destroy();
        header("Location: ../login.php");
    }





}