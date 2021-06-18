<?php 
session_start();
include_once "lib/conexion.php";

class Aplicacion_Seguridad {

    var $codigo;//Este codigo identifica la aplicacion en la base de datos de seguridad
    var $usuario_aplicacion;//El usuario que hace uso de la aplicación
    var $conexion;//EL enlace que debe establecer con la base de datos

    function Aplicacion_Seguridad() {
        $this->codigo = 1;
        $this->conexion = new Conexion();
        //Se crea la conexión a la base de datos
        $this->principal();
    }

    function Principal() {
        if ($this->inicio_sesion()) {
            $this->paginaPrincipal();
        } else{
            header("Location: session.php");
        }
    }

    function inicio_sesion() {
        if (session_id() == $_SESSION["id"]) {
            return true;
        } else {
            header("Location: session.php");
        }
    }
    
    //Con esta función se incluye el servicio seleccionado o de no estarlo se presenta la pantalla de inicio
    function paginaPrincipal() {
        $titulo = "yolisa konedo";
        include "vistas/index.php";
        // $tmpl_file = "vistas/index.php";
        // $thefile = implode("", file($tmpl_file));
        // $thefile = addslashes($thefile);
        // $thefile = "\$r_file=\"" . $thefile . "\";";
        // eval($thefile);
        // print $r_file;
    }

    function inicio() {
        include_once("../" . DIR_APLICA_CENTRAL . "/index/index.php");
        die();
    }


}

$aplicacion = new Aplicacion_Seguridad();
