<?php

class Notas {
   
    private $connection;
    
    public function __construct(){
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
    
    public function listar_notas_usuario($ini, $lenght, $email_usuario){
        
        $sql="SELECT *
              FROM notas
              WHERE borrado       = 0
                AND email_usuario = '".$email_usuario."'";
        
        $sql.=" LIMIT ".$ini.", ".$lenght;
        $result_rows=$this->connection->createCommand($sql)->queryAll();
        
        return $result_rows;
    }
    
     public function num_notas($email_usuario){
        
        $sql ="SELECT COUNT(*)
               FROM
               (
                SELECT *
                FROM notas
                WHERE borrado       = 0
                  AND email_usuario = '".$email_usuario."'
                )Notas";
        $result_rows=$this->connection->createCommand($sql)->queryScalar();
        
        return $result_rows;
        
    }
    
    public function editar_nota($id_nota, $nombre_nota, $descripcion, $email_usuario){
        $transaction=$this->connection->beginTransaction();
        try
        {
           
            $sql="UPDATE notas 
                  SET nombre_nota        = '".$nombre_nota."', 
                      nota_modificada_en = NOW(),
                      descripcion        = '".$descripcion."' 
                  WHERE id_nota       = ".$id_nota." 
                    AND email_usuario = '".$email_usuario."';";
            $command=$this->connection->createCommand($sql);
            $row_count = $command->execute();
                
            
            $transaction->commit();
                       
        } catch (Exception $ex) 
        {
            $transaction->rollBack();
        }
        
    }
    
    public function insertar_nota ($nombre_nota, $descripcion_nota, $email_usuario) {
        $transaction=$this->connection->beginTransaction();
        try
        {
            $sql="INSERT INTO notas ";
            $sql.="VALUES (NULL,'".$nombre_nota."','".$email_usuario."','".$descripcion_nota."', now(), '0000-00-00 00:00:00', 0, 0)"; 
            
            $command=$this->connection->createCommand($sql);
            $row_count = $command->execute();
            
                            
            $transaction->commit();
                       
        }
        catch(Exception $e) // se arroja una excepción si una consulta falla
        {
            $transaction->rollBack();
        }
        
    }
    
    public function obtener_nota ($id, $email_usuario) {
        $transaction=$this->connection->beginTransaction();
        try
        {
            $sql="SELECT *
                    FROM notas
                   WHERE id_nota = ".$id."
                     AND email_usuario = '".$email_usuario."';";
           
            $command=$this->connection->createCommand($sql);
            $row_count = $command->queryAll();
                        
            $transaction->commit();
            
            return $row_count[0];
            
        } catch (Exception $ex) 
        {
            $transaction->rollBack();
        }
         
    }
        
    public function eliminar_nota($id, $email_usuario) {
        
        $transaction=$this->connection->beginTransaction();
        try
        {
            $sql="UPDATE notas 
                      SET borrado = 1 
                      WHERE id_nota       = ".$id." 
                        AND email_usuario = '".$email_usuario."';";                
           
            $command=$this->connection->createCommand($sql);
            $row_count = $command->execute();
                      
            $transaction->commit();
            
            return $row_count;
            
        } catch (Exception $ex) 
        {
           $transaction->rollBack(); 
        }
        
    }
}

?>

