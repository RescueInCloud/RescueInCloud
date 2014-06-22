<?php

class NotasController extends Controller
{
    //public $layout = 'webroot.themes.layoutit.views.layouts.plantilla';
    public $layout = 'plantilla';
    public $accion = "index"; //solo peude tener 4 valores: index, crear, eliminar, buscar
    private $num_notas_pagina=5;
    
    public function actionIndex()
    { 
        $this->accion = "index";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
        $num_notas = $model->num_notas($email_usuario);
        $result_set = $model->listar_notas_usuario(0, $this->num_notas_pagina, $email_usuario);
        $this->render('index',compact("result_set", "num_notas"));
          
    }
           
    public function actionPaginarIndex($id)
    {         
        $num_pagina = $id;
        $this->accion = "paginaIndex";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
        $num_notas = $model->num_notas($email_usuario);
        $ini = $this->$num_notas_pagina*($num_pagina-1);
        $result_set = $model->listar_notas_usuario($ini, $this->num_notas_pagina, $email_usuario);
        $this->render('index', compact("result_set","num_notas","num_pagina"));
       
    }
    
    
    public function actionEditar($id)
    { 
        $this->accion = "editar";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
       
        $nota = $model->obtener_nota($id, $email_usuario);
        $this->render('editar',compact("nota"));
    }
    
    public function actionEditarNota()
    { 
        $id_nota = $_POST['InputID'];
        $nombre_nota = $_POST['InputNombre'];
        $descripcion = $_POST['InputDescripcion'];
        
        $email_usuario = Yii::app()->user->getName();
        
        $model = new Notas();
        $model->editar_nota($id_nota, $nombre_nota, $descripcion, $email_usuario);
        
        $this->redirect(Yii::app()->user->returnUrl."notas");
        
    } 
    
    public function actionCrear()
    {
        $this->accion = "crear";
        $result_set = "";    
        //$this->renderPartial('insertar_ajaxContent', compact("result_set"));
        $this->render('crear');
    }
    
    public function actionAltaNota()
    { 
        $nombre_nota = $_POST['InputNombre'];
        $descripcion_nota = $_POST['InputDescripcion'];
        
        $email_usuario = Yii::app()->user->getName();
        
        $model = new Notas();
        $model->insertar_nota($nombre_nota, $descripcion_nota, $email_usuario);
        
        $this->redirect(Yii::app()->user->returnUrl."notas");
        
    } 
    
    public function actionEliminar(){
        $this->accion = "eliminar";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
        $num_notas = $model->num_notas($email_usuario);
        $result_set = $model->listar_notas_usuario(0, 5, $email_usuario);
        $this->render('eliminar',compact("result_set", "num_notas"));
    }
            
    public function actionPaginarEliminar($id)
    { 
        $num_pagina = $id;
        $this->accion = "paginaEliminar";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
        $num_notas = $model->num_notas($email_usuario);
        $ini = $this->num_notas_pagina*($num_pagina-1);
        $result_set = $model->listar_notas_usuario($ini, $this->num_notas_pagina, $email_usuario);;
        $this->render('eliminar',compact("result_set","num_notas","num_pagina"));
    }
       
    
    public function actionEliminarNota($id)
    { 
        //$this->accion = "eliminar";
        $email_usuario = Yii::app()->user->getName();
        $model = new Notas();
        $res = $model->eliminar_nota($id, $email_usuario);
        //se podría añadir un mensaje estilo: El fármaco se ha eliminado correctamente
        $this->redirect(Yii::app()->user->returnUrl."notas/eliminar");        
    }
    


    
}

