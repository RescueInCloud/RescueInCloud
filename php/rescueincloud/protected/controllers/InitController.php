<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InitController
 *
 * @author Ricardo
 */
class InitController extends Controller {
    
    public function actionIndex()
    {      
        $session=new CHttpSession;
        $session->open();
        if(isset($session["login"]))
        {
            $this->redirect(Yii::app()->request->baseUrl."/login/logueado"); 
        }
        else{
            $this->redirect(Yii::app()->request->baseUrl."/login"); 
        }
    }
}

?>
