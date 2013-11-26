<h1>Listando los fármacos!</h1>
<ul>
    <?php 
    foreach ($datos as $dato)
    {
       ?>
       <li> 
            Farmaco: <?php echo $dato["nombre_farmaco"]?>;   
            Fabricante: <?php echo $dato["nombre_fabricante"] ?>;  
            Usuario: <?php echo $dato ["email_usuario"] ?>  
       </li>
       <?php       
    }
    ?>
</ul>

<?php echo CHtml::link("Volver Atras",Yii::app()->request->baseUrl."/Farmacos",array("class"=>"link","title"=>"Volver atras")); ?>
</p>
