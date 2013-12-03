<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuController
 *
 * @author Administrador
 */
class MenuController extends ControllerWithAuthentification{
   
    public function actionIndex()
    { 
        $this->render('index');
    }
}

?>
