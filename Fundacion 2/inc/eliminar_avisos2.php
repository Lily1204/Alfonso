<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: ../index.php");
    }

    include 'conexion.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE from imagenes where id = $id";
        $result = mysqli_query($bd, $query);
        if(!$result){
            die("Query failed");
        }
        echo '<script type="text/javascript">
                alert("Eliminaste con exito la imagen");
                window.location.href="../index_usuario.php";
                </script>';
    }
    
?>