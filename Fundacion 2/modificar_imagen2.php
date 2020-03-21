<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }

    include 'inc/conexion.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM imagenes2 WHERE id = $id";
        $result = mysqli_query($bd, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $imagen = $row['imagen'];
        }       
    }

    if (isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $imagen = $_POST['imagen'];

        $query ="UPDATE imagenes2 set nombre ='$nombre', imagen='$imagen' WHERE id=$id";
        mysqli_query($bd, $query);
        echo '<script type="text/javascript">
                alert("Imagen Modificada");
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
                <form action="modificar_imagen.php?id=<?php echo $_GET['id']; ?>" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2 class="mb-3 text-center">Modificar Imagen</h2>

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
                        <label for="imagen" class="col-12 col-md-2 col-form-label">Imagen:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="imagen" class="form-control" value="<?php echo $imagen; ?>" placeholder="Actualia la ruta de la imagen...">
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