<?php
    
    include 'conexion.php';
    $id = $_REQUEST['id']; 

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE imagenes SET nombre='$nombre', imagen='$imagen' where id ='$id'";
    $resultado = $bd->query($query);

    if($resultado){
        echo '<script type="text/javascript">
                alert("Aviso Guardado");
                window.location.href="../index_usuario.php";
                </script>';
    }else
        echo '<script type="text/javascript">
        alert("Error, No se Guardo");
        window.location.href="../index_usuario.php";
        </script>';

?>