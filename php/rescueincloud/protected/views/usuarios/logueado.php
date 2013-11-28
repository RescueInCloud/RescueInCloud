<?php echo $session["login"]?>
<br />
<p><?php echo CHtml::link("Cerrar Sessión",Yii::app()->request->baseUrl."/test/cerrar",array("class"=>"link","title"=>"Cerrar Sessión"));?></p>