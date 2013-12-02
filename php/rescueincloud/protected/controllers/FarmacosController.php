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
                    if($res_insert)
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
        
}
?>
