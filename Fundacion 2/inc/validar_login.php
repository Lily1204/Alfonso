<?php
   require 'conexion2.php';
    try {
   $base= new PDO("mysql:host=$server;dbname=$database;",$username, $password);
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql ="SELECT * FROM usuarios WHERE email= :email AND password = :password ";
   $resultado=$base->prepare($sql);
   $login=htmlentities(addslashes($_POST["email"]));    //convierte cualquier simbolo a html
   $password=htmlentities(addslashes($_POST["password"]));


   $resultado->bindValue(":email",$login);
   $resultado->bindValue(":password",$password);

   $resultado->execute();

   $numero_registro = $resultado->rowCount();

   if ($numero_registro!=0) {
     session_start();//antes de direccionar al usuario que inicia sesion se crea la sesion
     $_SESSION["usuario"]=$_POST["email"];
       header("Location: ../index_usuario.php");
   }

   else{

   $sql ="SELECT * FROM admin WHERE email_admin = :email AND password = :password";
   $resultado=$base->prepare($sql);
   $login=htmlentities(addslashes($_POST["email"]));    //convierte cualquier simbolo a html
   $password=htmlentities(addslashes($_POST["password"]));

   $resultado->bindValue(":email",$login);
   $resultado->bindValue(":password",$password);
   $resultado->execute();

   $numero_registro = $resultado->rowCount();

   if ($numero_registro!=0) {
     session_start();
     $_SESSION["admin"]=$_POST["email"];//se almacena en la variable $_sesion el login del usuario
     header("Location: ../index_admi.php");
   }

   else {
      echo '<script type="text/javascript">
     alert("Usuario Y/O contraseña incorrectas");
     window.location.href="../index.php";
     </script>';
        }
        
}
 } catch (Exception $e) {
   die('No hay conexion con la base de datos: '.$e->getMessage());
 }
    ?>