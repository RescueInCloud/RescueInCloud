<?php
class Usuarios extends CActiveRecord
{
    private $connection;
    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function getUsuarios()
    {
        $sql="select * from usuarios;";      
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
}