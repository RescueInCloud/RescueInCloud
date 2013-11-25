<?php
class Farmacos extends CActiveRecord
{
    private $connection;
    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    
    public static function model ($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    
    //Lectura de farmacos de la tabla farmacos.
    public function getFarmacos()
    {
        $sql="select * from farmacos;";
        //query() ->método que devuelve objetos, pero muy poco visible a la hora de presentarlos.
        $dataReader=$this->connection->createCommand($sql)->query();
        
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
}
?>