<?php
require_once('Conexion.php');

/**
 * Created by PhpStorm.
 * User: Cristtian PC
 * Date: 30/06/2017
 * Time: 18:49
 */
class login extends Conexion
{

    public function __construct($lol = array())
    {

        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($lol)>1){ //
            foreach ($lol as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
        }
    }


    function __destruct() {
        $this->Disconnect();
        unset($this);
    }


    public static function Login($User, $Password){
        $arrUsuarios = array();
        $tmp = new login();
        $getTempUser = $tmp->getRows("SELECT * FROM usuario WHERE campo4 = '$User'");
        if(count($getTempUser) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM usuario WHERE campo4 = '$User' AND campo5 = '$Password'");
            if(count($getrows) >= 1){
                foreach ($getrows as $valor) {
                    return $valor;
                }
            }else{
                return "Password Incorrecto";
            }
        }else{
            return "No existe el usuario";
        }

        $tmp->Disconnect();
        return $arrUsuarios;
    }


}