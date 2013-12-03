<?php
//header('Content-Type: text/html; charset=utf-8');

class Notas extends CActiveRecord {
    private $connection;
    
    public function __construct(){
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    
    //Create
    public function createNota($nombre_nota, $email_usuario, $descripcion, $id_farmaco=NULL){
        $sql="insert into notas (nombre_nota,email_usuario,id_farmaco,descripcion) values ('{$nombre_nota}', '{$email_usuario}','{$id_farmaco}', '{$descripcion}')";
        $rows_affected=$this->connection->createCommand($sql)->execute();
        return $rows_affected;
    }
    
    
    //Read
    public function getNotas($email_usuario)
    {
        $sql="select * from notas where 1=1 and ";
        $sql.= "email_usuario='".$email_usuario."' ;";     
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    
    //Read
    public function getNota($nombre_nota, $email_usuario){
        $sql="select * from notas where 1=1 and ";
        $sql.= "nombre_nota='".$nombre_nota."' and ";
        $sql.= "email_usuario='".$email_usuario."' ;";
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    
    
    //Update
    public function updateNota($nombre_nota, $email_usuario){
       //Not now
    }
    
    //Delete
    public function deleteNota($nombre_nota, $email_usuario){
        $sql="delete from notas where 1=1 and ";
        $sql.= "nombre_nota='".$nombre_nota."' and ";
        $sql.= "email_usuario='".$email_usuario."' ;";
        
        $rows_affected=$this->connection->createCommand($sql)->execute();
        return $rows_affected;
    }
    
    
}

?>
