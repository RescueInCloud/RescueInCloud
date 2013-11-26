<?php
class Farmacos extends CActiveRecord
{
    private $connection;
    public $no_usuario;
    public $no_farmaco;
    public $no_fabricante;
    public $no_quimico;
    
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
    
    public function rules()
    {
        return array
        (
            //array("no_usuario,no_farmaco,no_fabricante,no_quimico","required"),
            array("no_usuario,no_farmaco,no_fabricante,no_quimico","ext.FarmacosValidation"),
            array("no_usuario","email")
        );
        
    }
}
?>