<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
      header("Location: ../index.php");
    }

    include 'conexion.php';

    if(isset($_GET['id_usuario'])){
        $id_usuario = $_GET['id_usuario'];
        $query = "DELETE from usuarios where id_usuario = $id_usuario";
        $result = mysqli_query($bd, $query);
        if(!$result){
            die("Query failed");
        }
        echo '<script type="text/javascript">
                alert("Eliminaste con exito el usuario");
                window.location.href="../mostrar_usuario.php";
                </script>';
    }
    
?>