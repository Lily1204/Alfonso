<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
    include 'templates/header-usuario.php';
    include 'templates/navegacion-usuario.php';
?>
 
    <div class="container">
        
        <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                <form action="inc/agregar_avisos.php" method="POST" enctype="multipart/form-data" >
                    <h2 class="mb-3 text-center">Agregar Imagen</h2>
                    <!-- Campo nombre -->
                    <div class="form-group form-row">
                        <label for="nombre" class="col-12 col-md-2 col-form-label align-self-center">Nombre:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" required name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre de la imagen...">
                        </div>
                    </div>
                    <!-- Campo imagen -->
                    <div class="form-group form-row">
                        <label for="imagen" class="col-12 col-md-2 col-form-label">Imagen:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="file" required name="imagen" id="imagen" class="form-control" placeholder="Ingrese la ruta de la imagen...">
                        </div>
                    </div>
            
                    <div class="form-group form-row mb-0">
                        <div class="col-auto offset-md-2">
                            <button type="submit" class="btn btn-primary" name="agregar_imagen">Guardar</button>
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