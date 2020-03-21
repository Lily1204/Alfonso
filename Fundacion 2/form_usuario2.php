<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
    include 'templates/header-admi.php';
    include 'templates/navegacion-admi.php';
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <form action="inc/agregar_usuario.php" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2 class="mb-3 text-center">Agregar Usuario</h2>

                    <!-- Campo nombre -->
                    <div class="form-group form-row">

                        <label for="nombre" class="col-12 col-md-2 col-form-label">Nombre:</label>


                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre...">
                        </div>
                    </div>

                    <!-- Campo apellido -->
                    <div class="form-group form-row">

                        <label for="apellido" class="col-12 col-md-2 col-form-label">Apellido:</label>


                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido...">

                        </div>
                    </div>

                    <!-- Campo nombre de usuario -->
                    <div class="form-group form-row">

                        <label for="nom_usuario" class="col-12 col-md-2 col-form-label">Nom de usuario:</label>


                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nom_usuario" id="nom_usuario" class="form-control" placeholder="Ingrese su nombre de usuario...">

                        </div>
                    </div>

                    <!-- Campo contraseña -->
                    <div class="form-group form-row">

                        <label for="password" class="col-12 col-md-2 col-form-label">Contraseña:</label>


                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su nombre...">

                        </div>
                    </div>

                    <!-- Campo email -->
                    <div class="form-group form-row">
                        <label for="email" class="col-12 col-md-2 col-form-label">Email:</label>

                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su email...">
                        </div>

                    </div>

                    <!-- Campo tipo de usuario -->
                    <div class="form-group form-row">
                        <label for="tipo_usuario" class="col-12 col-md-2 col-form-label">Tipo De Usuario:</label>

                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="tipo_usuario" id="tipo_usuario" class="form-control" placeholder="Ingrese el tipo de usuario...">
                        </div>

                    </div>

                    <div class="form-group form-row mb-0">
                        <div class="col-auto offset-md-2">
                            <button type="submit" class="btn btn-primary" name="agregar_usuario">Guardar</button>
                            <button type="reset" class="btn btn-secondary">Borrar</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>

    <?php
        include 'templates/footer-admi.php';
    ?>    
