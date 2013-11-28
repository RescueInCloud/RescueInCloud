<?php

class UsuariosController extends Controller {
     
    public function actionLogin()
    {
        $model=new Usuarios();
        if(isset($_POST["Usuarios"]["login"]))
        {
           
            $model->attributes=$_POST['Usuarios'];
            if($model->validate())
            {
                $login=$model->login();
                //print_r($login);exit;
                if(sizeof($login)==0)
                {
                    Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                    $this->redirect(Yii::app()->request->baseUrl."/usuarios/login");
                }else
                {
                   $session=new CHttpSession;
                    $session->open();
                    $session['login'] = $_POST["Usuarios"]["login"];
                    $this->redirect(Yii::app()->request->baseUrl."/usuarios/logueado"); 
                }
            }
        }
        $this->render("login",compact("model"));
        
    }
    public function actionLogueado()
    {
        $session=new CHttpSession;
        $session->open();
        if(isset($session["login"]))
        {
            
            $this->render("logueado",compact("session"));
        }else
        {
            $this->redirect(Yii::app()->request->baseUrl."/usuarios/login");
        }
    }
     public function actionCerrar()
    {
        $session=new CHttpSession;
        $session->open();
        $session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/usuarios/login");
        //$this->redirect(Yii::app()->user->returnUrl);
    } 
    
}



?>
