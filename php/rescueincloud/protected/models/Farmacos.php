<?php
class Farmacos extends CActiveRecord
{
    private $connection;
    public $no_usuario;
    public $no_farmaco;
    public $no_fabricante;
    public $no_quimico;
    public $des_farmaco;
    
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
        //$sql="select * from farmacos;";
        
        $sql="select * from farmacos_V2;";
        //query() ->método que devuelve objetos, pero muy poco visible a la hora de presentarlos.
        $dataReader=$this->connection->createCommand($sql)->query();
        
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    

    //Inserción de un fármaco en la base de datos.
    public function insertFarmacos()
    {
        //XXX: cambiar farmacos_V2 por farmacos una vez reorganizada la bbdd.
                
        $sql="INSERT INTO farmacos_V2 (id_farmaco, email_usuario, nombre_farmaco, nombre_fabricante, nombre_quimico, creado_en, modificado_en, descripcion_farmaco, borrado) VALUES (NULL, ?, ?, ?, ?, now(), '0000-00-00 00:00:00', ?, '0' )";
        
        $command=$this->connection->createCommand($sql);
            
        $command-> bindValue(1,$_POST["Farmacos"]["no_usuario"],PDO::PARAM_STR);
        $command-> bindValue(2,$_POST["Farmacos"]["no_farmaco"],PDO::PARAM_STR);
        $command-> bindValue(3,$_POST["Farmacos"]["no_fabricante"],PDO::PARAM_STR);
        $command-> bindValue(4,$_POST["Farmacos"]["no_quimico"],PDO::PARAM_STR);
        $command-> bindValue(5,$_POST["Farmacos"]["des_farmaco"],PDO::PARAM_STR);
        
        $command->execute();
        return true;
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