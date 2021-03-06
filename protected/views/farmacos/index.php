<div class="row clearfix">
    <div class="col-md-2 column">
        <div style="height:10px; background: transparent;">
            <hr style="display:none;" />
        </div>
        <ul class="nav nav-pills nav-stacked">
          <li class="nav-header"></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/farmacos/index"><i class="glyphicon glyphicon-user"></i> Mis Fármacos</a></li>
          
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/farmacos/crear"><i class="glyphicon glyphicon-plus"></i> Añadir Fármacos</a></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/farmacos/eliminar"><i class="glyphicon glyphicon-remove"></i> Eliminar Fármaco</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-search"></i> Buscar Fármaco</a></li>
        </ul>

    </div>
  
    
    <div class="col-md-10 column">
        <?php 
        if($this->accion==="index"){
            $this->renderPartial('index_ajaxContent', 
            array('result_set'=>$result_set,'num_farmacos'=>$num_farmacos)); 
        }
        else if($this->accion==="paginaIndex"){
            $this->renderPartial('index_ajaxContent', 
            array('result_set'=>$result_set,
                'num_farmacos'=>$num_farmacos,
                'num_pagina'=>$num_pagina)); 
        }
        else if($this->accion==="editar"){
            $this->renderPartial('editar_ajaxContent', array('farmaco'=>$farmaco)); 
        }
        else if($this->accion==="crear"){
           $this->renderPartial('crear_ajaxContent'); 
        }
        else if($this->accion==="eliminar"){
            $this->renderPartial('eliminar_ajaxContent', 
            array('result_set'=>$result_set,'num_farmacos'=>$num_farmacos));
        }
        else if($this->accion==="paginaEliminar"){
            $this->renderPartial('eliminar_ajaxContent', 
            array('result_set'=>$result_set,
                'num_farmacos'=>$num_farmacos,
                'num_pagina'=>$num_pagina)); 
        }
        ?>
        
    </div>
</div>
<script type="text/javascript">
  seleccionarFarmacos();
</script>