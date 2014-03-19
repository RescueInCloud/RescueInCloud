<?php

class FarmacosController extends Controller
{
        
	public function actionIndex()
	{
            //$model=new Farmacos();
            //Prueba con validacion de mi email
            $email_usuario = "ale7jandra.89@gmail.com";
            //$datos=$model->getNotas($email_usuario);
            //$this->render('index',compact("datos"));
            $this->render('index');
	}
	
    
    public function actionListFarmacos()
    {
            $model=new Farmacos();
            $datos=$model->getFarmacos();
            $this->render('ListFarmacos', compact("datos"));
    }
  
  
    public function actionAddFarmacos()
    {
            $model= new Farmacos();
            if(isset($_POST["Farmacos"]))
            {
                $model->attributes=$_POST['Farmacos'];
                if($model->validate())
                {
                    $res_insert=$model->insertFarmacos();
                                         
                    if($res_insert <> 0)
                    {
                        Yii::app()->user->setFlash('mensaje','El farmaco se ha insertado correctamente');
                        $this->redirect(Yii::app()->request->baseUrl."/Farmacos");
                    }else
                    {
                        Yii::app()->user->setFlash('mensaje','Se ha producido un error, por favor vuelva a intentarlo.');
                        $this->refresh();
                    }
                }
            }     
            $this->render('AddFarmacos',compact("model"));
    }
    
    
    public function actionBuscarFarmacos()
    {
            $model= new Farmacos();
            if(isset($_POST["Farmacos"]))
            {
                $model->attributes=$_POST['Farmacos'];
                $res_buscar=$model->buscarFarmacos();
                    
                $this->render('ResultadosFarmacos',compact("res_buscar"));
                
            } else {
               $this->render('BuscarFarmacos',compact("model")); 
            }
            
    }
    
	public function actionBuscarFarmacosAjax()
    {
            $model= new Farmacos();
            if(isset($_POST["Farmacos"]))
            {
                $model->attributes=$_POST['Farmacos'];
                $res_buscar=$model->buscarFarmacos();
                    
			    $this->renderPartial('_ajaxContentBusqueda', $res_buscar, false, true); 
            } else {
                die ("No existen resultados disponibles.");
            }       
    }
	
	
    public function actionBuscarFarmacosJQ()
    {
            $model= new Farmacos();
            if(isset($_POST["Farmacos"]))
            {
                $model->attributes=$_POST['Farmacos'];
                //if($model->validate())
                //{
                    //$res_buscar=$model->buscarFarmacos();
                    die("Prueba Busqueda con JQuery");
                    //$this->render('ResultadosFarmacos',compact("res_buscar"));
                    
                    
                //}
            } else {
               $this->render('BuscarFarmacosJQ',compact("model")); 
            }
            
    }
        
}
?>
