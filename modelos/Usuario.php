<?php
 
 require_once 'lib/Conexion.php';
 
 class Usuario {
    private $idUsuario;
    private $identificacion;
    private $contrasena;
    private $nombres;
    private $apellidos;
    private $edad;
    private $telefono;
    private $correo;
    const TABLA = 'usuario';

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getContrasena(){
        return $this->contrasena;
    }
    public function getNombres(){
        return $this->nombres;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getCorreo(){
        return $this->correo;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function __construct($idUsuario=null, $identificacion=null, $contrasena=null, $nombres=null, 
                                $apellidos=null, $edad=null, $telefono=null, $correo=null) 
    {
        $this->idUsuario = $idUsuario;
        $this->identificacion = $identificacion;
        $this->contrasena = $contrasena;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    public function guardar(){
        $conexion = new Conexion();
        if($this->id) /*Modifica*/ {
            $consulta = $conexion->prepare(
               'UPDATE ' . self::TABLA .' 
                   SET identificacion = :identificacion, 
                       contrasena = :contrasena,
                       nombres = :nombres,
                       apellidos = :apellidos,
                       edad = :edad,
                       telefono = :telefono,
                       correo = :correo
                 WHERE id = :id'
            );
            $consulta->bindParam(':identificacion', $this->identificacion);
            $consulta->bindParam(':contrasena', $this->contrasena);
            $consulta->bindParam(':nombres', $this->nombres);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':edad', $this->edad);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':correo', $this->correo);
            $consulta->bindParam(':id', $this->idUsuario);
            $consulta->execute();
        }else /*Inserta*/ {
            $consulta = $conexion->prepare(
               'INSERT INTO ' . self::TABLA .' 
                            (identificacion, contrasena, nombres, apellidos, edad, telefono, correo) 
                     VALUES (:identificacion, :contrasena, :nombres, :apellidos, :edad, :telefono, :correo)');
            $consulta->bindParam(':identificacion', $this->identificacion);
            $consulta->bindParam(':contrasena', $this->contrasena);
            $consulta->bindParam(':nombres', $this->nombres);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':edad', $this->edad);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':correo', $this->correo);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function validar($usuario=NULL, $contrasena=NULL){
        try {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .' WHERE correo = "'.$usuario.'" limit 1');
            $consulta->execute();
            $resultado = $consulta->fetchAll();
            
            if ($resultado[0]['contrasena'] == base64_encode($contrasena)) {
                session_start();
                $nom_sesion = session_name($usuario);
                $_SESSION[datos_usuario] = $resultado;
                $_SESSION[id] = session_id();
                $_SESSION[ip] = $_SERVER["REMOTE_ADDR"];
                header("Location: index.php");
                return true;
            }else{
               return  '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
               <script type="text/javascript"> 
                Swal.fire({
                    icon: "error",
                    title: "Acceso invalido",
                    text: "Usuario o contraseña invalidos",
                    confirmButtonColor: "#d33"
                });
               </script>';
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function cerrarSession(){
        session_start();
        // Destruye todas las variables de la sesi&oacute;n
        session_unset();
        // Finalmente, destruye la sesi&oacute;n
        session_destroy();
        return true;
    }
 }
?>