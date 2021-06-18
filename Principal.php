<?php



class Principal {

    var $codigo, //Este codigo identifica la aplicacion en la base de datos de seguridad
        $usuario_aplicacion, //El usuario que hace uso de la aplicaci�n
        $conexion; //EL enlace que debe establecer con la base de datos

    function __construct() {
        $this->Principal();
    }

    function Principal() {
        if (!isset($_REQUEST['op']) ) {
            $this->vistaPrincipal();
        } else {
            switch ($_REQUEST['op']) {
                case "1":
                    $this->vistaPrincipal();
                default:
                    $this->vistaPrincipal();
                	break;
            }
        }
    }

	//FIN FUNCION FORMULARIO
    function vistaPrincipal() {
        $html = '';
     echo $html;
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
        if ($_REQUEST["ajax"] == "on") {
            $usuario = new Usuario();
    
            $validacion = $usuario->cerrarSession();
            return $validacion;
        }
    }

}

//Se instancia la session para que comience la aplicación
$proceso = new Principal();
?>