
<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
  }
  include 'templates/header-usuario.php';
  include 'templates/navegacion-usuario.php';
  
?>

<?php
  include 'templates/footer-admi.php';
?>
     
