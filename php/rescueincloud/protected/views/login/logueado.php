<?php echo $session["login"]?>
<br />
<p><?php echo CHtml::link("Cerrar Sessión",Yii::app()->request->baseUrl."/login/cerrar",array("class"=>"link","title"=>"Cerrar Sessión"));?></p>