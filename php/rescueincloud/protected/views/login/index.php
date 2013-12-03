

<h1>Ingrese sus datos</h1>

<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h3 style="color: green;"><?php echo Yii::app()->user->getFlash('mensaje')?></h3>
    <?php    
} ?>



<?php echo CHtml::beginForm('','post',array("id"=>"form","name"=>"form")); ?>

   
    
     <p>
        Email <?php echo CHtml::activeTextField($model,'login');echo CHtml::error($model,'login'); ?>
       <hr /> 
    </p>
    
    <p>
 
     <?php echo CHtml::submitButton('submit',array("title"=>"Enviar","value"=>"Enviar")); ?>
    </p>
    
<?php echo CHtml::endForm(); ?>


