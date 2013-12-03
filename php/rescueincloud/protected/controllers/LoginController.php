<?php

class LoginController extends Controller {
     
    public function actionIndex()
    {
        $session=new CHttpSession;
        $session->open();
        if(isset($session["username"]))
        {
            $this->redirect(Yii::app()->request->baseUrl."/login/logueado"); 
            return;
        }
        
        $model=new Usuarios();
        if(isset($_POST["Usuarios"]["login"]))
        {
           
            $model->attributes=$_POST['Usuarios'];
            if($model->validate())
            {
                $login=$model->login();
                if(sizeof($login)==0)
                {
                    Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                    $this->redirect(Yii::app()->request->baseUrl."/login/login");
                }else
                {
                   $session=new CHttpSession;
                    $session->open();
                    $session['username'] = $_POST["Usuarios"]["login"];
                    $this->redirect(Yii::app()->request->baseUrl."/menu"); 
                }
            }
        }
        $this->render("index",compact("model"));
        
    }
    public function actionLogueado()
    {
        $session=new CHttpSession;
        $session->open();
        if(isset($session["username"]))
        {
            
            //$this->render("logueado",compact("session"));
            $this->redirect(Yii::app()->request->baseUrl."/menu"); 
        }else
        {
            $this->redirect(Yii::app()->request->baseUrl."/login");
        }
    }
    
    public function actionCerrar()
    {
        $session=new CHttpSession;
        $session->open();
        $session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/login");
    } 
    
}



?>
