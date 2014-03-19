<h1>TESTING: Buscar Farmacos:</h1>

<?php echo CHtml::beginForm('','post', array("id"=>"form","name"=>"form")); ?>
    <?php //echo CHtml::errorSummary($model); ?>
    
    <h4>Introduzca el nombre del farmaco que quiera buscar:</h4>
        
    <div id="data">
        <p>
        Nombre del farmaco: <?php echo CHtml::activeTextField($model,'no_farmaco'); echo CHtml::error($model,'no_farmaco'); ?>
        </p>
        <?php $this->renderPartial('_ajaxContentBusqueda', array('res_buscar'=>$res_buscar)); ?>
    </div>		
    <?php echo CHtml::ajaxSubmitButton("Realizar Busqueda", 
                                        CController::createUrl('Farmacos/BuscarFarmacosAjax'),
                                        array('update' => '#data')); 
?>
<?php echo CHtml::endForm(); ?> 
<hr />
<?php echo CHtml::link("Volver Atras",Yii::app()->request->baseUrl."/Farmacos",array("class"=>"link","title"=>"Volver atras")); ?>
</p>

