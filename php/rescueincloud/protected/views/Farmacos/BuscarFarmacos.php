<h1>Buscar Farmacos:</h1>

<?php echo CHtml::beginForm('','post', array("id"=>"form","name"=>"form")); ?>
    <?php //echo CHtml::errorSummary($model); ?>
    
    <h4>Introduzca el nombre del farmaco que quiera buscar:</h4>
    
    <p>
        Nombre del farmaco: <?php echo CHtml::activeTextField($model,'no_farmaco'); echo CHtml::error($model,'no_farmaco'); ?>
    </p>
        
    <?php echo CHtml::submitButton('submit', array("value"=>"Buscar Farmaco","title"=>"Buscar Farmaco")); ?>
<?php echo CHtml::endForm(); ?>
    
<hr />
<?php echo CHtml::link("Volver Atras",Yii::app()->request->baseUrl."/Farmacos",array("class"=>"link","title"=>"Volver atras")); ?>
</p>
