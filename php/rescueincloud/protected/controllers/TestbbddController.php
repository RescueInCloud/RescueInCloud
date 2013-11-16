<?php

class TestbbddController extends Controller
{
        
	public function actionIndex()
	{
            
            $model=new Usuarios();
            $datos=$model->getUsuarios();
            $this->render('index',compact("datos"));
	}
        
}
?>
