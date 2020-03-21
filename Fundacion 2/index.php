<?php
    $titulo= 'Inicio';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>
   
    <!-- Sección #animacion -->
    <section id="animacion" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex justify-content-center align-items-center"
                style="background-image:url('images/fondo-slide-1.jpg')">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11">
                            <h2 class="display-4 font-weight-bold">
                                FBP Asilo San Luis Gonzaga 
                            </h2>                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex justify-content-center align-items-center"
                style="background-image:url('images/fondo-slide-2.jpg')">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11">
                            <h2 class="display-4 font-weight-bold">
                             Formación Espiritual
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex justify-content-center align-items-center"
                style="background-image:url('images/fondo-slide-3.jpg')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11">
                            <h2 class="display-4 font-weight-bold">
                            Educación Humanista
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex justify-content-center align-items-center"
                style="background-image:url('images/padre_yermo.jpg')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11">
                            <h2 class="display-4 font-weight-bold">
                            Modelo Educativo Yermista
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones de navegación -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- Botones de paginación -->
        <div class="swiper-pagination"></div>
    </section>

    <!-- Sección #nosotros -->
    <section id="nosotros" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    
                    <div class="contenedor-video d-inline-block position-relative text-truncate">

                        <img src="images/padre_yermo.jpg" alt="logo"
                            class="img-fluid">
                        <a href="https://www.youtube.com/watch?v=MfEkJgAq5sc" class="venobox-video" data-vbtype="video"
                            title="Bienvenidos a nuestro sitio web."><i class="fas fa-play"></i></a>
                    

                    </div>

                </div>
                <div class="col-12 col-lg-6  pt-4 pt-lg-0 text-center text-lg-left">
                    <h2 class="display-4 font-weight-bold text-secondary  mt-lg-n2">
                        BIENVENIDOS A NUESTRO <span >SITIO WEB</span>
                    </h2>
                    <h3 class="text-black-80">“Formar para la vida y servir con alegría”</h3>
                    <p class="text-justify">
                        El Asilo San Luis Gonzaga, es una obra de Beneficencia Privada legítimamente 
                        constituida desde el 18 de agosto de 1900, por los señores Don Luis González Gómez 
                        y su esposa Doña Luz Luna de González, quienes se distinguieron por su caridad 
                        y la concibieron como asilo y escuela.
                    </p>
                    <a href="nosotros.php" class="btn btn-primary mt-3">Quienes Somos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección #apoyanos -->
    <section id="apoyanos" class="bg-secondary text-white text-center py-5 jarallax" data-jarallax data-speed="0.7">
        <picture class="jarallax-img">
            <source media="(min-width:1200px)" srcset="images/ayudanos2.jpg">
            <source media="(min-width:768px)" srcset="images/ayudanos2.jpg">
            <img srcset="images/ayudanos2.jpg" alt="Fondo como podemos ayudarte" class="w-100">
        </picture>

        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="display-4 font-weight-bold text-black">AYUDANOS A AYUDAR</h2>
                    <p class="text-justify text-black">El Asilo San Luis Gonzaga proporciona atención y recursos a niños
                        y adolescentes en la edad escolar y con necesidades básicas. La gran mayoría de nuestros 
                        alumnos son de familias disfuncionales, vulnerables  por lo que la situación se vuelve más 
                        compleja para su desarrollo y crecimiento emocional, afectivo, intelectual y físico.</p>
                    <a href="apoyanos.php" class="btn btn-primary">Ver Programas</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Seccion #escuela -->

    <section id="escuela" class="py-5 text-center">

        <div class="container py-5">
            <h2 class="display-4 font-weight-bold text-secondary">NUESTRA FUNDACION EN NÚMEROS</h2>
            <h6 class="text-black-50">TENEMOS ALGUNOS NÚMEROS QUE MOSTRARTE.</h6>

            <div class="row">
                <div class="col-6 col-md-3 py-4">
                    <i class="far fa-calendar-alt text-primary display-4 mb-2"></i>
                    <div class="font-weight-bold text-secondary h2">
                        <span class="counter" data-counterup-beginat="0" data-counterup-time="500">1905</span>
                    </div>
                    <h6>Fundada en </h6>
                    <div class="contador-linea"></div>

                </div>
                <div class="col-6 col-md-3 py-4">
                    <i class="fab fa-angellist text-primary display-4 mb-2"></i>
                    <div class="font-weight-bold text-secondary h2">
                        <span class="counter" data-counterup-beginat="0" data-counterup-time="2000">300</span>
                    </div>
                    <h6>Estudiantes </h6>
                    <div class="contador-linea"></div>
                </div>
                <div class="col-6 col-md-3 py-4">
                    <i class="fab fa-angellist text-primary display-4 mb-2"></i>
                    <div class="font-weight-bold text-secondary h2">
                        <span class="counter" data-counterup-beginat="0" data-counterup-time="2000">80 </span>
                    </div>
                    <h6>Internas en el instituto</h6>
                    <div class="contador-linea"></div>
                </div>
                <div class="col-6 col-md-3 py-4">
                    <i class="fas fa-thumbs-up text-primary display-4 mb-2"></i>
                    <div class="font-weight-bold text-secondary h2">
                        <span class="counter" data-counterup-beginat="0"
                            data-counterup-time="2000">114</span><span></span>
                    </div>
                    <h6>Años de experiencia</h6>
                    <h6>Formando a la infancia </h6>
                    <div class="contador-linea"></div>
                </div>
            </div>
            <a href="educacion.php" class="btn btn-primary mt-3 ">Conócela </a>
        </div>
    </section>

    <!-- Sección #cultura-de-donacion -->
    <section id="cultura-de-donacion" class="bg-secondary py-5 text-white text-center text-md-left jarallax" data-jarallax
        data-speed="0.6">
        <picture class="jarallax-img">
            <source media="(min-width:1200px)" srcset="images/onu.png">
            <source media="(min-width:768px)" srcset="images/onu.png">
            <img srcset="images/onu.png" alt="Fondo Nuestra App" class="w-100">
        </picture>

        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-12 col-md-6">
                    <h2 class="h1 font-weight-bold">CONOCE LA AGENDA 2030</h2>
                    <h6 class="text-white-50"></h6>
                    <p class="text-center">La agenada 2030 ofrece una vision de un mundo mas justo y mas pacifico en el cual nadie es dejado atras</p>
                    <a href="cultura.php" class="btn btn-primary mt-3">Conócela </a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="reconocimiento" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    
                    <div >

                        <img src="images/reconocimiento.jpg" alt="logo"
                            class="img-fluid">
                    </div>

                </div>
                <div class="col-12 col-lg-6  pt-4 pt-lg-0 text-center text-lg-left">
                    <h2 class="display-4 font-weight-bold text-secondary  mt-lg-n2">
                        RECONOCIMIENTO
                    </h2>
                    <h4 class="text-black-80">Reconocimiento a Ciudadados Distinguido en Vida </h3>
                    <p class="text-justify">
                       El pasado 18 de diciembre del 2019 con motivo del dia de Orizaba se realizo la entrega
                       de reconocimientos a ciudadanos distinguidos en vida y Post mortem por sus destacadas
                       aportaciones a la sociedad en distintos ámbitos  
                    </p>
                    <p class="text-justify">
                        Donde fuimos galardonados, por la gran labor altruista que realizamos.
                        Recibiendo la distinción la hermana Gloria Araceli Marinero Perote de manos del alcaldel 
                        de Orizaba.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección #contacto -->
    <section id="contacto">
        <header class="py-5 bg-primary text-white text-center position-relative">
            <h2 class="display-4 font-weight-bold">CONTÁCTANOS</h2>
            <h6 class="text-white-80">ESTAMOS LISTOS PARA ATENDERTE</h6>
            
        </header>

        <div class="container">
            <div class="row py-5">

                <div class="col-12 col-lg-6">
                    <h2 class="font-weight-bold text-center mb-2">Detalles de contacto:</h2>

                    <ul class="list-unstyled">

                        <li class="d-flex border-bottom py-4">
                            <i class="fas fa-globe fa-3x text-primary mr-4 fa-fw"></i>
                            <div>
                                <h5 class="font-weight-bold">Dirección:</h5>
                                <p class="mb-0">Av. Poniente 2 Num. 585 Orizaba Ver.</p>
                            </div>
                        </li>

                        <li class="d-flex border-bottom py-4">
                            <i class="fas fa-mobile-alt fa-3x text-warning mr-4 fa-fw"></i>
                            <div>
                                <h5 class="font-weight-bold">Teléfonos:</h5>
                                <p class="mb-0">01(272)7255594</p>
                                <p class="mb-0">01(272)7252292</p>
                            </div>
                        </li>
                        <li class="d-flex border-bottom py-4">
                            <i class="fas fa-envelope-open fa-3x text-danger mr-4 fa-fw"></i>
                            <div>
                                <h5 class="font-weight-bold">Email:</h5>
                                <p class="mb-0">fundacionluisgonzaga@gmail.com</p>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                    <h2 class="font-weight-bold text-center mb-5">Dinos algún comentario</h2>
                    <form action="email.php" id="mi-formulario" method="POST">

                        <!-- Campo #nombre -->
                        <div class="form-group form-row">
                            <label for="nombre" class="col-form-label col-12 col-md-3">Nombre:</label>
                            <div class="col-12 col-md-9">
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    placeholder="Ingrese su nombre" data-parsley-required
                                    data-parsley-required-message="Este campo no puede estar vacio.">
                            </div>
                        </div>

                        <!-- Campo #email -->
                        <div class="form-group form-row">
                            <label for="email2" class="col-form-label col-12 col-md-3">Email:</label>
                            <div class="col-12 col-md-9">
                                <input type="email" class="form-control" name="email2" id="email2"
                                    placeholder="Ingrese su email" data-parsley-required data-parsley-type="email"
                                    data-parsley-required-message="Este campo no puede estar vacio."
                                    data-parsley-type-message="Ingrese un email en un formato válido.">
                            </div>
                        </div>

                        <!-- Campo #celular -->
                        <div class="form-group form-row">
                            <label for="celular" class="col-form-label col-12 col-md-3">Celular:</label>
                            <div class="col-12 col-md-9">
                                <input type="text" class="form-control" name="celular" id="celular"
                                    placeholder="Ingrese su celular" data-parsley-required data-parsley-length="[5, 20]"
                                    data-parsley-required-message="Este campo no puede estar vacio."
                                    data-parsley-length-message="El número telefónico debe tener entre 5 a 20 letras.">
                            </div>
                        </div>

                        <!-- Campo #mensaje -->
                        <div class="form-group form-row">
                            <label for="mensaje" class="col-form-label col-12 col-md-3">Mensaje:</label>
                            <div class="col-12 col-md-9">
                                <textarea name="mensaje" id="mensaje" rows="4" class="form-control"
                                    placeholder="Ingrese su mensaje." data-parsley-required
                                    data-parsley-required-message="Este campo no puede estar vacio."></textarea>
                            </div>
                        </div>

                        <!-- Campo Enviar -->
                        <div class="form-group form-row">
                            <div class="col-12 col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar</button>

                            </div>
                        </div>
                    </form>
                    <?php               
                        include 'email.php';
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'templates/footer.php';
?>
    
