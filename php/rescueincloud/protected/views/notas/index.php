<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<h1>Listado de Notas de intervención </h1>
<ul>   
    <li><?php echo CHtml::link("Listar notas",Yii::app()->request->getUrl()."/listar_notas",array("title"=>"Muestra todas las notas"));?></li> 
    <li><?php echo CHtml::link("Eliminar una nota",Yii::app()->request->getUrl()."/eliminar_nota",array("title"=>"Elimina una o varias notas"));?></li>

</ul>