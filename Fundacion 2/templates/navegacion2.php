<!-- Sección #menu-navegacion -->

<nav id="menu-navegacion" class="navbar navbar-dark navbar-expand-md" style="background-color: rgba(5, 9, 127, 0.933)">
        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal2"
                aria-expanded="false" aria-label="Botón Menú principal">
                <span class="boton-menu"></span>
            </button>
            <a href="donar.php" class="btn btn-primary order-md-1">Donar</a>
            <?php
                    $archivo = basename($_SERVER['PHP_SELF']);
                    $pagina = str_replace('.php', '', $archivo);
                    ?>
            
            <div class="collapse navbar-collapse" id="menu-principal2">
                <ul class="navbar-nav mt-3 mt-md-0">
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'index'===$pagina ? 'active' : ''?>><a href="index.php"  class="nav-link ">Inicio</a></li>
                    <li class="nav-item dropdown mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'nosotros'===$pagina ? 'active' : ''?>>
                    <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">Nosotros</a>
                        <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
                        <a class="nav-item dropdown-item mb-1 mb-md-0 mr-md-2 font-weight-bold" href="nosotros.php" >Casa Hogar</a>
                        <a class="nav-item dropdown-item mb-1 mb-md-0 mr-md-2 font-weight-bold dropdown-toggle" href="educacion.php" id="navbarDropdownMenu2" role="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escuela</a>
                            <div class="dropdown-menu dropright" aria-labelledby="navbarDropdownMenu2">
                                <a class="nav-item dropdown-item mb-1 mb-md-0 mr-md-2 font-weight-bold" style="color: rgba(5, 9, 127, 0.933)" href="primaria.php">Primaria</a>
                                <a class="nav-item dropdown-item mb-1 mb-md-0 mr-md-2 font-weight-bold" style="color: rgba(5, 9, 127, 0.933)" href="secundaria.php">Secundaria</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'apoyanos'===$pagina ? 'active' : ''?>><a href="apoyanos.php" class="nav-link">Apoyanos</a>
                    </li>
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'galeria'===$pagina ? 'active' : ''?>><a href="galeria.php" class="nav-link">Galeria</a></li>                  
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'cultura'===$pagina ? 'active' : ''?>><a href="cultura.php" class="nav-link">Cult. De Donación</a>
                    </li>
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'premios'===$pagina ? 'active' : ''?>><a href="index.php#reconocimiento" class="nav-link">Reconocimientos</a>
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'escuela'===$pagina ? 'active' : ''?>><a href="avisos.php" class="nav-link">Avisos</a>
                    </li>
                    </li>
                    <li class="nav-item mb-1 mb-md-0 mr-md-2 font-weight-bold"<?php echo 'cultura'===$pagina ? 'active' : ''?>><a href="index.php#contacto" class="nav-link">Contacto</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>