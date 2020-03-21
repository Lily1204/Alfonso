<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: ../index.php");
    }
    include 'conexion.php';
    error_reporting(E_ALL);
    ini_set('display_Errors', '1');
    if(isset($_POST['agregar_usuario'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nom_usuario = $_POST['nom_usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $tipo_usuario = $_POST['tipo_usuario'];

        $query = "INSERT INTO usuarios(nombre, apellido, nom_usuario, password, email, tipo_usuario)
            VALUES('$nombre', '$apellido', '$nom_usuario', '$password', '$email', '$tipo_usuario')";
        
        $result = mysqli_query($bd, $query);

        if(!$result){
            die("query_field");
        }
        echo '<script type="text/javascript">
                alert("Usuario Guardado");
                window.location.href="../index_admi.php";
                </script>';
    }
?>