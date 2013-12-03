<h1>Agregar farmaco:</h1>

<?php echo CHtml::beginForm('','post', array("id"=>"form","name"=>"form")); ?>
    <?php //echo CHtml::errorSummary($model); ?>
    
    <h4>Introduzca los siguientes campos:</h4>
    
    <p>
        Nombre de usuario: <?php echo CHtml::activeTextField($model,'no_usuario'); echo CHtml::error($model,'no_usuario'); ?>
    </p>
    <p>
        Nombre del farmaco: <?php echo CHtml::activeTextField($model,'no_farmaco'); echo CHtml::error($model,'no_farmaco'); ?>
    </p>
    <p>
        Nombre del fabricante: <?php echo CHtml::activeTextField($model,'no_fabricante'); echo CHtml::error($model,'no_fabricante'); ?>
    </p>
    <p>
        Nombre quimico del farmaco: <?php echo CHtml::activeTextField($model,'no_quimico'); echo CHtml::error($model,'no_quimico'); ?>
    </p>
    <p>
        Descripcion del farmaco: <?php echo CHtml::activeTextArea($model,'des_farmaco'); echo CHtml::error($model,'des_farmaco'); ?>
    </p>
    
    <?php echo CHtml::submitButton('submit', array("value"=>"Crear Farmaco","title"=>"Crear Farmaco")); ?>
<?php echo CHtml::endForm(); ?>

<hr />
<p>
<?php echo CHtml::link("Volver Atras",Yii::app()->request->baseUrl."/Farmacos",array("class"=>"link","title"=>"Volver atras")); ?>
</p>