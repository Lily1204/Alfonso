<?php
    $titulo= 'Donar';
    include 'templates/header.php';
    include 'templates/navegacion2.php';
?>

                <div class="container pt-4">
                        <div class="row no-gutters">
                            <div class="col-12 hero">
                                <img src="images/ayudanos2.jpg" class="img-fluid">
                                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Donar</h2>
                            </div>
                        </div>
                </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 pt-4 pt-lg-0 text-justify text-lg-center">
                <br>
                <h2 class="display-4 font-weight-bold text-secondary  mt-lg-n2 text-center">Tipos De Donación</h2>
                <h3 class="text-center">Dinero Y En Especie</h3>
                <a href="donar.php" class="btn btn-primary order-md-1 linea">Paypal</a>
                <a href="index.php#contacto" class="btn btn-primary order-md-1 linea">Contacto</a>

                </div>
            
            </div>
        </div>
    </section>

    <section id="gracias" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                <h2 class="display-4 font-weight-bold text-secondary  mt-lg-n2">
                        GRACIAS POR <span >DONAR</span>
                    </h2>
                    
                    <div class="contenedor-video d-inline-block position-relative text-truncate">
                        <img src="images/padre_yermo.jpg" alt="logo"
                            class="img-fluid">
                        
                        <a href="https://www.youtube.com/watch?v=aF6SFwyW07c" class="venobox-video" data-vbtype="video"
                            title="Gracias Por Donar"><i class="fas fa-play"></i></a>

                    </div>

                </div>
            
            </div>
        </div>
    </section>

    
    



<?php
    include 'templates/footer.php';
?>