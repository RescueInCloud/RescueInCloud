<h2>Resultados de la busqueda:</h2>
<?php
if ($res_buscar == null) {
    ?> <h4>No se han encontrado resultados. </h4> <?php
} else {
    foreach ($res_buscar as $item)
    {
       ?>
       <li> 
            Farmaco: <?php echo $item["nombre_farmaco"]?>;   
            Fabricante: <?php echo $item["nombre_fabricante"] ?>;  
            Usuario: <?php echo $item ["email_usuario"] ?>  
       </li>
       <?php       
    }
}
?>
