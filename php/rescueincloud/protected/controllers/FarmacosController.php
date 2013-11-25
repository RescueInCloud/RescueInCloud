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
            /*$model=new Usuarios();
            $datos=$model->getUsuarios();
            $this->render('index',compact("datos"));*/
	}
	
    
    public function actionListFarmacos()
    {
            $model=new Farmacos();
            $datos=$model->getFarmacos();
            $this->render('ListFarmacos', compact("datos"));
    }
  
    public function actionAddFarmacos()
    {
            //$model= new Farmacos();
            //$this->render('AddFarmacos',compact("model"));
            $this->render('AddFarmacos');
    }
        
}
?>
