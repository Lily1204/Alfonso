<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
    include 'inc/conexion.php';
    include 'templates/header-usuario.php';
    include 'templates/navegacion-usuario.php';
?>
    <div class="container">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive table-hover">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Imagen </th>
                    <th>Objetivo</th>
                    <th>Actividades</th>
                    <th>Instructor</th>
                    <th>Fecha</th>
                    <th>Verificación </th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM programas";
                $result_programas = mysqli_query ($bd, $query);

                while($row = mysqli_fetch_array($result_programas)) { ?>
                    <tr>
                        <td><?php echo$row['nombre'] ?> </td>
                        <td><?php echo$row['imagen'] ?> </td>
                        <td><?php echo$row['objetivo'] ?> </td>
                        <td><?php echo$row['actividades'] ?> </td>
                        <td><?php echo$row['instructor'] ?> </td>
                        <td><?php echo$row['fecha'] ?> </td>
                        <td><?php echo$row['verificacion'] ?> </td>
                        <td><?php echo$row['cantidad'] ?> </td>
                        <td>
                            <a href="modificar_programa.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="inc/eliminar_programa.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
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