<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
    include 'inc/conexion.php';
    include 'templates/header-admi.php';
    include 'templates/navegacion-admi.php';
?>
    <div class="container">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive table-hover">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nom. De Usuario</th>
                    <th>Contraseña</th>
                    <th>Correo</th>
                    <th>Tipo De Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM usuarios";
                $result_usuarios = mysqli_query ($bd, $query);

                while($row = mysqli_fetch_array($result_usuarios)) { ?>
                    <tr>
                        <td><?php echo$row['nombre'] ?> </td>
                        <td><?php echo$row['apellido'] ?> </td>
                        <td><?php echo$row['nom_usuario'] ?> </td>
                        <td><?php echo$row['password'] ?> </td>
                        <td><?php echo$row['email'] ?> </td>
                        <td><?php echo$row['tipo_usuario'] ?> </td>
                        <td>
                            <a href="modificar_usuario.php?id_usuario=<?php echo $row['id_usuario']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="inc/eliminar_usuario.php?id_usuario=<?php echo $row['id_usuario']?>" class="btn btn-secondary">
                                <i class="far fa-trash-alt"></i> 
                            </a>
                            
                        </td>
                    </tr> 
                <?php } ?>
            </tbody>
        </table>

    </div>
    </div>
 
<?php
    include 'templates/footer-admi.php';
?>