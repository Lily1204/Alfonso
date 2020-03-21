<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: ../index.php");
    }
    include 'conexion.php';
    error_reporting(E_ALL);
    ini_set('display_Errors', '1');
    if(isset($_POST['agregar_programa'])){
        $nombre = $_POST['nombre'];
        $imagen = $_POST['ruta'];
        $objetivo = $_POST['objetivo'];
        $actividades = $_POST['actividades'];
        $instructor = $_POST['instructor'];
        $fecha = $_POST['fecha'];
        $verificacion = $_POST['verificacion'];
        $cantidad = $_POST['cantidad'];

        $query = "INSERT INTO programas(nombre, imagen, objetivo, actividades, instructor, fecha, verificacion, cantidad)
            VALUES('$nombre', '$imagen', '$objetivo', '$actividades', '$instructor', '$fecha', '$verificacion', '$cantidad')";
        
        $result = mysqli_query($bd, $query);

        if(!$result){
            die("query_field");
        }
        echo '<script type="text/javascript">
                alert("programa guardado");
                window.location.href="../index_admi.php";
                </script>';
    }
?>