<h1>Listado de Notas de intervención </h1>
<ul>
    <?php
    foreach($datos as $dato)
    {
        ?>
        <li><?php echo "Nombre: " . $dato["nombre_nota"]. " Descripción: ". $dato["descripcion"]?></li>
        <?php        
    }
    ?>
</ul>