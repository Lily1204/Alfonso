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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM imagenes";
                $resultado = $bd->query($query);

                while($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td class="text-center"><?php echo$row['nombre'] ?> </td>
                        <td><img height="320px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/> </td>
                        <td>
                            <a href="modificar_avisos2.php?id=<?php echo $row['id'];?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="inc/eliminar_avisos2.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
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