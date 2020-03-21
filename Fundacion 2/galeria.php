<?php
    $titulo= 'Galeria';
    include 'templates/header.php';
    include 'templates/navegacion2.php';
    include 'inc/funciones.php';
    include 'inc/conexion.php';
?>

    <section class="gallery-block cards-gallery">
    <h2 class="display-4 font-weight-bold text-secondary text-center">Galería De Imagenes</h2>
    <div class="container pt-4">
        <div class="row">
                <main class="col-lg-12 contenido-principal">
                    <div class="row">
                      <div class="card-columns">
                        <?php
                            $imagenes = obtenerImagenes();
                            while($imagen= $imagenes->fetch_assoc()){  
                        ?>
                        <div class="card border-0 transform-on-hover">
                                <a class="lightbox" href="images/<?php echo $imagen['imagen']; ?>"><img src="images/<?php echo $imagen['imagen']; ?>" class="card-img-top"></a>
                                <div class="card-body">
                                    <h3 class="card-title text-center text-uppercase">
                                    <?php echo $imagen['nombre']; ?>
                                    </h3>
                                    </div>       
                        </div><!--.card-->
                        <?php }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </section>
<?php
    include 'templates/footer.php';
?>
    