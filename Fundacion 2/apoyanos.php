<?php
    $titulo= 'Apoyanos';
    include 'templates/header.php';
    include 'templates/navegacion2.php';
    include 'inc/funciones.php';
?>

<div class="container pt-5">
        <br>
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="images/programas2.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Programas</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4 programas">
        <div class="row">
                <main class="col-lg-12 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Programas
                    </h2>

                    <div class="row">
                      <div class="card-columns">
                        <?php
                            $programas = obtenerProgramas();
                            while($programa= $programas->fetch_assoc()){  
                        ?>
                        <div class="card">
                            <a href="programa.php?id=<?php echo $programa['id']; ?>">
                                <img src="images/<?php echo $programa['imagen']; ?>" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h3 class="card-title text-center text-uppercase">
                                    <?php echo $programa['nombre']; ?>
                                    </h3>
                                    <p class="card-text text-uppercase text-justify"><?php echo $programa['objetivo']; ?></p>
                                    <p class="precio lead text-center mb-0">$<?php echo $programa['cantidad']; ?>.00</p>
                                </div>
                            </a>
                        </div><!--.card-->
                        <?php }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>



<?php
    include 'templates/footer.php';
?>

