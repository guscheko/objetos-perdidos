<?php 
include_once 'database.php';
include_once 'registrate.php';
class Usuarios {

    private $nombre;
    private $correo;

    public function usuarioExiste($correo,$password){
        $md5password = md5($password);

        $query = $this->conn()->prepare('SELECT * FROM registro WHERE correo = :correo AND pasword = :password');
         $query->execute(['user'=> $correo,'password'=>$md5password]);
         
         if($query->rowCount()){

            return true;
            }else{
                return false;
            }
         }

         public function setUsuario($correo){
            $query = $this->conn()->prepare('SELECT * FROM registro WHERE correo = :correo');
            $query->execute(['user'=> $correo,]);

            foreach($query as $currentUsuario){
                $this->nombre = $currentUsuario['nombre'];  
                $this->telefono = $currentUsuario['telefono'];  
                $this->correo = $currentUsuario['correo'];  
                $this->password = $currentUsuario['password'];    
            }
         }
         public function getNombre(){
            return $this->nombre;
        }
    }

?>