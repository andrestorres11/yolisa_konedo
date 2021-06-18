<?php

include_once "modelos/usuario.php";

class Session {

    
    var $codigo, //Este codigo identifica la aplicacion en la base de datos de seguridad
        $usuario_aplicacion, //El usuario que hace uso de la aplicaci�n
        $conexion; //EL enlace que debe establecer con la base de datos

    function __construct() {
        $this->Principal();
    }

    function Principal() {
        if (!isset($_REQUEST['op']) ) {
            $this->Formulario();
        } else {
            switch ($_REQUEST['op']) {
                case "1":
                    $this->Validar();
                case "2":
                    $this->Logout();
                default:
                    $this->Formulario();
                	break;
            }
        }
    }

	//FIN FUNCION FORMULARIO
    function Formulario($mensaje = "") {
        $tmpl_file = "vistas/login.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"" . $thefile . "\";";
        eval($thefile);
        print $r_file;
    }   

    function Validar() {
		if (($_REQUEST["usuario"] == "") || ($_REQUEST["contrasena"] == "")) {
            $this->Formulario("Ingrese sus datos.");
        } else {
            $usuario = new Usuario();
            
			$validacion = $usuario->Validar($_REQUEST["usuario"], $_REQUEST['contrasena']);
            session_start();

			echo "<pre>";
				print_r($validacion);
			echo "</pre>";
        }
    }

	//fin funcion validar
    function Logout() {
        if (isset($_REQUEST["ajax"]) && $_REQUEST["ajax"] == "on") {
            $usuario = new Usuario();
    
            $validacion = $usuario->cerrarSession();
            return $validacion;
        }
    }

}

//Se instancia la session para que comience la aplicación
$proceso = new Session();
?>