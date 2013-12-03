<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerAuth
 *
 * @author Ricardo
 */
class ControllerWithAuthentification extends Controller{
    
    public function init()
    {
        $session=new CHttpSession;
        $session->open();
        if(!isset($session["username"]))
        {
            $this->redirect(Yii::app()->request->baseUrl."/login"); 
        }
        
    }
}

?>
