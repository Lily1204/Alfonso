<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
      header("Location: index.php");
    }
    include 'templates/header-admi.php';
    include 'templates/navegacion-admi.php';
?>
 
    <div class="container">
        
        <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                <form action="inc/agregar_programa.php" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2 class="mb-3 text-center">Agregar Programa</h2>
                    <!-- Campo nombre -->
                    <div class="form-group form-row">
                        <label for="nombre" class="col-12 col-md-2 col-form-label align-self-center">Nombre:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del programa...">
                        </div>
                    </div>
                    <!-- Campo imagen -->
                    <div class="form-group form-row">
                        <label for="ruta" class="col-12 col-md-2 col-form-label">Imagen:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="ruta" id="ruta" class="form-control" placeholder="Ingrese la ruta de la imagen...">
                        </div>
                    </div>
                     <!-- Campo objetivo -->
                     <div class="form-group form-row">
                        <label for="obejtivo" class="col-12 col-md-2 col-form-label align-self-center">Objetivo:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="objetivo" id="objetivo" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                     <!-- Campo actividades -->
                     <div class="form-group form-row">
                        <label for="actividades" class="col-12 col-md-2 col-form-label align-self-center">Actividades:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="actividades" id="actividades" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Campo  instructor -->
                    <div class="form-group form-row">
                        <label for="instructor" class="col-12 col-md-2 col-form-label">instructor:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="instructor" id="instructor" class="form-control" placeholder="Ingrese el instructor...">
                        </div>
                    </div>
                    <!-- Campo fecha -->
                    <div class="form-group form-row">
                        <label for="fecha" class="col-12 col-md-2 col-form-label">Fecha:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="fecha" id="fecha" class="form-control" placeholder="Ingrese la fecha...">
                        </div>
                    </div>
                    <!-- Campo metodo de verificacion  -->
                    <div class="form-group form-row">
                        <label for="verificacion" class="col-12 col-md-2 col-form-label align-self-center">Metodo de Verificacion:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="verificacion" id="verificacion" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Campo Cantidad-->
                    <div class="form-group form-row">
                        <label for="cantidad" class="col-12 col-md-2 col-form-label">Presupuesto:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad ...">
                        </div>
                    </div>
                    <div class="form-group form-row mb-0">
                        <div class="col-auto offset-md-2">
                            <button type="submit" class="btn btn-primary" name="agregar_programa">Guardar</button>
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
