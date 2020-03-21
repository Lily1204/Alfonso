<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
      header("Location: ../index.php");
    }
    include 'conexion.php';

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE imagenes set nombre='$nombre', imagen='$imagen' WHERE id = '$id'"; 
    
    $resultado = $bd->query($query);

    if($resultado){
        echo '<script type="text/javascript">
                alert("imagen actualizada");
                window.location.href="../mostrar_imagen.php";
                </script>';
    }else
        echo '<script type="text/javascript">
                alert("No se guardo la imagen");
                window.location.href="../galeria 2.php";
                </script>';

?>