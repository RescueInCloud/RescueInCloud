<?php
class Farmacos extends CActiveRecord
{
    private $connection;
    public $no_usuario;
    public $no_farmaco;
    public $no_fabricante;
    public $no_presentacion;
    public $no_administracion;
    public $des_farmaco;
    public $res;
    
    public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    
    public static function model ($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    
    public function rules()
    {
        return array
        (
            //array("no_usuario,no_farmaco,no_fabricante,no_quimico","required"),
            array("no_usuario,no_farmaco,no_fabricante,no_presentacion,no_administracion","ext.FarmacosValidation"),
            array("no_usuario","email")
        );        
    }
    
    //Lectura de farmacos de la tabla farmacos.
    public function getFarmacos()
    {
        //$sql="SELECT * FROM farmacos;";
        $sql="SELECT * FROM farmacos_tmp;";
        
        $dataReader=$this->connection->createCommand($sql)->query();
        
        $rows=$this->connection->createCommand($sql)->queryAll();
        return $rows;
    }
    

    //Inserci�n de un f�rmaco en la base de datos.
    public function insertFarmacos()
    {
        //XXX: cambiar farmacos por farmacos una vez reorganizada la bbdd.
        $sql="INSERT INTO farmacos_tmp (id_farmaco, email_usuario, nombre_farmaco, nombre_fabricante, presentacion_farmaco, tipo_administracion, creado_en, modificado_en, descripcion_farmaco, borrado) VALUES (NULL, ?, ?, ?, ?, ?, now(), '0000-00-00 00:00:00', ?, '0' )";
        
        $command=$this->connection->createCommand($sql);
            
        $command-> bindValue(1,$_POST["Farmacos"]["no_usuario"],PDO::PARAM_STR);
        $command-> bindValue(2,$_POST["Farmacos"]["no_farmaco"],PDO::PARAM_STR);
        $command-> bindValue(3,$_POST["Farmacos"]["no_fabricante"],PDO::PARAM_STR);
        $command-> bindValue(4,$_POST["Farmacos"]["no_presentacion"],PDO::PARAM_STR);
        $command-> bindValue(5,$_POST["Farmacos"]["no_administracion"],PDO::PARAM_STR);
        $command-> bindValue(6,$_POST["Farmacos"]["des_farmaco"],PDO::PARAM_STR);
        
        $res = $command->execute();
//        $res = mysql_query($sql);
//        if (!$res) {
//            die('No se pudo consultar:' . mysql_error());
//        }
//        echo $res->item(1);
        
        return $res;
    }
    
    
    //B�squeda de un f�rmaco en la base de datos a partir de un nombre.
    public function buscarFarmacos()
    {
        $sql="SELECT * FROM farmacos_tmp WHERE nombre_farmaco LIKE '%{$this->no_farmaco}%' ORDER BY id_farmaco;";
        
        $dataReader=$this->connection->createCommand($sql)->query();
        $rows=$this->connection->createCommand($sql)->queryAll();
        
        return $rows;
    }

}
?>