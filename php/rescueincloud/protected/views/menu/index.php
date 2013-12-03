<h1>Menú principal </h1>
<ul>
    <li><?php echo CHtml::link("Protocolos",Yii::app()->request->baseUrl."/protocolos",array("class"=>"link","title"=>"Protocolos"));?></li>
    <li><?php echo CHtml::link("Fármacos",Yii::app()->request->baseUrl."/farmacos",array("class"=>"link","title"=>"Protocolos"));?></li>
    <li><?php echo CHtml::link("Notas",Yii::app()->request->baseUrl."/notas",array("class"=>"link","title"=>"Protocolos"));?></li>
    <li><?php echo CHtml::link("Cerrar sesión",Yii::app()->request->baseUrl."/login/cerrar",array("class"=>"link","title"=>"Cerrar sesión"));?></li>
</ul>