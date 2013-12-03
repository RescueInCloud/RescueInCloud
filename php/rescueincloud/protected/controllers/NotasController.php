<?php
//header('Content-Type: text/html; charset=utf-8');
class NotasController extends ControllerWithAuthentification
{
	public function actionIndex()
	{
            
            $model=new Notas();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('index',compact("datos"));
	}
        
        public function actionListar_notas()
	{
            
            $model=new Notas();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('listar_notas',compact("datos"));
	}
        
        public function actionEliminar_nota()
	{
            
            $model=new Notas();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('eliminar_nota',compact("datos"));
	}
        
}

?>
