<?php
 
 
 /*
	Codes and messages
	===== === ========
	By default an unknow problem wil be -1.
	
	-1	Unknown problem.
        100     usuario valido
        101     usuario o contraseña invalida
  *     102     usuario o contraseña no proporcionadas
        ...
  *
  *     200     OK
  *

	
*/
 
header("Content-Type: text/html;charset=utf-8");

class DB_Functions {

    private $db;
    private $con;
 
    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->con = $this->db->connect();
    }
 
    // destructor
    function __destruct() {
    }
    
    private function validar($email, $password){
        
        $sql = $this->con->prepare('
        SELECT EXISTS(SELECT 1 FROM usuarios WHERE email_usuario=? and password=? )');
        $sql->execute(array($email,$password));

        $username_exists = (bool) $sql->fetchColumn();
        if(!$username_exists){
            return false;
        }
            
        return true;
    }
    
    private function fetch_protocolos($email){
        
        $sql = $this->con->prepare('
        SELECT ct.*
        FROM protocolos p
        INNER JOIN cajatexto ct ON ct.id_protocolo=p.id_protocolo
        WHERE p.email_usuario=? and p.borrado=false');

        $sql->execute(array($email));
        $cajas = $sql->fetchAll();

        $sql2 = $this->con->prepare('
        SELECT ch.*
        FROM protocolos p
        INNER JOIN cajatexto_hijos ch ON p.id_protocolo=ch.id_protocolo
        WHERE
        p.email_usuario=? and p.borrado=false');

        $sql2->execute(array($email));
        $relaciones = $sql2->fetchAll();

        $message = array("cajas"=>$cajas, "relaciones"=>$relaciones);

        return $message;
    }

    
    private function fetch_farmacos($email){
        
        $sql = $this->con->prepare('
        SELECT Pro.*
        FROM farmacos_propios                Pro,
             rel1n_farmacos_propios_usuarios PrU
        WHERE Pro.id_farmaco    = PrU.id_farmaco
          AND PrU.borrado       = 0
          AND PrU.email_usuario = ?

        UNION 

        SELECT Pub.*
        FROM farmacos_publicos                Pub,
             relnm_farmacos_publicos_usuarios PuU
        WHERE Pub.id_farmaco    = PuU.id_farmaco
          AND PuU.borrado       = 0
          AND PuU.email_usuario = ?');

        $sql->execute(array($email,$email));
        $filas = $sql->fetchAll();
        
        return $filas;
    }
    
    private function fetch_notas($email){
        
        $sql = $this->con->prepare('
        SELECT * FROM notas WHERE email_usuario = ?');

        $sql->execute(array($email));
        $filas = $sql->fetchAll();
        
        return $filas;
    }
    
    public function fetch_all($email,$password){
        
        if(!$this->validar($email, $password)){
            $result=array("code"=>"101", "message"=>"usuario invalido");
            return $result;
        }
        
        $protocolos = $this->fetch_protocolos($email);
        $farmacos = $this->fetch_farmacos($email);
        $notas = $this->fetch_notas($email);
        
        $result=array(  "code"=>"200", 
                        "protocolos"=>$protocolos, 
                        "farmacos"=>$farmacos,
                        "notas"=>$notas);
        return $result;
    }

    public function lista_farmacos($email, $password){

        if(!$this->validar($email, $password)){
            $result=array("code"=>"101", "message"=>"usuario invalido");
            return $result;
        }

        $filas = $this->fetch_farmacos($email);

        $result=array("code"=>"200", "message"=>$filas);
        return $result;

    }

    public function lista_notas($email,$password){

        if(!$this->validar($email, $password)){
            $result=array("code"=>"101", "message"=>"usuario invalido");
            return $result;
        }

        $filas = $this->fetch_notas($email);

        $result=array("code"=>"200", "message"=>$filas);
        return $result;

    }


    public function lista_protocolos($email,$password){

        if(!$this->validar($email, $password)){
            $result=array("code"=>"101", "message"=>"usuario invalido");
            return $result;
        }

        $message = $this->fetch_protocolos($email);

        $result=array("code"=>"200", "message"=> $message);
        return $result;

    }

    public function close(){
        $this->con = null;
    }
	
		
}
 
?>


