<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: ../index.php");
    }
    include 'conexion.php';
    error_reporting(E_ALL);
    ini_set('display_Errors', '1');
    if(isset($_POST['agregar_imagen'])){
        $nombre = $_POST['nombre'];
        $imagen = $_POST['ruta'];

        $query = "INSERT INTO imagenes2(nombre, imagen)
            VALUES('$nombre', '$imagen')";
        
        $result = mysqli_query($bd, $query);

        if(!$result){
            die("query_field");
        }
        echo '<script type="text/javascript">
                alert("Imagen Guardada");
                window.location.href="../index_admi.php";
                </script>';
    }
?>