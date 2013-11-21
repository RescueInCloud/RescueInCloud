<?php
//header('Content-Type: text/html; charset=utf-8');
class Notas_intervencionController extends Controller
{
	public function actionIndex()
	{
            
            $model=new Notas_intervencion();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('index',compact("datos"));
	}
        
        public function actionListar_notas()
	{
            
            $model=new Notas_intervencion();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('listar_notas',compact("datos"));
	}
        
        public function actionEliminar_nota()
	{
            
            $model=new Notas_intervencion();
            //XXX Para conocer el email del usuario necesito el inicio de sesión,
            //Cómo aún no está hecho uso datos a pelo.
            $email_usuario = "ricardocb48@gmail.com";
            $datos=$model->getNotas($email_usuario);
            $this->render('eliminar_nota',compact("datos"));
	}
        
}

?>
