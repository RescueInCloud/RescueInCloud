<?php
class Usuarios extends CActiveRecord
{
    private $connection;
    public $nombre;
    public $login;
    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function rules()
    {
        return array(
            array('login', 'required'),
          
        );
    }
    
     //Create
    public function registerUsuario($email_usuario, $dni, $nombre, $apellidos, $genero, $fecha_nacimiento, $centro_trabajo){
        $sql="insert into Usuarios (email_usuario,dni, nombre, apellidos, genero, fecha_nacimiento, centro_trabajo) values ('{$email_usuario}', '{$dni}','{$nombre}', '{$apellidos}', '{$genero}', '{$fecha_nacimiento}', '{$centro_trabajo}')";
        $rows_affected=$this->connection->createCommand($sql)->execute();
        return $rows_affected;
    }
    
    //Read
    public function login()
    {
            $user=Usuarios::model()->find('email_usuario=?',array($this->login));
            return $user;
    }
    
    //Read
    public function getUsuarios()
    {
        $sql="select * from Usuarios;";      
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    
    //Read
    public function getUsuario($email_usuario){
        $sql="select * from Usuarios where 1=1 and ";
        $sql.= "email_usuario='".$email_usuario."' ;";
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    
    
    //Update
    public function updateUsuario($email_usuario){
       //Not now
    }
    
    //Delete
    public function deleteUsuario($email_usuario){
        $sql="delete from Usuarios where 1=1 and ";
        $sql.= "email_usuario='".$email_usuario."' ;";
        
        $rows_affected=$this->connection->createCommand($sql)->execute();
        return $rows_affected;
    }
}