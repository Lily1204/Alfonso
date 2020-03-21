<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
      header("Location: index.php");
    }
    include 'inc/conexion.php';

    if(isset($_GET['id_usuario'])) {
        $id_usuario = $_GET['id_usuario'];
        $query = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
        $result = mysqli_query($bd, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $nom_usuario = $row['nom_usuario'];
            $password = $row['password'];
            $email = $row['email'];
            $tipo_usuario = $row['tipo_usuario'];
        }       
    }

    if (isset($_POST['actualizar'])){
        $id_usuario = $_GET['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nom_usuario = $_POST['nom_usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $tipo_usuario = $_POST['tipo_usuario'];

        $query ="UPDATE usuarios set nombre ='$nombre', apellido='$apellido', nom_usuario='$nom_usuario',
        password='$password', email='$email', tipo_usuario='$tipo_usuario' WHERE id_usuario=$id_usuario";
        mysqli_query($bd, $query);
        echo '<script type="text/javascript">
                alert("Usuario Modificado");
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
                <form action="modificar_usuario.php?id_usuario=<?php echo $_GET['id_usuario']; ?>" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2 class="mb-3 text-center">Modificar Usuario</h2>

                    <!-- Campo nombre -->
                    <div class="form-group form-row">

                        <label for="nombre" class="col-12 col-md-2 col-form-label align-self-center">Nombre:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre"  class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre...">
                        </div>
                    </div>

                    <!-- Campo apellido -->
                    <div class="form-group form-row">
                        <label for="apellido" class="col-12 col-md-2 col-form-label">Apellido:</label>

                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="apellido"  class="form-control" value="<?php echo $apellido; ?>" placeholder="Actualiza el apellido...">
                        </div>
                    </div>

                    <!-- Campo usuario -->
                    <div class="form-group form-row">
                        <label for="nom_usuario" class="col-12 col-md-2 col-form-label">Nom de usuario:</label>

                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" name="nom_usuario" class="form-control" value="<?php echo $nom_usuario; ?>" placeholder="Actualiza el nombre de usuario...">
                        </div>
                    </div>

                    <!-- Campo contraseña -->
                    <div class="form-group form-row">
                        <label for="password" class="col-12 col-md-2 col-form-label align-self-center">Password:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Actualiza la contraseña...">
                        </div>
                    </div>

                    <!-- Campo email  -->
                    <div class="form-group form-row">
                        <label for="email" class="col-12 col-md-2 col-form-label align-self-center">Email:</label>
                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-comments"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Actualiza la ruta...">

                        </div>
                    </div>

                    <!-- Campo tipo de usuario-->
                    <div class="form-group form-row">
                        <label for="tipo_usuario" class="col-12 col-md-2 col-form-label">Tipo usuario:</label>

                        <div class="input-group col-12 col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            
                            <input type="text" name="tipo_usuario" class="form-control" value="<?php echo $tipo_usuario; ?>" placeholder="Actualiza la cantidad ...">
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