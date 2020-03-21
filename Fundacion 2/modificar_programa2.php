<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }

    include 'inc/conexion.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM programas WHERE id = $id";
        $result = mysqli_query($bd, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $imagen = $row['imagen'];
            $objetivo = $row['objetivo'];
            $actividades = $row['actividades'];
            $instructor = $row['instructor'];
            $fecha = $row['fecha'];
            $verificacion = $row['verificacion'];
            $cantidad = $row['cantidad'];
        }       
    }

    if (isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $imagen = $_POST['ruta'];
        $objetivo = $_POST['objetivo'];
        $actividades = $_POST['actividades'];
        $instructor = $_POST['instructor'];
        $fecha = $_POST['fecha'];
        $verificacion = $_POST['verificacion'];
        $cantidad = $_POST['cantidad'];

        $query ="UPDATE programas set nombre ='$nombre', imagen='$imagen', objetivo='$objetivo',
        actividades='$actividades', instructor='$instructor', fecha='$fecha', verificacion='$verificacion', cantidad='$cantidad' WHERE id=$id";
        mysqli_query($bd, $query);
        echo '<script type="text/javascript">
                alert("Programa Modificado");
                window.location.href="index_admi.php";
                </script>';
    }
    
?>
<?php
    include 'templates/header-admi.php';
    include 'templates/navegacion-admi.php';
?>
    <div class="container p-4">
    <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                <form action="modificar_programa.php?id=<?php echo $_GET['id']; ?>" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2 class="mb-3 text-center">Modificar Programa</h2>

                    <!-- Campo nombre -->
                    <div class="form-group form-row">
                        <label for="nombre" class="col-12 col-md-2 col-form-label align-self-center">Nombre:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actuliza el nombre del programa...">
                        </div>
                    </div>
                    <!-- Campo imagen -->
                    <div class="form-group form-row">
                        <label for="ruta" class="col-12 col-md-2 col-form-label">Imagen:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="ruta" class="form-control" value="<?php echo $imagen; ?>" placeholder="Actualia la ruta de la imagen...">
                        </div>
                    </div>
                     <!-- Campo objetivo -->
                     <div class="form-group form-row">
                        <label for="objetivo" class="col-12 col-md-2 col-form-label align-self-center">Objetivo:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="objetivo" class="form-control" rows="3"><?php echo $objetivo; ?></textarea>
                        </div>
                    </div>
                     <!-- Campo actividades -->
                     <div class="form-group form-row">
                        <label for="actividades" class="col-12 col-md-2 col-form-label align-self-center">Actividades:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="actividades" class="form-control" rows="3"><?php echo $actividades; ?></textarea>
                        </div>
                    </div>
                    <!-- Campo  instructor -->
                    <div class="form-group form-row">
                        <label for="instructor" class="col-12 col-md-2 col-form-label">instructor:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="instructor"  class="form-control" value="<?php echo $instructor; ?>" placeholder="Actualiza el instructor...">
                        </div>
                    </div>
                    <!-- Campo fecha -->
                    <div class="form-group form-row">
                        <label for="fecha" class="col-12 col-md-2 col-form-label">Fecha:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="fecha" class="form-control" value="<?php echo $fecha; ?>" placeholder="Actualiza la fecha...">
                        </div>
                    </div>
                    <!-- Campo metodo de verificacion  -->
                    <div class="form-group form-row">
                        <label for="verificacion" class="col-12 col-md-2 col-form-label align-self-center">Metodo de Verificacion:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <textarea name="verificacion" class="form-control" rows="3"><?php echo $verificacion; ?></textarea>
                        </div>
                    </div>
                    <!-- Campo Cantidad-->
                    <div class="form-group form-row">
                        <label for="cantidad" class="col-12 col-md-2 col-form-label">Presupuesto:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="number" name="cantidad" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Actualiza la cantidad ...">
                        </div>
                    </div>
                    

                    <div class="form-group form-row mb-0">
                        <div class="col-auto offset-md-2">
                            <button type="submit" class="btn btn-primary" name="actualizar">actualizar</button>
                            <button type="reset" class="btn btn-secondary">Borrar</button>
                        </div>

                    </div>


                </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'templates/footer-admi.php';
?>