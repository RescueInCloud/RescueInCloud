
<div style="height:20px; background: transparent;">
    <hr style="display:none;" />
</div>
<h6>
    <b> · Lista de Mis fármacos: </b>
</h6>
</h6>
<h6 style="color:#A4A4A4;">
    Haz click en el botón de la derecha para editarlo.
</h6>
<div style="height:10px; background: transparent;">
    <hr style="display:none;" />
</div>

<table class="table table-hover table-bordered">
    <thead>
            <tr>
                    <th>
                            Nombre Fármaco
                    </th>
                    <th>
                            Nombre Fabricante
                    </th>
                    <th>
                            Presentación Fármaco
                    </th>
                    <th>
                            Tipo Administración
                    </th>
                    <th>
                            Descripción
                    </th>
                    <th>
                            Opciones
                    </th>
            </tr>
    </thead>
    <tbody>
            <tr class="active">
                    <?php
                        $i=0;
                        foreach($result_set as $dato)
                        {
                            ?>
                            <tr>
                                <td><?php echo $dato["nombre_farmaco"] ?></td>
                                <td><?php echo $dato["nombre_fabricante"] ?></td>
                                <td><?php echo $dato["presentacion_farmaco"] ?></td>
                                <td><?php echo $dato["tipo_administracion"] ?></td>
                                <td><?php echo $dato["descripcion_farmaco"] ?></td>
                                <td>
                                    <?php $id=$dato["id_farmaco"] ?>
                                    <a href="<?php echo Yii::app()->createUrl('/farmacos/editar/'.$id)?>">
                                       <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
            </tr>
    </tbody>
    </table>
    <ul class="pagination pagination-sm">
        
        <?php
            $num_pag = 1;
            $num_paginas = ceil($num_farmacos/5);//la funcion ceil redondea hacia arriba
            
            $pag_actual = 1;
            if($this->accion==="paginaIndex"){
                $pag_actual = $num_pagina;
            }
            
            if($pag_actual!=1){
        ?>
                <li><a href="<?php echo Yii::app()->createUrl('/farmacos/paginarIndex/'.($pag_actual-1))?>">Anterior</a></li>
        <?php
            }
            
            while($num_pag<=$num_paginas){
        ?>
                
                    <?php
                    if($num_pag==$pag_actual){
                    ?>
                        <li class="active"><a href="#" ><?php echo $num_pag ?></a></li>
                        
                    <?php
                    }
                    else{
                        
                    ?>
                        <li><a href="<?php echo Yii::app()->createUrl('/farmacos/paginarIndex/'.$num_pag)?>">
                            <?php echo $num_pag ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                
        <?php
                $num_pag = $num_pag +1;
            }
            
            if($pag_actual!=$num_paginas){
        ?>
                <li><a href="<?php echo Yii::app()->createUrl('/farmacos/paginarIndex/'.($pag_actual+1))?>">Siguiente</a></li>
        <?php
            }
        ?>
    </ul>
