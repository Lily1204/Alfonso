<?php
    $titulo= 'Avisos';
    include 'templates/header.php';
    include 'templates/navegacion2.php';
    include 'inc/funciones.php';
    include 'inc/conexion.php';
?>

    <section class="gallery-block cards-gallery">
        <h2 class="display-4 font-weight-bold text-secondary text-center">Avisos</h2>
        <div class="container pt-4">
            
                            <?php
                            $query = "SELECT * FROM imagenes";
                            $resultado = $bd->query($query);

                            while($row = $resultado->fetch_assoc()) { ?>
                                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="mx-auto d-block" style="width:65%"/>
                                
                                    <h3 class=" text-center text-uppercase">
                                    <?php echo $row['nombre']; ?>
                                    </h3><br>                       
                            <?php }
                            ?>
                  
        </div>
    </section>
<?php
    include 'templates/footer.php';
?>
    