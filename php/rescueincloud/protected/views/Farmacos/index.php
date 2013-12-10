<h3>Listado de acciones de Fármacos:</h3>

<li>
<?php echo CHtml::link("Listar Farmaco",Yii::app()->request->baseUrl."/Farmacos/ListFarmacos",array("class"=>"link","title"=>"Listar")); ?>
</li>

<li>
<?php echo CHtml::link("Introducir Farmaco",Yii::app()->request->baseUrl."/Farmacos/AddFarmacos",array("class"=>"link","title"=>"Introducir")); ?>
</li>

<li>
<?php echo CHtml::link("Buscar Farmaco",Yii::app()->request->baseUrl."/Farmacos/BuscarFarmacos",array("class"=>"link","title"=>"Buscar")); ?>
</li>

<li>
<?php echo CHtml::link("Buscar Farmaco JQuery",Yii::app()->request->baseUrl."/Farmacos/BuscarFarmacosJQ",array("class"=>"link","title"=>"BuscarJQuery")); ?>
</li>